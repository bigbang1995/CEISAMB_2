<?php
// Inicializar una variable para almacenar el mensaje
$message = "";

// Verificar si el método de solicitud es POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario
    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];
    $celular = $_POST["celular"];
    $pais = $_POST["pais"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $profesion = $_POST["profesion"];
    $universidad = $_POST["universidad"];
    $edad = $_POST["edad"];

    // Formar el cuerpo del correo electrónico
    $message = "Nombres: $nombres\n";
    $message .= "Apellidos: $apellidos\n";
    $message .= "Celular: $celular\n";
    $message .= "País: $pais\n";
    $message .= "Correo electrónico: $email\n";
    $message .= "Profesión: $profesion\n";
    $message .= "Universidad: $universidad\n";
    $message .= "Edad: $edad\n";

    // Correo electrónico de destino
    $to = "serviciosceisamb@gmail.com"; // Reemplaza con tu dirección de correo electrónico

    // Asunto del correo electrónico
    $subject = "Nuevo registro de usuario";

    // Encabezados adicionales
    $headers = "From: $email" . "\r\n";

    // Enviar el correo electrónico
    if (mail($to, $subject, $message, $headers)) {
        $message = "¡Gracias por registrarte! Se ha enviado un correo electrónico de confirmación a tu dirección.";
    } else {
        $message = "Hubo un error al procesar tu solicitud. Por favor, inténtalo de nuevo más tarde.";
    }
}
?>
