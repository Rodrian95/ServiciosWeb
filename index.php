<?php
    session_start();
    if(isset($_SESSION['user'])){
        header("location:vistas/inicio.php");
    }
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <?php include("controladores/controlador.index.php"); ?>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-offset-6 ">
                    <form action="" method="post">
                        <h1><p class="text-center">Inicia Sesion</p></h1>

                        <div class="form-group">
                            <label for="user"> Usuario </label>
                            <input type="text" id="user" class="form-control" onkeyup="verificaLogin()">
                        </div>

                        <div class="form-group">
                            <label for="pass"> Contraseña </label>
                            <input type="password" name="pass" id="pass" class="form-control" onkeyup="verificaLogin()">
                        </div>

                        <div class="form-group" id="inicio">
                            <input type="button" value="Iniciar Sesion" id="btinicio" onclick="login()" disabled >
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>