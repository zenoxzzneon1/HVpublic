<?php
include("../conexiones/conexion.php"); // Asegúrate de que la ruta es correcta

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre_archivo = $_FILES["fileTest"]["name"]; // Nombre del archivo
    $validador = 1; // Variable de validación
    $tipo_archivo = strtolower(pathinfo($nombre_archivo, PATHINFO_EXTENSION)); // Tipo de archivo
    $ruta_temporal = $_FILES["fileTest"]["tmp_name"]; // Ruta temporal
    $tamaño_archivo = $_FILES["fileTest"]["size"]; // Tamaño del archivo

    // Definir la carpeta de destino
    $carpeta_destino = dirname(__FILE__) . "/../proyecto/fotos"; // Asegúrate que la ruta sea correcta
    $ruta_destino = str_replace('\\', '/', $carpeta_destino) . '/' . $nombre_archivo;

    // Si la carpeta no existe, la creamos
    if (!file_exists($carpeta_destino)) {
        mkdir($carpeta_destino, 0777, true);
    }

    // Validación del tamaño del archivo
    if ($tamaño_archivo > 1000000) {
        echo "El archivo es muy pesado";
        $validador = 0;
    }

    // Validación del tipo de archivo
    if ($tipo_archivo != "jpg" && $tipo_archivo != "jpeg" && $tipo_archivo != "png" && $tipo_archivo != "gif" && $tipo_archivo != "mp4" && $tipo_archivo != "avi") {
        echo "Solo se permiten imágenes tipo JPG, JPEG, PNG, GIF o videos MP4, AVI.";
        $validador = 0;
    }

    // Mover el archivo de la carpeta temporal a la carpeta objetivo
    if ($validador == 1) {
        if (move_uploaded_file($ruta_temporal, $ruta_destino)) {
            echo "El archivo " . htmlspecialchars(basename($nombre_archivo)) . " ha sido cargado con éxito.";

            // Insertar la información del archivo en la base de datos
            $sql = "INSERT INTO archivos (nombre_archivo, ruta_archivo, tipo_archivo, tamano_archivo)
                    VALUES ('$nombre_archivo', '$ruta_destino', '$tipo_archivo', '$tamaño_archivo')";

            if ($conex->query($sql) === TRUE) {
                echo "El archivo ha sido registrado en la base de datos.";
            } else {
                echo "Error al registrar el archivo: " . $conex->error;
            }
        } else {
            echo "Ha habido un error al cargar tu archivo.";
        }
    } else {
        echo "Error: el archivo no se ha cargado";
    }
}
?>
