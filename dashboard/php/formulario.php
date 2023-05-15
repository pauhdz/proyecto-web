<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recibe los datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['apellido'];
    $correo= $_POST['correo'];
    $comentario = $_POST['comentario'];

    // Valida los datos recibidos
    if(!empty($nombre) && !empty($apellido) && !empty($correo) && !empty($comentario)) {
        // Configura los datos del correo electrónico
        $titulo = 'Correo enviado desde formulario de contacto';
        $mensaje_correo = "Nombre: $nombre\nApellido $apellido\nCorreo: $correo\nComentario:\n$comentario";

        // Envía el correo electrónico
        if(mail('pogohotelcontacto@gmail.com', $titulo, $mensaje_correo)) {
            echo 'Correo enviado correctamente.';
        } else {
            echo 'Error al enviar el correo electrónico.';
        }
    } else {
        echo 'Por favor, rellena todos los campos.';
    }
}
?>