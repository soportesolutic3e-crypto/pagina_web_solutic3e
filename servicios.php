<?php
$titulo      = 'Servicios | Solutic3E';
$descripcion = 'Análisis, desarrollo de soluciones, gestión de datos, integración de sistemas y soporte técnico directo.';
$activa      = 'servicios';
require __DIR__ . '/partials/header.php';
?>
<!-- SECCIÓN SERVICIOS -->
<section id="servicios" class="py-5 text-white" style="background-color: #040759;">
  <div class="container">

    <!-- TÍTULO -->
    <h1 class="h2 text-center mb-4" data-aos="fade-up">Nuestros Servicios</h1>
    <p class="text-center text-white mb-5" data-aos="fade-up" data-aos-delay="100">
      Te ofrecemos soluciones tecnológicas completas que integran análisis, desarrollo, datos y un soporte excepcional.
    </p>

    <!-- GRID ZIG-ZAG -->
    <div class="row g-4 justify-content-center">

      <!-- Servicio 1 -->
      <div class="col-md-4" data-aos="fade-up">
        <div class="p-4 rounded-4 h-100 shadow bg-white text-dark text-center zoom-hover">
          <i class="bi bi-lightbulb-fill fs-1 text-primary mb-3"></i>
          <h5 class="fw-bold">Análisis y planificación</h5>
          <p>Evaluamos tus necesidades y diseñamos estrategias eficientes para lograr tus objetivos.</p>
        </div>
      </div>

      <!-- Servicio 2 -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="p-4 rounded-4 h-100 shadow text-center zoom-hover" style="background-color: #f5f5f5; color: #040759;">
          <i class="bi bi-braces fs-1 text-primary mb-3"></i>
          <h5 class="fw-bold">Desarrollo de soluciones</h5>
          <p>Diseñamos herramientas digitales funcionales, modernas y enfocadas en tus procesos.</p>
        </div>
      </div>

      <!-- Servicio 3 -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
        <div class="p-4 rounded-4 h-100 shadow bg-white text-dark text-center zoom-hover">
          <i class="bi bi-database-fill-gear fs-1 text-primary mb-3"></i>
          <h5 class="fw-bold">Gestión de datos</h5>
          <p>Estructuramos y optimizamos tus bases de datos para que tu información esté segura y disponible.</p>
        </div>
      </div>

      <!-- Servicio 4 -->
      <div class="col-md-4" data-aos="fade-up">
        <div class="p-4 rounded-4 h-100 shadow text-center zoom-hover" style="background-color: #f5f5f5; color: #040759;">
          <i class="bi bi-diagram-3 fs-1 text-primary mb-3"></i>
          <h5 class="fw-bold">Integración de sistemas</h5>
          <p>Conectamos tus servicios, apps y procesos para que trabajen como un todo coordinado.</p>
        </div>
      </div>

      <!-- Servicio 5 -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="p-4 rounded-4 h-100 shadow bg-white text-dark text-center zoom-hover">
          <i class="bi bi-graph-up fs-1 text-primary mb-3"></i>
          <h5 class="fw-bold">Documentación y mejora</h5>
          <p>Documentamos todo tu sistema y proponemos mejoras continuas basadas en análisis reales.</p>
        </div>
      </div>
    </div>

    <!-- BLOQUE DESTACADO: SOPORTE -->
    <div class="row justify-content-center mt-5">
      <div class="col-12" data-aos="zoom-in">
        <div class="p-5 rounded-4 bg-white text-dark shadow-lg">
          <h3 class="text-center fw-bold mb-3">Soporte técnico: nuestro sello</h3>
          <p class="text-center text-muted mb-5">
            Lo que realmente nos diferencia: nuestro acompañamiento antes, durante y después de cada implementación.
          </p>

          <div class="row text-center">
            <div class="col-md-4 mb-4">
              <i class="bi bi-headset fs-1 text-primary"></i>
              <h5 class="mt-2">Atención directa</h5>
              <p class="text-muted">Contacto por WhatsApp, correo y reuniones virtuales personalizadas.</p>
            </div>
            <div class="col-md-4 mb-4">
              <i class="bi bi-clock-history fs-1 text-primary"></i>
              <h5 class="mt-2">Disponibilidad</h5>
              <p class="text-muted">Respuestas rápidas en horarios amplios según tus necesidades.</p>
            </div>
            <div class="col-md-4 mb-4">
              <i class="bi bi-stars fs-1 text-primary"></i>
              <h5 class="mt-2">Mejoras constantes</h5>
              <p class="text-muted">Actualizaciones periódicas y sugerencias de evolución tecnológica.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<?php require __DIR__ . '/partials/footer.php'; ?>
