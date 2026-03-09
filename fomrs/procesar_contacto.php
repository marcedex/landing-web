<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../phpmailer/src/Exception.php';
require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitizar y recoger los datos del formulario
    $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $mensaje = filter_var($_POST['mensaje'], FILTER_SANITIZE_STRING);

    if (empty($nombre) || empty($email) || empty($mensaje) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../index.php?status=error&message=" . urlencode("Por favor, completa todos los campos correctamente."));
        exit;
    }

    // Set default redirect URL
    $redirect_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '../index.php';

    // Remove any existing status or message query parameters
    $redirect_url = preg_replace('/([?&])(status|message)=[^&]*&?/', '$1', $redirect_url);
    $redirect_url = rtrim($redirect_url, '?&');
    
    // Add separator
    $separator = (parse_url($redirect_url, PHP_URL_QUERY) == NULL) ? '?' : '&';

    try {
        // Configuraciones del servidor 
        // Descomentar y configurar la sección SMTP si se requiere enviar a través de SMTP:
        // $mail->isSMTP();
        // $mail->Host       = 'smtp.example.com'; 
        // $mail->SMTPAuth   = true;
        // $mail->Username   = 'tu-email@example.com';
        // $mail->Password   = 'tu-contrasena';
        // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        // $mail->Port       = 587;
        
        // Para enviar a través de mail() nativo de PHP:
        // $mail->isMail();

        // Configuraciones del mensaje
        $mail->setFrom($email, $nombre);
        $mail->addAddress('marcelo12mm@gmail.com'); // Destinatario requerido

        // Contenido
        $mail->isHTML(true);
        $mail->Subject = 'Nueva consulta de ' . $nombre . ' desde Landing Web';
        
        $cuerpo = "<h3>Nueva consulta desde el sitio web</h3>";
        $cuerpo .= "<p><strong>Nombre:</strong> {$nombre}</p>";
        $cuerpo .= "<p><strong>Email:</strong> {$email}</p>";
        $cuerpo .= "<p><strong>Mensaje:</strong><br/>" . nl2br($mensaje) . "</p>";
        
        $mail->Body    = $cuerpo;
        $mail->AltBody = strip_tags(str_replace("<br/>", "\n", $cuerpo));

        $mail->send();
        
        // Redirigir al usuario con un mensaje de éxito
        header("Location: {$redirect_url}{$separator}status=success");
        exit;
    } catch (Exception $e) {
        // Redirigir al usuario con un mensaje de error
        header("Location: {$redirect_url}{$separator}status=error&message=" . urlencode("El mensaje no pudo ser enviado. Mailer Error: {$mail->ErrorInfo}"));
        exit;
    }
} else {
    // Si no es POST, redirigir al listado anterior
    $redirect_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '../index.php';
    header("Location: {$redirect_url}");
    exit;
}
?>
