<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtener los datos del formulario
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Validar los datos del formulario (opcional)

  // Configurar el correo electrónico
  $to = "museosantaana1@gmail.com";
  $subject = "Mensaje del formulario de contacto";
  $headers = "From: $email" . "\r\n" .
             "Reply-To: $email" . "\r\n" .
             "X-Mailer: PHP/" . phpversion();

  // Construir el cuerpo del correo
  $body = "Nombre: $name\n";
  $body .= "Correo: $email\n";
  $body .= "Mensaje:\n$message";

  // Enviar el correo electrónico
  if (mail($to, $subject, $body, $headers)) {
    // El correo se envió exitosamente
    echo "¡Gracias por contactarnos! Tu mensaje ha sido enviado.";
  } else {
    // Hubo un error al enviar el correo
    echo "Hubo un error al enviar el mensaje. Por favor, intenta nuevamente.";
  }
}
?>
