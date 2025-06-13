<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST["nombre"]);
    $apellido = htmlspecialchars($_POST["apellido"]);
    $celular = htmlspecialchars($_POST["celular"]);

    $destinatario = "lalibertadavanzabragado@gmail.com"; // Tu correo oculto
    $asunto = "Nueva afiliación recibida";
    $mensaje = "Nombre: $nombre\nApellido: $apellido\nCelular: $celular";

    $headers = "From: afiliaciones@tuweb.com\r\n"; // Puedes cambiar esto si tienes un dominio propio
    $headers .= "Reply-To: $destinatario\r\n";

    if (mail($destinatario, $asunto, $mensaje, $headers)) {
        echo "<script>alert('Afiliación enviada con éxito.'); window.location.href='afiliacion.html';</script>";
    } else {
        echo "<script>alert('Error al enviar la afiliación.'); window.location.href='afiliacion.html';</script>";
    }
}
?>

