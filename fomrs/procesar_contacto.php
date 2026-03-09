<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../phpmailer/src/Exception.php';
require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitizar y recoger los datos del formulario
    $nombre = htmlspecialchars(strip_tags($_POST['nombre'] ?? ''));
    $email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
    $mensaje = htmlspecialchars(strip_tags($_POST['mensaje'] ?? ''));

    if (empty($nombre) || empty($email) || empty($mensaje) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $query = http_build_query(['nombre' => $nombre, 'email' => $email, 'mensaje' => $mensaje]);
        header("Location: ../error.php?" . $query);
        exit;
    }

    $mail = new PHPMailer(true);

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
        header("Location: ../gracias.php");
        exit;
    } catch (Exception $e) {
        // Redirigir al usuario con un mensaje de error
        $query = http_build_query(['nombre' => $nombre, 'email' => $email, 'mensaje' => $mensaje]);
        header("Location: ../error.php?" . $query);
        exit;
    }
} else {
    // Si no es POST, redirigir al listado anterior
    header("Location: ../index.php");
    exit;
}
?>
