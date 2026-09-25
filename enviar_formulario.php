<?php
declare(strict_types=1);

// Producción: errores al log, nunca a pantalla
ini_set('display_errors', '0');
ini_set('log_errors', '1');
ini_set('error_log', dirname(__DIR__) . '/php_errors.log');
error_reporting(E_ALL);

$config = require dirname(__DIR__) . '/solutic3e_config.php';

function responderError(int $codigo, string $mensaje): void
{
    http_response_code($codigo);
    header('Content-Type: text/plain; charset=UTF-8');
    exit($mensaje);
}

// 1. Solo POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    responderError(405, 'Método no permitido.');
}

// 2. Honeypot: los bots llenan este campo oculto, los humanos no
if (!empty($_POST['website'] ?? '')) {
    header('Location: agradecimiento.html', true, 303);
    exit;
}

// 3. Captura
$nombre     = trim((string)($_POST['nombre']     ?? ''));
$compania   = trim((string)($_POST['compania']   ?? ''));
$correo     = trim((string)($_POST['correo']     ?? ''));
$telefono   = trim((string)($_POST['telefono']   ?? ''));
$referencia = trim((string)($_POST['referencia'] ?? ''));
$mensaje    = trim((string)($_POST['mensaje']    ?? ''));
$politica   = ($_POST['politica'] ?? '') === '1';

// 4. Validación en servidor (límites = tamaño de columnas en BD)
$errores = [];
$largo = fn(string $v): int => mb_strlen($v, 'UTF-8');

if ($largo($nombre) < 2 || $largo($nombre) > 100)       $errores[] = 'Nombre inválido.';
if ($largo($compania) < 2 || $largo($compania) > 100)   $errores[] = 'Compañía inválida.';
if (!filter_var($correo, FILTER_VALIDATE_EMAIL) || $largo($correo) > 100) $errores[] = 'Correo inválido.';
if (!preg_match('/^\+?[0-9\s\-()]{7,20}$/', $telefono)) $errores[] = 'Teléfono inválido.';
if ($largo($referencia) > 100)                          $errores[] = 'Referencia demasiado larga.';
if ($largo($mensaje) > 2000)                            $errores[] = 'Mensaje demasiado largo.';
if (!$politica)                                         $errores[] = 'Debes aceptar la política de datos.';

if ($errores) {
    responderError(422, implode("\n", $errores));
}

// 5. reCAPTCHA con validación de hostname
$token = (string)($_POST['g-recaptcha-response'] ?? '');
if ($token === '') {
    responderError(400, 'Completa la verificación reCAPTCHA.');
}

$ch = curl_init('https://www.google.com/recaptcha/api/siteverify');
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST           => true,
    CURLOPT_POSTFIELDS     => http_build_query([
        'secret'   => $config['recaptcha_secret'],
        'response' => $token,
        'remoteip' => $_SERVER['REMOTE_ADDR'] ?? '',
    ]),
    CURLOPT_TIMEOUT        => 10,
]);
$respuesta = curl_exec($ch);
$errorCurl = curl_error($ch);
curl_close($ch);

if ($respuesta === false) {
    error_log("reCAPTCHA cURL: $errorCurl");
    responderError(503, 'No pudimos verificar el formulario. Intenta de nuevo.');
}

$captcha = json_decode($respuesta, true);
if (empty($captcha['success']) || !in_array($captcha['hostname'] ?? '', $config['hosts_permitidos'], true)) {
    responderError(400, 'Verificación reCAPTCHA inválida.');
}

// 6. Guardar en BD (fecha_envio se llena sola)
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $db   = $config['db'];
    $conn = new mysqli($db['host'], $db['usuario'], $db['password'], $db['base']);
    $conn->set_charset('utf8mb4');

    $stmt = $conn->prepare(
        'INSERT INTO formulario_contacto
            (nombre, compania, correo, telefono, referencia, mensaje, acepta_politica, ip_origen, version_politica)
         VALUES (?, ?, ?, ?, ?, ?, 1, ?, ?)'
    );
    $ip      = $_SERVER['REMOTE_ADDR'] ?? null;
    $version = '2025-08';
    $stmt->bind_param('ssssssss', $nombre, $compania, $correo, $telefono, $referencia, $mensaje, $ip, $version);
    $stmt->execute();
    $stmt->close();
    $conn->close();
} catch (mysqli_sql_exception $e) {
    error_log('Formulario BD: ' . $e->getMessage());
    responderError(500, 'Ocurrió un error al guardar tu mensaje. Escríbenos por WhatsApp.');
}

// 7. Notificación por correo (si falla, el lead ya está guardado)
$asunto = '=?UTF-8?B?' . base64_encode("Nuevo lead web: $compania") . '?=';
$cuerpo = "Nuevo formulario desde solutic3e.com\n\n"
        . "Nombre: $nombre\nCompañía: $compania\nCorreo: $correo\n"
        . "Teléfono: $telefono\nReferencia: $referencia\n\nMensaje:\n$mensaje\n";
$headers = implode("\r\n", [
    'From: Solutic3e Web <' . $config['correo_remitente'] . '>',
    'Content-Type: text/plain; charset=UTF-8',
]);

$enviado = mail(
    $config['correo_destino'],
    $asunto,
    $cuerpo,
    $headers,
    '-f' . $config['correo_remitente']   // remitente de sobre = tu dominio
);

if (!$enviado) {
    error_log('Formulario: mail() falló al notificar un lead nuevo');
}

// 8. PRG: 303 evita reenvío al refrescar
header('Location: agradecimiento.html', true, 303);
exit;