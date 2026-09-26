<?php
/**
 * Pie común: footer, botón de WhatsApp, banner de cookies y scripts.
 *
 * Variable opcional que cada página define ANTES de incluir este archivo:
 *   $scripts  string  HTML de scripts propios de la página (se inserta antes de </body>)
 */
$scripts = $scripts ?? '';
?>
<!------------------------------------------------------------------------------------------------------->
                <!--FOOTER-->
<footer class="bg-white text-center text-muted py-4 mt-5 border-top">
  <div class="container" data-aos="slide-up" data-aos-delay="100">
    <div class="mb-3">
      <img src="img/Logo_actual.webp" alt="Logo Solutic3e" loading="lazy" height="40">
    </div>
    <p class="mb-1">Solutic3e - Automatización de procesos y servicios tecnológicos</p>
    <p class="mb-1">📍 Zipaquirá, Cundinamarca</p>
    <p class="mb-1">📞 WhatsApp: <a href="https://wa.me/573127746648" class="text-decoration-none text-muted">+57 312 774 6648</a></p>
    <p class="mb-1">✉️ Email: <a href="mailto:info@solutic3e.com" class="text-decoration-none text-muted">info@solutic3e.com</a></p>

    <div class="d-flex justify-content-center gap-3 my-3">
      <a href="https://www.facebook.com/share/1CNtFzT6Nw/" class="text-muted fs-5" target="_blank" rel="noopener" aria-label="Facebook de Solutic3e"><i class="bi bi-facebook"></i></a>
      <a href="https://www.instagram.com/solutic3e?igsh=Z3NycTJkYno3N3B1" class="text-muted fs-5" target="_blank" rel="noopener" aria-label="Instagram de Solutic3e"><i class="bi bi-instagram"></i></a>
    </div>

    <p class="small mb-1">
      <a href="politica_de_datos.php" class="text-muted">Política de Tratamiento de Datos</a> ·
      <a href="cookies.php" class="text-muted">Política de Cookies</a>
    </p>
    <small class="d-block">&copy; <?= date('Y') ?> Solutic3e. Todos los derechos reservados.</small>
  </div>
</footer>

<!------------------------------------------------------------------------------------------------------->
                <!-- BOTÓN FLOTANTE DE WHATSAPP -->
<a href="https://wa.me/573127746648"
   class="btn-whatsapp"
   target="_blank"
   rel="noopener"
   aria-label="Chatea con nosotros por WhatsApp">
  <i class="bi bi-whatsapp"></i>
</a>

<!------------------------------------------------------------------------------------------------------->
                <!-- BANNER DE COOKIES -->
<div id="cookieBanner" style="position: fixed; bottom: 0; left: 0; width: 100%; background-color: #040759; color: white; padding: 15px 20px; display: none; z-index: 9999; text-align: center;">
  <strong style="color: #E53935;"> <a href="cookies.php">Política de cookies</a></strong>
  — Utilizamos cookies para mejorar tu experiencia. Al aceptar, estás permitiendo el uso de las mismas.
  <br><br>
  <button id="aceptarCookies" style="background-color: #E53935; color: white; padding: 8px 16px; border: none; border-radius: 5px; margin: 5px;">Aceptar</button>
  <button id="rechazarCookies" style="background-color: white; color: #040759; padding: 8px 16px; border: 1px solid #040759; border-radius: 5px; margin: 5px;">Rechazar</button>
</div>

<!------------------------------------------------------------------------------------------------------->
                <!-- SCRIPTS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init();
</script>

<!--------------cookies---------------------------------------------------------------------------------->
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const banner = document.getElementById("cookieBanner");
    const decision = localStorage.getItem("cookiesAceptadas");

    if (decision === null) {
      banner.style.display = "block";
    }

    document.getElementById("aceptarCookies").addEventListener("click", function () {
      localStorage.setItem("cookiesAceptadas", "true");
      banner.style.display = "none";
      cargarCookiesPermitidas();
    });

    document.getElementById("rechazarCookies").addEventListener("click", function () {
      localStorage.setItem("cookiesAceptadas", "false");
      banner.style.display = "none";
    });

    if (decision === "true") {
      cargarCookiesPermitidas();
    }

    function cargarCookiesPermitidas() {
      const GA_ID = "G-S1862EKK2G";
      if (window.gaCargado) return;   // evita cargarlo dos veces
      window.gaCargado = true;

      window.dataLayer = window.dataLayer || [];
      window.gtag = function () { dataLayer.push(arguments); };
      gtag("js", new Date());
      gtag("config", GA_ID);

      const gaScript = document.createElement("script");
      gaScript.async = true;
      gaScript.src = `https://www.googletagmanager.com/gtag/js?id=${GA_ID}`;
      document.head.appendChild(gaScript);
    }
  });
</script>
<?= $scripts ?>

</body>
</html>
