<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" >
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../csss/super.css">
        <link rel="stylesheet" href="../csss/registro.css">
        <title>Encabezado Responsive</title>
    </head>
    <body>
        <header>
            <div class="logo">
                <img src="../imagenes/logos.png" alt="logo de la empresa">
                <h2 class="nombre-empresa"></h2>
            </div>
            <nav>
                <a href="inicio.php" class="nav-link">Inicio</a>
                <a href="iniciar_sesion.php" class="nav-link">Iniciar Sesión</a>
                <a href="registros.php" class="nav-link">Registro</a>
                <a href="contacta.php" class="nav-link">Contáctanos</a>
            </nav>
        </header>  

        <form method="post" action="iniciar_sesion.php">
            <h1>Inicio de Sesión</h1>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="contraseña" placeholder="Contraseña" required>
            <input type="submit" name="iniciar_sesion" value="Iniciar Sesión">
        </form>

        <?php 
            include("../conexiones/perfiles.php");
        ?>
    </body>
</html>
