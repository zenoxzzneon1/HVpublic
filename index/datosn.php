<!DOCTYPE html>
<html lang="es">
    <head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge" >
 <meta name="viewport" content="width=device-widthinitial-scale=1.0">
<link rel="stylesheet" href="../csss/super.css">
<link rel="stylesheet" href="../csss/registro1.css">
<link rel="stylesheet" href="../csss/texto.css">
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
            <a href="inico.php" class="nav-link">Inicio </a>
            <a href="iniciar_sesion.php" class="nav-link">iniciar sesion </a>
            <a href="registros.php" class="nav-link">Registro </a>
            <a href="contacta.php" class="nav-link">contactanos</a>
         </nav>
</header>  
<form  method="post" enctype="multipart/form-data">
<h1>REGISTRO</h1>
    <label for="fileTest"><h2>Selecciona una imagen o video:</h2></label>
    <input id="fileTest" name="fileTest" type="file">
  	<input type="text" name="nombre" placeholder="Nombres">
    <input type="text" name="apellidos" placeholder="Apellidos">
  	<input type="email" name="email" placeholder="Email">
     <input type="text" name="titulacion" placeholder="titulos">
    <input type="text" name="descripcion" placeholder="descripcion">
    <input type="submit" name="registro">
    </form>
    <?php 
        include("../conexiones/perfil.php");
        include("../conexiones/fotos.php");
        ?>
  </body>
</html>