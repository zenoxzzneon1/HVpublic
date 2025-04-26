<?php
session_start(); // Iniciar sesión

include("../conexiones/conexion.php"); // Conectar a la base de datos

// Verificar si el formulario de inicio de sesión fue enviado
if (isset($_POST['iniciar_sesion'])) {
    $email = trim($_POST['email']);
    $contraseña = trim($_POST['contraseña']);
    
    // Consulta SQL preparada para evitar inyección SQL
    $consulta = $conex->prepare("SELECT * FROM datos WHERE email = ?");
    $consulta->bind_param("s", $email);
    $consulta->execute();
    $resultado = $consulta->get_result();

    if ($resultado->num_rows == 1) {
        $usuario = $resultado->fetch_assoc();

        // Verificar la contraseña (debería estar encriptada)
        if ($contraseña === $usuario['contraseña']) { // Comparación directa por ahora
            // Guardar el ID o email del usuario en sesión
            $_SESSION['usuario'] = $usuario['usuario'];
            $_SESSION['email'] = $usuario['email'];

            // Verificar si el usuario ya tiene datos en la tabla "datos"
            $perfilConsulta = $conex->prepare("SELECT * FROM datos WHERE email = ?");
            $perfilConsulta->bind_param("s", $email);
            $perfilConsulta->execute();
            $perfilResultado = $perfilConsulta->get_result();

            if ($perfilResultado->num_rows == 1) {
                // Si ya tiene datos de la hoja de vida, redirigir a la página de visualización
                header("Location: ../index/datosn.php");
                exit();
            } else {
         
            }
        } else {
            echo "<h3 class='bad'>¡Contraseña incorrecta!</h3>";
        }
    } else {
               // Si no tiene datos, redirigir a la página para recolectar la información 
        echo "<h3 class='bad'>¡Correo no registrado!</h3>";
        header("Location: ../index/registros.php");
        exit();
    }
}
?>