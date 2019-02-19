<?php
error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

date_default_timezone_set('America/Mexico_City');
 
if(isset($_POST['txtNombre'])) {
 
// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "contacto@kamila.mx";
$email_subject = "Tienes un mensaje de la pagina de contacto";
 
// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['txtNombre']) ||
!isset($_POST['txtCorreo'])) {
 
echo "Problemas el enviar la info.";
die();
}
 
$email_message = "Informacion solicitada de www.kamila.mx:\n\n";
$email_message .= "Usuario: " . $_POST['txtNombre'] . "\n";
$email_message .= "Correo: " . $_POST['txtCorreo'] . "\n";
$email_message .= "Mensaje: " . $_POST['txtMensaje'] . "\n";
 
 
// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);
 
header('Location: https://www.kamila.mx/');
}
echo "<script> window.location='https://www.kamila.mx';</script>";
?>