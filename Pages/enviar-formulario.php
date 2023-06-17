<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $description = $_POST["description"];

    // Configurar los detalles del correo electrónico
    $to = "maria.mvdesignstudio@gmail.com";
    $subject = "Nuevo mensaje de formulario";
    $message = "Nombre: " . $nombre . "\n";
    $message .= "Apellido: " . $apellido . "\n";
    $message .= "Email: " . $email . "\n";
    $message .= "Teléfono: " . $phone . "\n";
    $message .= "Descripción del proyecto: " . $description;

    // Enviar el correo electrónico
    if (mail($to, $subject, $message)) {
        header("Location: gracias.html");
        exit(); // Termina la ejecución del script después de la redirección
    } else {
        header("Location: error.html");
        exit(); // Termina la ejecución del script después de la redirección
    }
}
?>  
