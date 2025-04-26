<?php 

include("../conexiones/conexion.php");

if (isset($_POST['registrar'])) {
    if (strlen($_POST['nombres']) >= 1 &&  strlen($_POST['usuario']) >= 1  &&  strlen($_POST['email']) >= 1 &&  strlen($_POST['contraseña']) >= 1  ) {
	    $nombres = trim($_POST['nombres']);
        $usuario = trim($_POST['usuario']);
	    $email = trim($_POST['email']);
	    $fechareg = date("d/m/y");
        $contraseña= trim($_POST['contraseña']);
	    $consulta = "INSERT INTO datos (nombres, usuario, email, fecha_reg, contraseña) VALUES ('$nombres', '$usuario','$email', '$fechareg','$contraseña')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
			header("Location: ../index/iniciar_Sesion.php");
			exit();
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