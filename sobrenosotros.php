<?php
$titulo      = 'Sobre Nosotros | Solutic3E';
$descripcion = 'Conoce a Solutic3e: misión, visión y valores de nuestro equipo de desarrollo de software y automatización de procesos.';
$activa      = 'sobrenosotros';
require __DIR__ . '/partials/header.php';
?>
<!------------------------------------------------------------------------------------------------------->

<section id="sobre-nosotros" class="py-5 text-white bg-azul-oscuro">
  <div class="container">
    <h1 class="h2 text-center mb-4" data-aos="fade-up">Sobre Nosotros</h1>

    <!-- Nuestra Empresa -->
    <div class="row mb-5 align-items-center">
      <div class="col-md-6 mb-4 mb-md-0" data-aos="fade-right">
        <img src="img/laptop.webp" alt="Equipo Solutic3e" class="img-fluid rounded shadow laptop">
      </div>
      <div class="col-md-6" data-aos="fade-left">
        <div class="bg-white text-dark p-4 rounded shadow-sm">
          <h4 class="mb-3">Nuestra Empresa</h4>
          <p>
            En Solutic3e transformamos ideas en soluciones tecnológicas reales. Nos especializamos en automatización de procesos, desarrollo de aplicaciones y servicios web, comprometidos siempre con la innovación y la excelencia.
          </p>
          <p>
            Nuestro equipo está conformado por profesionales apasionados por mejorar la eficiencia y competitividad de nuestros clientes, ofreciendo un servicio personalizado y confiable.
          </p>
        </div>
      </div>
    </div>

    <!-- Nuestros Valores -->
    <div class="row" data-aos="fade-up">
      <div class="col-md-4 text-center mb-4">
        <div class="bg-white text-dark p-4 rounded shadow-sm h-100 zoom-hover">
          <i class="bi bi-bullseye display-4 text-primary mb-3"></i>
          <h5>Misión</h5>
          <p>Brindar soluciones tecnológicas que impulsen la transformación digital de nuestros clientes.</p>
        </div>
      </div>
      <div class="col-md-4 text-center mb-4">
        <div class="bg-white text-dark p-4 rounded shadow-sm h-100 zoom-hover">
          <i class="bi bi-eye-fill display-4 text-primary mb-3"></i>
          <h5>Visión</h5>
          <p>Ser referentes en innovación tecnológica y desarrollo de software en Colombia y Latinoamérica.</p>
        </div>
      </div>
      <div class="col-md-4 text-center mb-4">
        <div class="bg-white text-dark p-4 rounded shadow-sm h-100 zoom-hover">
          <i class="bi bi-heart-fill display-4 text-primary mb-3"></i>
          <h5>Valores</h5>
          <p>Compromiso, responsabilidad, confianza, calidad, respeto y pasión por la tecnología.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require __DIR__ . '/partials/footer.php'; ?>
