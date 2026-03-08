<section id="contacto" class="section-padding position-relative">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Contáctanos</h2>
            <p class="text-muted fs-5">Estamos listos para hacer realidad tu proyecto web</p>
        </div>

        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="glass-panel p-4 p-md-5 mx-auto" style="max-width: 500px;">
                    <form class="custom-form" action="#" method="POST">
                        <h4 class="text-white font-heading mb-4 border-bottom border-secondary pb-2">Envianos tu consulta</h4>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre Completo</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ej: Juan Pérez" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@correo.com" required>
                        </div>
                        <div class="mb-4">
                            <label for="mensaje" class="form-label">Mensaje o Idea</label>
                            <textarea class="form-control" id="mensaje" name="mensaje" rows="4" placeholder="Cuentanos sobre tu proyecto..." required></textarea>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn-modern">Enviar Mensaje <i class="bi bi-send ms-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="col-lg-5 col-md-8 text-center text-lg-start ms-lg-5">
                <div class="mb-5">
                    <h3 class="text-white font-heading mb-3">Hablemos por WhatsApp</h3>
                    <p class="text-light mb-4" style="line-height: 1.6;">
                        ¿Preferís una respuesta más rápida? Escribinos directamente y te asesoramos al instante. Solo contanos cuál es tu idea y te ayudamos a potenciarla.
                    </p>
                    
                    <?php
                      $numero = '5491135003820';
                    ?>
                    <a href="<?php echo whatsapp_link_simple($numero); ?>" target="_blank" class="btn btn-success rounded-pill px-4 py-3 fw-bold shadow">
                        <i class="bi bi-whatsapp fs-4 me-2 align-middle"></i> Chat Directo
                    </a>
                </div>
                
                <hr class="border-secondary opacity-25 my-4">
                
                <div>
                    <h4 class="text-white font-heading fs-5 mb-3">Otros medios</h4>
                    <p class="text-muted mb-1"><i class="bi bi-envelope text-secondary me-2"></i> info@landingweb.com.ar</p>
                    <p class="text-muted"><i class="bi bi-telephone text-secondary me-2"></i> +54 9 11 3500-3820</p>
                </div>
            </div>
        </div>
    </div>
</section>
