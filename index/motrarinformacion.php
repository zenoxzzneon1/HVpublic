<!DOCTYPE html>
<html lang="es">
    <head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge" >
 <meta name="viewport" content="width=device-widthinitial-scale=1.0">
<link rel="stylesheet" href="../csss/super.css">
<link rel="stylesheet" href="../csss/centrar.css">
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
  </body>
</html>
<?php
// Verificar si los datos se han pasado correctamente
if (isset($_GET['nombre']) && isset($_GET['apellidos']) && isset($_GET['email']) && isset($_GET['titulacion']) && isset($_GET['descripcion'])) {
    $nombre = htmlspecialchars($_GET['nombre']);
    $apellidos = htmlspecialchars($_GET['apellidos']);
    $email = htmlspecialchars($_GET['email']);
    $titulacion = htmlspecialchars($_GET['titulacion']);
    $descripcion = htmlspecialchars($_GET['descripcion']);
    $ruta = isset($_GET['archivo']) ? urldecode($_GET['archivo']) : ''; // Archivo subido
} else {
    echo "No se han recibido los datos correctamente.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>informacion de hoja de vida</title>
</head>
<body>
    <?php if (!empty($ruta_destino)): ?>
        <h2></br></h2>
        <?php if (strpos($ruta_destino, '.mp4') !== false || strpos($ruta_destino, '.avi') !== false): ?>
            <video width="320" height="240" controls>
                <source src="<?php echo $ruta_destino; ?>" type="video/mp4">
                Tu navegador no soporta la reproducción de videos.
            </video>
        <?php else: ?>
            <img src="<?php echo $ruta_destino; ?>" alt="Archivo Subido" width="300">
        <?php endif; ?>
    <?php else: ?>
        <p>No se ha subido ningún archivo.</p>
    <?php endif; ?>

    <h1>informacion de hoja de vida</h1>
    <p aling="center"><strong>Nombre:</strong> <?php echo $nombre; ?></p>
    <p><strong>Apellidos:</strong> <?php echo $apellidos; ?></p>
    <p><strong>Email:</strong> <?php echo $email; ?></p>
    <p><strong>Titulación:</strong> <?php echo $titulacion; ?></p>
    <p><strong>Descripción:</strong> <?php echo $descripcion; ?></p>
   
</body>
</html>
    
