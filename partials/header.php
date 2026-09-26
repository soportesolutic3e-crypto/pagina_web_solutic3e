<?php
/**
 * Cabecera común: <head>, apertura de <body> y barra de navegación.
 *
 * Variables opcionales que cada página define ANTES de incluir este archivo:
 *   $titulo       string  Texto de <title>
 *   $descripcion  string  Meta description para Google
 *   $activa       string  Página activa en el menú: index | sobrenosotros | productos | servicios
 *   $noindex      bool    true para que Google no indexe la página
 *   $estilos      string  CSS propio de la página (se inserta en <head>)
 */
$titulo      = $titulo      ?? 'Solutic3e | Transformando Ideas';
$descripcion = $descripcion ?? 'Automatización de procesos, desarrollo de software, Web Services y soporte técnico en Zipaquirá, Cundinamarca.';
$activa      = $activa      ?? '';
$noindex     = $noindex     ?? false;
$estilos     = $estilos     ?? '';

// URL canónica calculada a partir del archivo actual (index.php -> raíz)
$sitio       = 'https://solutic3e.com/';
$pagina      = basename($_SERVER['SCRIPT_NAME'] ?? 'index.php', '.php');
$urlCanonica = $sitio . ($pagina === 'index' ? '' : $pagina . '.php');
$imagenOg    = $sitio . 'img/og-image.jpg';

$menu = [
    'index'         => ['/',                  'Inicio'],
    'sobrenosotros' => ['sobrenosotros.php',  'Sobre Nosotros'],
    'productos'     => ['productos.php',      'Productos'],
    'servicios'     => ['servicios.php',      'Servicios'],
];

if (!function_exists('e')) {
    function e(string $valor): string
    {
        return htmlspecialchars($valor, ENT_QUOTES, 'UTF-8');
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= e($titulo) ?></title>
  <meta name="description" content="<?= e($descripcion) ?>">
<?php if ($noindex): ?>
  <meta name="robots" content="noindex, nofollow">
<?php endif; ?>
  <link rel="canonical" href="<?= e($urlCanonica) ?>">

  <!-- Favicon -->
  <link rel="icon" href="/favicon.ico" sizes="any">
  <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32.png">
  <link rel="apple-touch-icon" href="/img/apple-touch-icon.png">
  <meta name="theme-color" content="#040759">

  <!-- Open Graph: vista previa al compartir en WhatsApp, Facebook, LinkedIn -->
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="Solutic3e">
  <meta property="og:locale" content="es_CO">
  <meta property="og:title" content="<?= e($titulo) ?>">
  <meta property="og:description" content="<?= e($descripcion) ?>">
  <meta property="og:url" content="<?= e($urlCanonica) ?>">
  <meta property="og:image" content="<?= e($imagenOg) ?>">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:alt" content="Solutic3e - Automatización de procesos y desarrollo de software">
  <meta name="twitter:card" content="summary_large_image">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">
<?php if ($estilos !== ''): ?>
  <style>
<?= $estilos ?>
  </style>
<?php endif; ?>
</head>
<body>
<!------------------------------------------------------------------------------------------------------->

                    <!-- BARRA DE NAVEGACIÓN -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="/"> <!-- Inicio Logo -->
        <img src="img/Logo_actual.webp" alt="Solutic3e" height="45">
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu"
              aria-controls="menu" aria-expanded="false" aria-label="Abrir menú">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="menu"> <!--secciones navegacion -->
        <ul class="navbar-nav ms-auto">
<?php foreach ($menu as $clave => [$url, $texto]): ?>
          <li class="nav-item">
            <a class="nav-link<?= $activa === $clave ? ' active' : '' ?>" href="<?= $url ?>"<?= $activa === $clave ? ' aria-current="page"' : '' ?>><?= $texto ?></a>
          </li>
<?php endforeach; ?>
        </ul>
      </div>
    </div>
  </nav>

<!------------------------------------------------------------------------------------------------------->
