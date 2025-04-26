<!DOCTYPE html>
<html lang="es">
    <head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge" >
 <meta name="viewport" content="width=device-widthinitial-scale=1.0">
<link rel="stylesheet" href="../csss/super.css">
<link rel="stylesheet" href="../csss/registro1.css">
 <title>Encabezado Responsive</title>
 
</head>
  <body>
    
    <header>
        <div href="#" class="logo">
         <img src="../imagenes/logos.png" 
         alt="logo de la empresa">
         <h2 class="nombre-empresa"></h2>
        </div>
         <nav>
            <a href="inicio.php" class="nav-link">Inicio </a>
            <a href="iniciar_sesion.php" class="nav-link">iniciar sesion </a>
            <a href="registros.php" class="nav-link">Registro </a>
            <a href="contacta.php" class="nav-link">contactanos</a>
         </nav>
</header>  
  <form method="post">
    	<h1>REGISTRO</h1>
    	<input type="text" name="nombres" placeholder="Nombres">
      <input type="text" name="usuario" placeholder="usuario">
    	<input type="email" name="email" placeholder="Email">
      <input type="password" name="contraseña" placeholder="contraseña">
    	<input type="submit" name="registrar">
    </form>
    <?php 
        include("../conexiones/registro.php");
        ?>
  </body>
</html>