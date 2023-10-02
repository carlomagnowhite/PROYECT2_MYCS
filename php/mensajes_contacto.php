<?php
    include("scripts.php");

    $nombre = limpiar_cadena($_POST["nombre"]);
    $correo = limpiar_cadena($_POST["correo"]);
    $telefono = limpiar_cadena($_POST["telefono"]);
    $mensaje = limpiar_cadena($_POST["mensaje"]);
    $asunto = "Requiero más información sobre los Talleres Tecnológicos.";

    if($nombre != "" && $correo != "" && $telefono != "" && $mensaje != ""){
        $destino = "mateo19dg@gmail.com";
        $cuerpo = 
        '<html>
            <head>
                <title>Se requiere administrar información sobre los talleres tecnológicos</title>
            </head>
            <body>
                <h1>Correo enviado por: '.$nombre.' </h1>
                <p>'.$mensaje.'</p><br>
                Mi número de teléfono es: <strong>'.$telefono.'</strong><br><br>
                Este correo es enviado de forma automática. <strong> NO RESPONDA AL CORREO</strong>
            </body>
        </html>';

        //para setear el formato al correo (HTML)
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=UTF8\r\n";

        //direccion del remitente
        $headers .= "FROM: $nombre <$correo>\r\n" ;

        //ruta desde origen hasta destino
        $headers .= "Return-path: $destino\r\n";

        $mail = mail($destino,$asunto, $cuerpo, $headers);

        if($mail){
            echo "<h5>Correo enviado con éxito! Pronto nos pondremos en contacto contigo</h5>";

        }else{
            echo "<h5>Correo NO enviado</h5>";
        }

    }else{
        echo '
            Todos los campos son obligatorios
        ';
    }
?>