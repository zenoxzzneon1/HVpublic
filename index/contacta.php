<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../csss/contactanos.css">
    <title>HVpublic - Transformando la Búsqueda de Empleo</title>
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
       <p></br></p>
    <main>
        <section>
            <h2>Transformando la Búsqueda de Empleo</h2>
            <p>
                HVpublic está revolucionando la manera en que las personas buscan empleo y las empresas encuentran talento. 
                A diferencia de los modelos tradicionales de búsqueda de empleo, donde son los candidatos quienes deben postularse a ofertas laborales, 
                HVpublic ofrece un enfoque innovador que permite a las empresas interesarse activamente en los perfiles de los postulantes. 
                Esta plataforma se propone crear un ecosistema laboral más eficiente, justo y orientado a resultados.
            </p>
        </section>

        <section>
            <h2>Un Nuevo Paradigma en la Búsqueda de Empleo</h2>
            <p>
                En el actual mercado laboral, donde la competencia es feroz y las oportunidades pueden ser escasas, 
                los candidatos a menudo se enfrentan a la ardua tarea de destacar entre un gran número de solicitantes. 
                HVpublic aborda este desafío permitiendo que los profesionales creen perfiles detallados que reflejan no solo su experiencia laboral, 
                sino también sus conocimientos, habilidades y certificaciones. Esta visión integral permite a las empresas realizar una evaluación más completa de los candidatos.
            </p>
        </section>

        <section>
            <h2>Certificaciones y Formación Continua</h2>
            <p>
                Uno de los aspectos clave que HVpublic incorpora es la importancia de las certificaciones y la formación continua. 
                Los usuarios pueden resaltar sus certificaciones profesionales, cursos completados y cualquier formación adicional que haya contribuido a su desarrollo profesional. 
                Esto no solo aumenta la visibilidad del candidato, sino que también permite a las empresas identificar rápidamente a aquellos postulantes que han invertido en su desarrollo y que poseen las credenciales necesarias para desempeñar roles específicos.
            </p>
        </section>

        <section>
            <h2>Transparencia y Conexiones Directas</h2>
            <p>
                La plataforma también promueve la transparencia en el proceso de selección. 
                Al permitir que los candidatos muestren sus logros y habilidades de manera detallada, se facilita que las empresas tomen decisiones informadas sobre quiénes pueden ocupar sus vacantes. 
                Esto no solo optimiza el proceso de selección, sino que también reduce el tiempo y esfuerzo invertido en la búsqueda de talento adecuado. 
                Las empresas pueden buscar perfiles que se alineen con sus necesidades específicas, creando conexiones directas con candidatos que realmente encajan con su cultura y objetivos.
            </p>
        </section>

        <section>
            <h2>Análisis de Datos y Toma de Decisiones Informadas</h2>
            <p>
                Además, HVpublic utiliza herramientas avanzadas de análisis de datos que permiten a las empresas comprender mejor el talento disponible en el mercado. 
                Las métricas sobre habilidades, certificaciones y tendencias laborales ayudan a los reclutadores a tomar decisiones informadas y estratégicas, mejorando así la calidad de las contrataciones.
            </p>
        </section>

        <section>
            <h2>En Resumen</h2>
            <p>
                HVpublic es más que una plataforma de empleo; es un cambio de paradigma en la forma en que se conectan los talentos con las oportunidades. 
                Al facilitar un espacio donde las habilidades, certificaciones y experiencia se destacan, se permite a los candidatos no solo buscar empleo, sino ser proactivos en su búsqueda de oportunidades. 
                Las empresas, por su parte, tienen acceso a una base de datos rica y dinámica de talentos, lo que les permite construir equipos más fuertes y alineados con sus objetivos.
            </p>
            <p>
                Con HVpublic, el futuro de la búsqueda de empleo está aquí, donde las conexiones significativas y las oportunidades laborales se encuentran a un clic de distancia.
            </p>
        </section>

        <section>
            <h2>Formulario de Contacto</h2>
            <form  method="POST">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>

                <label for="email">Correo Electrónico:</label>
                <input type="email" id="correo" name="correo" placeholder="correo" required>

                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje" name="mensaje" rows="4" placeholder="mensaje" required></textarea>

                <button type="submit" name="contacta">Enviar</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> HVpublic. Todos los derechos reservados.</p>
    </footer>
</body>
<?php 
            include("../conexiones/contacto.php");
        ?>
</html>
