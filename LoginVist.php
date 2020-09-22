<?php
include_once 'Php/Conexion.inc.php';
include_once 'Php/RepositorioUsuario.inc.php';

Conexion :: AbrirConexion();
$TotalUsuariosArray = RepositorioUsuario :: ObtNumUsuarios(Conexion::ObtConexion());
Conexion :: CerrarConexion();
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Login</title>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
        <link rel="stylesheet" href="Css/bootstrap.css">
        <link rel="stylesheet" href="Css/EstLogin.css">
        <link rel="stylesheet" href="Css/Style.css">
    </head>
    <body>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Este Boton Despliega La Barra De Navegacion</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">iWatchSolution</a>
                </div>
                <div id="navbar"class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="#">DisplayCell</a></li>
                        <li><a href="SistemaVist.php">Notas</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#"><i class="fas fa-user iconuser"></i>
                                <?php
                                echo $TotalUsuariosArray;
                                ?>
                            </a>
                        </li>
                        <li><a href="LoginVist.php"><i class="fas fa-sign-in-alt iconlog"></i> Iniciar Sesion</a></li>
                        <li><a href="RegisterVist.php"><i class="fas fa-user-plus iconreg"></i> Registrar</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <form class="formulario">
            <h1>Login</h1>
            <br>
            <div class="contenedor">
                <div class="input-contenedor">
                    <i class="fas fa-user icon"></i>
                    <input type="text" placeholder="Usuario">
                </div>

                <div class="input-contenedor">
                    <i class="fas fa-key icon"></i>
                    <input type="password" placeholder="Contraseña">
                </div>

                <div>
                    <a href="SistemaVist.php"><button type="button" class="button">Iniciar Sesion</button></a>
                </div>
                <br>
                <p>¿No Tienes Una Cuenta? <a class="link" href="RegVista.php">Registrate</a></p>

            </div>
        </form>


        <script src="Js/jquery.min.js"></script>
        <script src="Js/bootstrap.min.js"></script>
    </body>
</html>