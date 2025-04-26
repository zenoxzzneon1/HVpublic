<?php
include("../conexiones/conexion.php");

if (isset($_POST['iniciar_sesion'])) {
    if (strlen($_POST['email']) >= 1 && strlen($_POST['contraseña']) >= 1) {
        $email = trim($_POST['email']);
        $contraseña = trim($_POST['contraseña']);
        $consulta = "SELECT * FROM datos WHERE email = '$email' AND contraseña = '$contraseña'";
        $resultado = mysqli_query($conex, $consulta);
        
        if (mysqli_num_rows($resultado) > 0) {
            session_start();
            $_SESSION['email'] = $email;
            echo '<h3 class="ok">Inicio de sesión exitoso</h3>';

            header("../index/datosn.php"); 
            exit();
        } else {
            echo '<h3 class="bad">¡Correo o contraseña incorrectos!</h3>';
        }
    } else {
        echo '<h3 class="bad">¡Por favor complete los campos!</h3>';
    }
}
?>