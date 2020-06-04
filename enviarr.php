<?php

$destino= "darkarfz2.0@gmail.com";
$nombre = $_POST["nombre"];
$mail = $_POST["correo"];
$tel = $_POST["telefono"];
$mensaje = $_POST["mensaje"];

$contenido = "Nombre: " . $nombre. "\nCorreo: " . $mail . "\nTelefono: " . $tel . "\nMensaje: " . $mensaje;

mail($destino, "Contacto", $contenido);
header("Location:index.html")

?>