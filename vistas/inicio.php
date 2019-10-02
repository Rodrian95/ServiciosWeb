<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <?php include("../controladores/controlador.inicio.php"); ?>
    <title>Practica</title>
</head>
<body>
    <header>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="#">Busqueda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Agregar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Eliminar</a>
            </li>
            <button class="btn-primary" onclick="cerrarSesion()">Cerrar Sesion
        </ul>
    </header>

    <div class="container">
        <div class="col-md-12-offset">
            <center>
            BIENVENIDO USUARIO : <?php echo $_SESSION["usuario"]; ?> <br>
            Tu llave es: <?php echo $_SESSION["llave"]; ?>
            </center>
        </div>
    </div>
</body>
</html>