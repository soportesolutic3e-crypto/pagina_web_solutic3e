<?php
$titulo      = 'Gracias por Contactarnos | Solutic3E';
$descripcion = 'Hemos recibido tu mensaje.';
$activa      = '';
$noindex     = true;
$estilos     = <<<'CSS'
        body {
        background-color: #040759;
        color: white;
        font-family: 'Segoe UI', sans-serif;
        }

        .thank-you-card {
        border-radius: 16px;
        background-color: #0B2C4D;
        box-shadow: 0 0 20px rgba(0,0,0,0.4);
        animation: fadeInUp 0.8s ease-in-out;
        }

        @keyframes fadeInUp {
        0% { opacity: 0; transform: translateY(30px); }
        100% { opacity: 1; transform: translateY(0); }
        }

        .thank-icon {
        font-size: 4rem;
        color: #00BCD4;
        animation: pulse 2s infinite;
        }

        @keyframes pulse {
        0%, 100% {
            transform: scale(1);
            opacity: 1;
        }
        50% {
            transform: scale(1.1);
            opacity: 0.9;
        }
        }

        .btn-back {
        background-color: #00BCD4;
        border: none;
        }

        .btn-back:hover {
        background-color: #0097a7;
        }
CSS;
require __DIR__ . '/partials/header.php';
?>
<div class="container d-flex align-items-center justify-content-center vh-100">
    <div class="thank-you-card text-center p-5">
      <i class="bi bi-check-circle-fill thank-icon mb-4"></i>
      <h1 class="mb-3">¡Gracias por tu mensaje!</h1>
      <p class="lead mb-4">Hemos recibido tu información correctamente.<br>Muy pronto alguien de nuestro equipo se pondrá en contacto contigo.</p>
      <a href="/" class="btn btn-back px-4 py-2">
        <i class="bi bi-arrow-left me-2"></i>Volver al sitio
      </a>
    </div>
  </div>

<?php require __DIR__ . '/partials/footer.php'; ?>
