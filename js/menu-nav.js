document.addEventListener("DOMContentLoaded", function () {
    // Cerrar el menú principal en mobile al hacer click en un enlace
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link, .navbar-nav .btn-modern');
    const menuToggle = document.getElementById('navbarNav');
    
    // Usamos la API de Bootstrap si está disponible
    navLinks.forEach((l) => {
        l.addEventListener('click', () => {
            if (menuToggle.classList.contains('show')) {
                // Opción más segura con la API de Bootstrap 5
                if (typeof bootstrap !== 'undefined') {
                    const bsCollapse = new bootstrap.Collapse(menuToggle, {
                        toggle: false
                    });
                    bsCollapse.hide();
                } else {
                    menuToggle.classList.remove('show');
                }
            }
        });
    });

    // Cambiar estilo de navbar al hacer scroll
    const navbar = document.querySelector('.navbar-glass');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.style.background = 'rgba(5, 5, 5, 0.95)';
            navbar.style.boxShadow = '0 4px 30px rgba(0, 0, 0, 0.5)';
        } else {
            navbar.style.background = 'rgba(10, 10, 10, 0.8)';
            navbar.style.boxShadow = 'none';
        }
    });
});
