<?php
require_once("clases/consola.php");
require_once("clases/auto.php");
require_once("clases/ford.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@500&family=Staatliches&display=swap" rel="stylesheet">
    <title>OOP PHP | Gerardo Ceseñas</title>
</head>

<body>

    <nav>
        <div class="nav-wrapper">
            <a href="#" class="brand-logo center"><img src="img/phplogo.png" alt="" class="imgnav">PHP ORIENTADO A OBJETOS</a>
        </div>
    </nav>

    <div class="contenedor">
        <div class="imgizq">
            <img src="img/aside.jpg" alt="" class="imgside">
        </div>

        <div class="contenido">
            <div class="title">
                Clase consola
                <div class="line"></div>
            </div>


            <div class="contenido2">
                <p class="txt">Objeto (Nombre): <?php echo $playstation->get_nombre(); ?> </p>
                <p class="txt">Objeto (Capacidad): <?php echo $playstation->get_capacidad(); ?> </p>
                <p class="txt">Objeto (Nombre): <?php echo $xbox->get_nombre(); ?> </p>
                <p class="txt">Objeto (Capacidad): <?php echo $xbox->get_capacidad(); ?> </p>
            </div>

            <div class="title">
                Autos (Usando Herencia)
                <div class="line"></div>
            </div>

            <div class="contenido">
                <p class="txt"><?php echo $ford->intro(); ?> </p>
                <p class="txt"><?php echo $ford->mensaje2(); ?> </p>
            </div>
        </div>
    </div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>