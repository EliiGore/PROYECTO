<?php
require_once 'entidad.php';
require_once 'model.php';

// Logica
$aport = new Conexion();
$model = new ConexionModel();

    if (isset($_POST["accionar"])) {
        $si="Este usuario no está registrado";
        $cedula = $_POST["cedula"];
        
        foreach ($model->Listar() as $k) {
            if ($k->__GET('Cedula')==$cedula) {
                $si="Espere porfavor";
                header('location: https://1drv.ms/f/s!AgL2V-DNwRO8hXAi_prYJY-Bg4Lp');
            }
        }
        echo '<script type="text/javascript">alert("  '.$cedula.'  '.$si.' ")</script>';

    }

?>

<!DOCTYPE html>
<html lang="es">
	<head>
        <title>Sportmancar Manta-Ecuador</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href='imagenes/sportmancar1.ico' rel='shortcut icon' type='image/png'>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" type="text/css" href="css/bd.css">
        <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
        <meta charset="utf-8">
	</head>
    <body>
     <header>
        <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-fm">
                        <span class="sr-only">Desplegar / Ocultar Menu</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="Inicio.blade.php" class="navbar-brand">Sportmancar</a>

                </div>
                <!-- Inicia Menu -->
                <div class="collapse navbar-collapse" id="navegacion-fm">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="Institucion.php">Institución</a></li>
                        <li class="dropdown">
                            <a href="licenciaB.php" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                Escuela <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="licenciaB.php">Vehículos</a></li>
                                <li class="divider"></li>
                                <li><a href="licenciaA.php">Motos</a></li>
                                <li><a href="conduccionsegura.php">Conducción Segura</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                        <a href="amecanica.php" class="dropdown-toggle" data-toggle="dropdown" role="button">Servicios <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                                <li><a href="amecanica.php">Asistente de Mecánica</a></li>
                                <li class="divider"></li>
                                <li><a href="choferb.php">Chofer en caso de Embriaguez</a></li>
                            </ul>
                        </li>

                         <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Material de Trabajo <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                                <li><a href="index.php">Material para Auto</a></li>
                                <li class="divider"></li>
                                <li><a href="index.php">Material para Motos</a></li>
                            </ul>
                        <li><a href="contactenos.php">Contáctenos</a></li>
                    </ul>

                </div>
            </div>
        </nav>
    </header>
<style>
    
    #adl{
          top: 300px;
  left: 350px;
  position: absolute;
    }
</style>

 <article class="post clearfix">
                    <a href="#" class="thumb pull-left">
                    </a>
                    <h2 class="post-title">
                        <h2>Material de Trabajo para el Curso</h2>
                    </h2>
                    <p class="post-contenido text-justify">
Queridos estudiantes de Sportmancar para poder descargar los libros para hacer el curso de conducción ya sea de Auto o Motocicleta deberá estar registrado, si de casualidad no esta registrado, usted no podra descargar los libros. 
Att Sportmancar
                    </p>
                                            <center>
                                            <img class="img-thumbnail" src="imagenes/login.jpg" alt="">
                                            </center>


                </article>
    <form id="adl" method="post">
        <input type="text" size="50" maxlength="10" placeholder="Ingrese su numero de cedula" name="cedula"  value="">

        <button name="accionar"  value="">Descargar Documentos</button>
    </form>

    </body>
</html>

