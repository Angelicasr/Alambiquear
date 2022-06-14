<?php

$destino = "mariaas15@hotmail.com";

$fullname = $_POST['nombre']; 
$email = $_POST['email'];
$phone = $_POST['telefono'];
$affair = $_POST['asunto'];
$message = $_POST['mensaje'];

$header = "Enviado desde formulario de contacto en localhost";
$mensajeCompleto = "\n Nombre: " . $fullname . "\n" . "Email: " . $email . "\n" . "Télefono :" . $phone . "\n". "Mensaje :" . $mensaje;
mail($destino, $asunto, $mensajeCompleto, $header);
header('Location: bar.html');