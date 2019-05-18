<?php
 
$nombre = $ _POST['name'];
$email = $ _POST['email'];
$mensaje = $ _POST['message'];
$para = 'yurley.solimer@gmail.com';
$titulo = 'Solimer Contact';
 
$msjCorreo = "Nombre: $name\n E-Mail: $email\n Mensaje:\n $message";
 
if ($ _POST['submit']) {
if (mail ($para, $titulo, $msjCorreo)) {
    echo 'El mensaje se ha enviado';
} else {
    echo 'Falló el envio';
    }
}
 
?>