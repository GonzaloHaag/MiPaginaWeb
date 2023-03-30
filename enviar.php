<?php

$destino = "gonzalohaag13@gmail.com";
$nombre = $_POST["Nombre"]; /*El name que tiene el input de nombre */ 
$correo = $_POST["Email"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];
$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTelefono: " . $telefono . "\nMensaje: " . $mensaje;

mail($destino,"Contacto",$contenido); //Los parametros que resibe mail es destino,asunto del mensaje, y el contenido

header("Location: gracias.html"); //Pagina que redirecciona al usuario luego de enviar form



?>