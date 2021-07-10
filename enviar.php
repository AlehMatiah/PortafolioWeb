<?php
    $destino = "alexperezips@gmail.com";
    $nombre = $_POST["name"];
    $email = $_POST["email"];
    $mensaje = $_POST["message"];
    $contenido = "Nombre: " . $nombre . "\nCorreo: " . $email . "\Mensaje: " . $mensaje;
    mail($destino,"Contacto", $contenido);
    header("Location:gracias.html")
?>