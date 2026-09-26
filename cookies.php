<?php
$titulo      = 'Política de Cookies | Solutic3e';
$descripcion = 'Cómo usa cookies el sitio web de Solutic3e y cómo gestionarlas.';
$activa      = '';
$estilos     = <<<'CSS'
    /* Estilos solo para el contenido de la política, no afectan nav ni footer */
    .pagina-legal {
      max-width: 960px;
      margin: 0 auto;
      padding: 40px 20px;
      font-family: 'Segoe UI', sans-serif;
      color: #212121;
    }
    .pagina-legal h1 {
      color: #0B2C4D;
      text-align: center;
      font-size: 2.5rem;
      margin-bottom: 0;
    }
    .pagina-legal .fecha {
      text-align: center;
      font-size: 1rem;
      color: #666;
      margin-top: 4px;
      margin-bottom: 30px;
    }
    .pagina-legal p {
      text-align: justify;
      line-height: 1.7;
    }
    .pagina-legal h2 {
      color: #0B2C4D;
      margin-top: 30px;
      font-size: 1.5rem;
    }
    .pagina-legal ul {
      margin-left: 20px;
      line-height: 1.6;
    }
    .pagina-legal a {
      color: #0B2C4D;
      text-decoration: underline;
    }
CSS;
require __DIR__ . '/partials/header.php';
?>
<main class="pagina-legal">
    <h1 class="fw-bold">Política de Cookies</h1>
    <p class="fecha">Última actualización: Agosto de 2025</p>

    <p>En cumplimiento de lo dispuesto por la normativa vigente sobre protección de datos, Solutic3E S.A.S informa a los usuarios que este sitio web utiliza cookies para mejorar la experiencia de navegación y garantizar el correcto funcionamiento del portal.</p>

    <h2>¿Qué son las cookies?</h2>
    <p>Las cookies son pequeños archivos de texto que un sitio web guarda en el dispositivo del usuario. Estos archivos contienen datos que permiten recordar información sobre la visita, como el idioma preferido o el contenido de una cesta de compra.</p>

    <h2>Tipos de cookies utilizadas</h2>
    <ul>
      <li><strong>Cookies técnicas:</strong> necesarias para el correcto funcionamiento del sitio web.</li>
      <li><strong>Cookies de análisis:</strong> permiten cuantificar el número de usuarios y realizar análisis estadísticos.</li>
      <li><strong>Cookies de terceros:</strong> utilizadas por servicios externos como Google Analytics.</li>
    </ul>

    <h2>Gestión de cookies</h2>
    <p>Al acceder a nuestro sitio por primera vez, se muestra un banner donde puedes aceptar o rechazar las cookies. También puedes configurar tu navegador para bloquearlas o eliminarlas en cualquier momento.</p>

    <h2>Contacto</h2>
    <p>Si tienes preguntas sobre nuestra política de cookies, puedes escribirnos a <a href="mailto:soporte01@solutic3e.com">soporte01@solutic3e.com</a>.</p>

    <p>Puedes conocer más en nuestra <a href="politica_de_datos.php">Política de Tratamiento de Datos</a>.</p>
  </main>

<?php require __DIR__ . '/partials/footer.php'; ?>
