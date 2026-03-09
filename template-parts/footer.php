<!-- Footer -->
<footer class="footer text-white">
    <div class="container">
        <div class="row footer-content pt-4 pb-2 text-center text-md-start">
            <div class="col-md-5 mb-4 mb-md-0">
                <div class="footer-logo mb-3">
                    <img src="./img/new/logo-transp.png" alt="Landing Web Logo" style="height: 50px;">
                    <span class="ms-2 fs-4 font-heading fw-bold">Landing<span style="color: var(--secondary)">Web</span></span>
                </div>
                <p class="text-muted pe-md-5">Somos expertos en desarrollo web a medida. Potenciamos tu marca en el mundo digital con diseños modernos, eficientes y persuasivos.</p>
                <div class="footer-social mt-4">
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
            
            <div class="col-md-3 mb-4 mb-md-0">
                <h5 class="text-white font-heading mb-4">Secciones</h5>
                <div class="footer-links">
                    <a href="#inicio">Inicio</a>
                    <a href="#nosotros">Sobre Nosotros</a>
                    <a href="#servicios">Servicios</a>
                    <a href="#contacto">Contacto</a>
                </div>
            </div>
            
            <div class="col-md-4">
                <h5 class="text-white font-heading mb-4">Contacto Directo</h5>
                <p class="text-muted mb-2"><i class="bi bi-envelope text-secondary me-2"></i> info@landingweb.com.ar</p>
                <p class="text-muted mb-4"><i class="bi bi-telephone text-secondary me-2"></i> +54 9 11 3500-3820</p>
                <p class="text-muted mb-0"><small>Lunes a Viernes de 9 a 18 hs</small></p>
            </div>
        </div>
        
        <div class="footer-bottom mt-2">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="mb-0">&copy; <span id="year"></span> Landing Web. Todos los derechos reservados.</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<script>
    document.getElementById("year").textContent = new Date().getFullYear();
</script>

<?php if (isset($_GET['status'])): ?>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        <?php if ($_GET['status'] == 'success'): ?>
            alert("Tu mensaje ha sido enviado correctamente. Nos pondremos en contacto a la brevedad.");
        <?php elseif ($_GET['status'] == 'error'): ?>
            alert("<?php echo isset($_GET['message']) ? htmlspecialchars($_GET['message']) : 'Hubo un error al enviar el mensaje. Inténtalo de nuevo.'; ?>");
        <?php endif; ?>
    });
</script>
<?php endif; ?>