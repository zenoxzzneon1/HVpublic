<?php 

include("../conexiones.php/conexion.php");
if (isset($_POST['registro'])) {
    if (strlen($_POST['nombre']) >= 1 &&  strlen($_POST['apellidos']) >= 1  &&  strlen($_POST['email']) >= 1 &&  strlen($_POST['titulacion']) >= 1 &&  strlen($_POST['descripcion']) >= 1   ) {
	    $nombre = trim($_POST['nombre']);
        $apellidos = trim($_POST['apellidos']);
	    $email = trim($_POST['email']);
        $titulacion= trim($_POST['titulacion']);
        $descripcion= trim($_POST['descripcion']);
        $fecharegis = date("d/m/y");
	    $consulta = "INSERT INTO perfiles (nombre, apellidos, email, titulacion, descripcion,fecharegis) VALUES ('$nombre', '$apellidos','$email', '$titulacion','$descripcion','$fecharegis')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has registrado correctamente!</h3>
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

?>