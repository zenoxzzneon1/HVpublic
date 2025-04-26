<?php
include("../conexiones/conexion.php");

if (isset($_POST['contacta'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['mensaje']) >= 1) {
        $nombre = trim($_POST['nombre']);
        $correo = trim($_POST['correo']);
        $mensaje = trim($_POST['mensaje']);
        $consulta = "INSERT INTO contacto (nombre, correo, mensaje)   VALUES ('$nombre','$correo', '$mensaje')";
        $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Hemos recivido tu mensaje correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}
