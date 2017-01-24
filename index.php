<?php
    include_once("modulos/Enrutador.php");
    include_once("modulos/Controlador.php");
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Curso POO con PHP</title>
        <link rel="stylesheet" href="css/general.css"/>
    </head>
    <body>
        <header>
            CRUD ESTUDIANTES
        </header>

        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="?cargar=crear">Registrar</a></li>
            </ul>
        </nav>

        <section>
            <?php
                $enrutador = new Enrutador();
                if($enrutador->validarGET(isset($_GET['cargar']))){
                    $enrutador->cargarVista($_GET['cargar']);
                }
            ?>
        </section>

        <footer>
            Todos los derechos reservados &copy SuperCodigo
        </footer>
    </body>
</html>