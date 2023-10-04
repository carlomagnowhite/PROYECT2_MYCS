<?php
include("../php/scripts.php");

$nombre = limpiar_cadena($_POST["nombre"]);
$correo = limpiar_cadena($_POST["correo"]);
$telefono = limpiar_cadena($_POST["telefono"]);
$mensaje = limpiar_cadena($_POST["mensaje"]);
$asunto = "Contacto Talleres Tecnológicos CTT-FISEI";

if(empty($nombre) || empty($correo) || empty($telefono) || empty($mensaje)){
    http_response_code(500);
    echo '
    <div class="respuesta error-message">
        <h5>ERROR</h5><br>
        <p>Todos los campos del formulario son obligatorios.</p>
    </div>
    ';
    exit();

}else{
    $destino = "mateo19dg@gmail.com";
    $remitente = "Nuevo mensaje de: $nombre";

    $body = "Recibiste un nuevo mensaje del formulario de contacto.\n\n"."Aquí están los detalles:\n\nNombre: $nombre\n\nCorreo electrónico: $correo\n\nTeléfono: $telefono\n\nMensaje: \n$mensaje";
    //para setear el formato al correo (HTML)

    $header = "From: $correo";
    $header .= "Reply-To: $correo";

    if (!mail($destino, $remitente, $body, $header)) {
        echo '
        <div class="respuesta error-message">
            <h5>ERROR</h5><br>
            <p>No se puedo enviar el correo. Recarga la página e intenta de nuevo.</p>
        </div>
        ';
        http_response_code(500);
    } else {
        echo '
        <div class="respuesta">
            <h5>Correo enviado con éxito! </h5>
            <p>Pronto nos pondremos en contacto contigo.</p>
        </div>
        ';
    }
}



/*
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF8\r\n";

    //direccion del remitente
    $headers .= "FROM: $nombre <$correo>\r\n";

    //ruta desde origen hasta destino
    $headers .= "Return-path: $destino\r\n";

    $mail = mail($destino, $asunto, $cuerpo, $headers);

    if ($mail) {
        echo '
        <div class="respuesta">
            <h5>Correo enviado con éxito! </h5>
            <p>Pronto nos pondremos en contacto contigo.</p>
        </div>
        ';
    } else {
        echo '
        <div class="respuesta error-message">
            <h5>ERROR</h5><br>
            <p>No se puedo enviar el correo. Recarga la página e intenta de nuevo.</p>
        </div>
        ';
    }
    */
?>