<?php
$titulo      = 'Productos | Solutic3E';
$descripcion = 'Sistemas personalizados, apps empresariales y móviles, automatización de tareas, huellero biométrico y especialistas en bases de datos.';
$activa      = 'productos';
require __DIR__ . '/partials/header.php';
?>
<section id="productos" class="py-5 bg-white">
  <div class="container">
    <h1 class="h2 text-center mb-5" data-aos="fade-up">Nuestros Productos</h1>
    <div class="row g-4">

      <!-- Producto 1 -->
      <div class="col-md-4" data-aos="zoom-in">
        <div class="card h-100 shadow border-0 text-center card-alt zoom-hover">
          <div class="card-body">
            <i class="bi bi-gear-wide-connected display-4 text-primary mb-3"></i>
            <h5 class="card-title">Sistemas Personalizados</h5>
            <p class="card-text">Creamos software a medida para adaptarse a los flujos específicos de tu empresa, con funcionalidades únicas y escalables.</p>
          </div>
        </div>
      </div>

      <!-- Producto 2 -->
      <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
        <div class="card h-100 shadow border-0 text-center">
          <div class="card-body">
            <i class="bi bi-laptop display-4 text-primary mb-3"></i>
            <h5 class="card-title">Apps Empresariales</h5>
            <p class="card-text">Desarrollamos aplicaciones móviles o web que permiten controlar inventarios, ventas, empleados, y más.</p>
          </div>
        </div>
      </div>

      <!-- Producto 3 -->
      <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
        <div class="card h-100 shadow border-0 text-center card-alt zoom-hover">
          <div class="card-body">
            <i class="bi bi-robot display-4 text-primary mb-3"></i>
            <h5 class="card-title">Automatización de Tareas</h5>
            <p class="card-text">Integramos bots y scripts que ahorran tiempo en tareas repetitivas como reportes, bases de datos o seguimiento.</p>
          </div>
        </div>
      </div>

      <!-- Producto 4 -->
      <div class="col-md-4" data-aos="zoom-in" data-aos-delay="300">
        <div class="card h-100 shadow border-0 text-center">
          <div class="card-body">
            <i class="bi bi-diagram-3-fill display-4 text-primary mb-3"></i>
            <h5 class="card-title">Sistemas Integrados</h5>
            <p class="card-text">Creamos plataformas que conectan varios módulos (ventas, inventario, clientes) en una única solución robusta.</p>
          </div>
        </div>
      </div>

      <!-- Producto 5 -->
      <div class="col-md-4" data-aos="zoom-in" data-aos-delay="400">
        <div class="card h-100 shadow border-0 text-center card-alt zoom-hover">
          <div class="card-body">
            <i class="bi bi-cloud-upload-fill display-4 text-primary mb-3"></i>
            <h5 class="card-title">Productos en la Nube</h5>
            <p class="card-text">Tu software estará disponible 24/7 desde cualquier dispositivo con acceso seguro y respaldos automáticos.</p>
          </div>
        </div>
      </div>

      <!-- Producto 6 -->
      <div class="col-md-4" data-aos="zoom-in" data-aos-delay="500">
        <div class="card h-100 shadow border-0 text-center">
          <div class="card-body">
            <i class="bi bi-clipboard-data display-4 text-primary mb-3"></i>
            <h5 class="card-title">Paneles de Gestión</h5>
            <p class="card-text">Diseñamos paneles interactivos para tomar decisiones con métricas, reportes y análisis visuales en tiempo real.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!------------------------------------------------------------------------------------------------------->
<section id="bases-datos" class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-4" data-aos="fade-up">Especialistas en Bases de Datos</h2>
    <p class="text-center mb-5" data-aos="fade-up" data-aos-delay="100">
      Contamos con amplia experiencia en diseño, modelado y administración de bases de datos relacionales y no relacionales.
    </p>

    <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 g-4 justify-content-center align-items-center">

      <!-- 1 -->
      <div class="col text-center" data-aos="zoom-in">
        <img src="img/mysql.webp" alt="MySQL" loading="lazy" class="img-fluid" style="max-height: 60px;">
      </div>
      <!-- 2 -->
      <div class="col text-center" data-aos="zoom-in" data-aos-delay="50">
        <img src="img/postgre.webp" alt="PostgreSQL" loading="lazy" class="img-fluid" style="max-height: 60px;">
      </div>
      <!-- 3 -->
      <div class="col text-center" data-aos="zoom-in" data-aos-delay="100">
        <img src="img/sqlserver.webp" alt="SQL Server" loading="lazy" class="img-fluid" style="max-height: 60px;">
      </div>
      <!-- 4 -->
      <div class="col text-center" data-aos="zoom-in" data-aos-delay="150">
        <img src="img/oracle.webp" alt="Oracle" loading="lazy" class="img-fluid" style="max-height: 60px;">
      </div>
      <!-- 5 -->
      <div class="col text-center" data-aos="zoom-in" data-aos-delay="200">
        <img src="img/firebird.webp" alt="Firebird" loading="lazy" class="img-fluid" style="max-height: 60px;">
      </div>
      <!-- 6 -->
      <div class="col text-center" data-aos="zoom-in" data-aos-delay="250">
        <img src="img/interbase.webp" alt="Interbase" loading="lazy" class="img-fluid" style="max-height: 60px;">
      </div>
      <!-- 7 -->
      <div class="col text-center" data-aos="zoom-in" data-aos-delay="300">
        <img src="img/mariadb.webp" alt="MariaDB" loading="lazy" class="img-fluid" style="max-height: 60px;">
      </div>
      <!-- 8 -->
      <div class="col text-center" data-aos="zoom-in" data-aos-delay="350">
        <img src="img/sqlite.webp" alt="SQLite" loading="lazy" class="img-fluid" style="max-height: 60px;">
      </div>
      <!-- 9 -->
      <div class="col text-center" data-aos="zoom-in" data-aos-delay="400">
        <img src="img/sybase.webp" alt="Sybase" loading="lazy" class="img-fluid" style="max-height: 60px;">
      </div>
      <!-- 10 -->
      <div class="col text-center" data-aos="zoom-in" data-aos-delay="450">
        <img src="img/progress.webp" alt="Progress" loading="lazy" class="img-fluid" style="max-height: 60px;">
      </div>
      <!-- 11 -->
      <div class="col text-center" data-aos="zoom-in" data-aos-delay="500">
        <img src="img/access.webp" alt="Microsoft Access" loading="lazy" class="img-fluid" style="max-height: 60px;">
      </div>
      <!-- 12 -->
      <div class="col text-center" data-aos="zoom-in" data-aos-delay="550">
        <img src="img/informix.webp" alt="IBM Informix" loading="lazy" class="img-fluid" style="max-height: 60px;">
      </div>
      <!-- 13 -->
      <div class="col text-center" data-aos="zoom-in" data-aos-delay="600">
        <img src="img/db2.webp" alt="IBM DB2" loading="lazy" class="img-fluid" style="max-height: 60px;">
      </div>
      <!-- 14 -->
      <div class="col text-center" data-aos="zoom-in" data-aos-delay="650">
        <img src="img/odbc.webp" alt="ODBC" loading="lazy" class="img-fluid" style="max-height: 60px;">
      </div>
      <!-- 15 -->
      <div class="col text-center" data-aos="zoom-in" data-aos-delay="700">
        <img src="img/msazure.webp" alt="Microsoft Azure SQL" loading="lazy" class="img-fluid" style="max-height: 60px;">
      </div>
      <!-- 16 -->
      <div class="col text-center" data-aos="zoom-in" data-aos-delay="750">
        <img src="img/amazon.webp" alt="Amazon RDS" loading="lazy" class="img-fluid" style="max-height: 60px;">
      </div>

    </div>
  </div>
</section>

<!------------------------------------------------------------------------------------------------------->

<section id="huellero-destacado" class="py-5" style="background-color: #f4f7fc;">
  <div class="container">
    <div class="row justify-content-center align-items-center shadow-lg rounded-4 p-4 bg-white" data-aos="zoom-in" style="border-radius: 1rem;">
      
      <!-- Texto -->
      <div class="col-md-6 order-2 order-md-1 text-center text-md-start">
        <h2 class="fw-bold mb-3">Huellero Biométrico</h2>
        <p class="mb-3">
          Nuestro huellero biométrico es la solución ideal para controlar accesos físicos o virtuales de forma segura. Permite identificar usuarios por huella digital y almacenar registros de entrada y salida con gran precisión.
        </p>
        <ul class="list-unstyled">
          <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Conectividad USB</li>
          <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Software de gestión incluido</li>
          <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Compatible con múltiples plataformas</li>
        </ul>
        <a href="https://wa.me/573127746648"  class="btn btn-primary mt-3">Solicita información</a>
      </div>

      <!-- Imagen -->
      <div class="col-md-6 order-1 order-md-2 text-center">
        <img src="img/huellero.webp" alt="Huellero biométrico" loading="lazy" class="img-fluid rounded-3" style="max-height: 300px;">
      </div>
    </div>
  </div>
</section>



<!------------------------------------------------------------------------------------------------------->

<section id="apps-moviles" class="py-5" style="background-color: #f4f7fc;">
  <div class="container">
    <div class="row justify-content-center align-items-center shadow-lg rounded-4 p-4 bg-white" data-aos="zoom-in" style="border-radius: 1rem;">

      <!-- Imagen -->
      <div class="col-md-6 order-1 order-md-1 text-center mb-4 mb-md-0">
        <div class="d-flex justify-content-center align-items-center" style="height: 300px;">
          <div class="position-relative" style="display: inline-block;">

            <!-- Teléfono -->
            <div style="width: 130px; height: 240px; background: #0f172a; border-radius: 28px; border: 5px solid #1e293b; padding: 12px 8px 8px; display: flex; flex-direction: column;">
              <!-- Notch -->
              <div style="width: 32px; height: 6px; background: #1e293b; border-radius: 10px; margin: 0 auto 8px;"></div>
              <!-- Pantalla app -->
              <div style="flex: 1; background: linear-gradient(160deg, #1e3a5f 0%, #185FA5 100%); border-radius: 10px; padding: 10px 8px; display: flex; flex-direction: column; gap: 6px; overflow: hidden;">
                <!-- Top bar -->
                <div style="display: flex; align-items: center; justify-content: space-between;">
                  <div style="width: 22px; height: 22px; border-radius: 50%; background: rgba(255,255,255,0.25);"></div>
                  <span style="font-size: 9px; color: rgba(255,255,255,0.9); font-weight: 600;">Mi App</span>
                  <div style="width: 8px; height: 8px; border-radius: 50%; background: #ffc107;"></div>
                </div>
                <!-- Card balance -->
                <div style="background: rgba(255,255,255,0.15); border-radius: 8px; padding: 7px 8px;">
                  <div style="font-size: 12px; color: white; font-weight: 600; line-height: 1;">$12,450</div>
                  <div style="font-size: 7px; color: rgba(255,255,255,0.6); margin-top: 2px;">Balance total</div>
                </div>
                <!-- Grid de tiles -->
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 5px;">
                  <div style="background: rgba(255,255,255,0.12); border-radius: 6px; height: 32px; display: flex; align-items: center; justify-content: center;">
                    <div style="width: 14px; height: 14px; border-radius: 4px; background: rgba(255,255,255,0.4);"></div>
                  </div>
                  <div style="background: rgba(255,255,255,0.12); border-radius: 6px; height: 32px; display: flex; align-items: center; justify-content: center;">
                    <div style="width: 14px; height: 14px; border-radius: 50%; background: rgba(255,255,255,0.4);"></div>
                  </div>
                  <div style="background: rgba(255,255,255,0.12); border-radius: 6px; height: 32px; display: flex; align-items: center; justify-content: center;">
                    <div style="width: 18px; height: 3px; background: rgba(255,255,255,0.4); border-radius: 2px;"></div>
                  </div>
                  <div style="background: rgba(255,255,255,0.12); border-radius: 6px; height: 32px; display: flex; align-items: center; justify-content: center;">
                    <div style="width: 12px; height: 12px; border-radius: 3px; background: rgba(255,255,255,0.4);"></div>
                  </div>
                </div>
                <!-- Bottom nav -->
                <div style="height: 18px; background: rgba(255,255,255,0.1); border-radius: 6px; display: flex; align-items: center; justify-content: space-around; padding: 0 8px; margin-top: auto;">
                  <div style="width: 18px; height: 4px; border-radius: 3px; background: white;"></div>
                  <div style="width: 6px; height: 6px; border-radius: 50%; background: rgba(255,255,255,0.4);"></div>
                  <div style="width: 6px; height: 6px; border-radius: 50%; background: rgba(255,255,255,0.4);"></div>
                </div>
              </div>
            </div>

            <!-- Badge Android · iOS -->
            <span style="position: absolute; top: -10px; right: -18px; background: #0d6efd; color: white; font-size: 10px; font-weight: 600; border-radius: 20px; padding: 3px 10px; border: 2px solid white; white-space: nowrap;">Android · iOS</span>

          </div>
        </div>
      </div>

      <!-- Texto -->
      <div class="col-md-6 order-2 order-md-2 text-center text-md-start">
        <h2 class="fw-bold mb-3">Desarrollo de Aplicaciones Móviles</h2>
        <p class="mb-3">
          Creamos aplicaciones móviles a la medida de tu negocio, con diseño intuitivo y rendimiento optimizado para Android e iOS. Acompañamos cada etapa: desde el análisis de requerimientos hasta el lanzamiento y soporte.
        </p>
        <ul class="list-unstyled">
          <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Android e iOS nativos o híbridos</li>
          <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Diseño UX/UI personalizado</li>
          <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Integración con APIs y bases de datos</li>
        </ul>
        <a href="https://wa.me/573127746648" class="btn btn-primary mt-3">Solicita información</a>
      </div>

    </div>
  </div>
</section>

<?php require __DIR__ . '/partials/footer.php'; ?>
