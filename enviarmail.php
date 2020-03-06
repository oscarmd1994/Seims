<?php  

// Llamando a los campos
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

// Datos para el correo
$destinatario = "seims.marketing@gmail.com";
$asunto = "Contacto desde nuestra web";
//$header = "Enviado desde SEIMS oficial";
$headers = 'From:'.$_POST['email']."\r\n".
'Reply-To:'.$_POST['email']."\r\n".
'X-Mailer: PHP/'.phpversion();

$completo = "De:" .$nombre ." " .$apellido. "\n";
$completo .= "Telefono / Celular:" .$telefono."\n";
$completo .= "Correo:" .$email. "\n";
$completo .= "Mensaje:" .$mensaje;

// Enviando Mensaje
mail($destinatario, $asunto, $completo, $headers);
echo "<script>alert('Mensaje enviado exitosamente')</script>";
echo "<script> setTimeout(\"location.href='index.php' \",1000)</script>";
?>