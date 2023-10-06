<?php
if(empty($_POST['nombre']) || empty($_POST['telefono']) || empty($_POST['mensaje']) || !filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL)) {
  http_response_code(500);
  exit();
}

$nombre = strip_tags(htmlspecialchars($_POST['nombre']));
$correo = strip_tags(htmlspecialchars($_POST['correo']));
$telefono = strip_tags(htmlspecialchars($_POST['telefono']));
$mensaje = strip_tags(htmlspecialchars($_POST['mensaje']));

$to = "mateo19dg@gmail.com"; // Change this email to your //
$subject = "Nuevo mensaje de:  $nombre";
$body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $nombre\n\n\nEmail: $correo\n\nTelefono: $telefono\n\nMessage: $mensaje";
$header = "From: $correo";
$header .= "Reply-To: $correo";	

if(!mail($to, $subject, $body, $header)){
  http_response_code(500);
  echo "error";
}else{
  echo "correcto";
}
?>
