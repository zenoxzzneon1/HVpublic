<?php 

include("../conexiones/conexion.php");
if (isset($_POST['registro'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellidos']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['titulacion']) >= 1 && strlen($_POST['descripcion']) >= 1) {
        $nombre = trim($_POST['nombre']);
        $apellidos = trim($_POST['apellidos']);
        $email = trim($_POST['email']);
        $titulacion = trim($_POST['titulacion']);
        $descripcion = trim($_POST['descripcion']);
        $fecharegis = date("d/m/y");

        // Guardar la información en la base de datos
        $consulta = "INSERT INTO perfiles (nombre, apellidos, email, titulacion, descripcion, fecharegis) VALUES ('$nombre', '$apellidos', '$email', '$titulacion', '$descripcion', '$fecharegis')";
        $resultado = mysqli_query($conex, $consulta);

        if ($resultado) {
            // Redirigir a la página de mostrar información
            $rutaArchivo = isset($_FILES['fileTest']) ? urlencode($carpeta_destino . '"/../proyecto/fotos""' . $_FILES["fileTest"]["name"]) : ''; // Ruta del archivo subida

            // Redirige con los datos al archivo de mostrar
            header("Location: motrarinformacion.php?archivo=$rutaArchivo&nombre=$nombre&apellidos=$apellidos&email=$email&titulacion=$titulacion&descripcion=$descripcion");
            exit(); // Detener la ejecución después de la redirección
        } else {
            echo '<h3 class="bad">¡Ups ha ocurrido un error!</h3>';
        }
    } else {
        echo '<h3 class="bad">¡Por favor complete los campos!</h3>';
    }
}
