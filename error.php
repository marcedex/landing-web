<?php include 'template-parts/head.php'; ?>

<?php
$nombre = isset($_GET['nombre']) ? $_GET['nombre'] : '';
$email = isset($_GET['email']) ? $_GET['email'] : '';
$mensaje = isset($_GET['mensaje']) ? $_GET['mensaje'] : '';

$whatsapp_number = '5491135003820';
$whatsapp_text = "Hola, intenté enviar una consulta en la web pero dio error. Mis datos son:\n\n*Nombre:* $nombre\n*Email:* $email\n*Mensaje:* $mensaje";
$whatsapp_link = "https://wa.me/" . $whatsapp_number . "?text=" . urlencode($whatsapp_text);
?>

<section class="section-padding position-relative d-flex align-items-center justify-content-center" style="min-height: 80vh;">
    <div class="container text-center">
        <div class="glass-panel p-5 mx-auto" style="max-width: 600px;">
            <i class="bi bi-x-circle-fill text-danger mb-3" style="font-size: 5rem;"></i>
            <h1 class="text-white font-heading mt-4 mb-3">Error al enviar</h1>
            <p class="text-light mb-4 fs-5">Lo sentimos, hubo un problema procesando tu solicitud. Por favor, toca el botón de abajo para enviarnos tu consulta por WhatsApp.</p>
            
            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                <a href="<?php echo htmlspecialchars($whatsapp_link); ?>" target="_blank" class="btn btn-success btn-lg rounded-pill px-4 shadow">
                    <i class="bi bi-whatsapp fs-5 me-2 align-middle"></i> Enviar por WhatsApp
                </a>
                <a href="index.php" class="btn btn-outline-light btn-lg rounded-pill px-4 shadow">Volver al Inicio</a>
            </div>
        </div>
    </div>
</section>

<?php include 'template-parts/footer.php'; ?>
