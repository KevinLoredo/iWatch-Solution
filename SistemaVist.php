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
        <title>Sistema iWatchSolution</title>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
        <link rel="stylesheet" href="Css/bootstrap.css">
        <link rel="stylesheet" href="Css/EstSistema.css">
        <link rel="stylesheet" href="Css/Style.css">
    </head>

<body class="bodyy">
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
                    <a class="navbar-brand" href="index.php">Sistema Notas</a>
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
        <h1>
            Sistema Notas
        </h1>
        <br>
        <div class="contenedor">
            <div class="input-contenedor">
                <i class="fas fa-receipt iconFolio"></i>
                <input type="text" placeholder="Folio">
            </div>

            <div class="input-contenedor">
                <i class="fas fa-user iconNomb"></i>
                <input type="text" placeholder="Nombre">
            </div>

            <div class="input-contenedor">
                <i class="fas fa-directions iconDirec"></i>
                <input type="text" placeholder="Dirección">
            </div>

            <div class="input-contenedor">
                <i class="fas fa-city iconCiud"></i>
                <input type="text" placeholder="Ciudad">
            </div>

            <div class="input-contenedor">
                <i class="fas fa-mobile-alt iconTel"></i>
                <input type="text" placeholder="Telefono">
            </div>

            <div class="input-contenedor">
                <i class="fab fa-apple iconApple"></i>
                <input type="text" placeholder="Modelo">
            </div>

            <div class="input-contenedor">
                <i class="fas fa-barcode iconImei"></i>
                <input type="text" placeholder="IMEI">
            </div>

            <div class="input-contenedor">
                <i class="fas fa-key iconPass"></i>
                <input type="text" placeholder="Password Del Reloj">
            </div>
            
            <div class="input-contenedor">
                <i class="fas fa-barcode iconImei"></i>
                <input type="text" placeholder="GUIA DE VIAJE">
            </div>

            <div>
                <textarea name="mensaje" placeholder="Observaciones" required></textarea>
            </div>
            <br>
            <br>
            <div>
                <input type="submit" value="Enviar" class="button" href="SistemaVist.html">
            </div>

        </div>

    </form>


        <script src="Js/jquery.min.js"></script>
        <script src="Js/bootstrap.min.js"></script>
    </body>
</html>