<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <title>Sportmancar Manta - Ecuador</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="cambiar.css">
        <link href='imagenes/sportmancar1.ico' rel='shortcut icon' type='image/png'>


</head>
    <body  background = bgcolor="blue">
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
  <section class="jumbotron">
    <div class="container">
      <h1>SPORTMANCAR MANTA - ECUADOR</h1>
    </div>
  </section>

  <section class="main container">
    <div class="row">
      <section class="posts col-md-9">
        <div class="miga-de-pan">
          <ol class="breadcrumb">
            <li><a href="licenciaA.php">Licencia tipo A</a></li>
            <li><a href="licenciaB.php">Licenca tipo B</a></li>
          </ol>
        </div>

        <article class="post clearfix">
          <a href="#" class="thumb pull-left">
            <img class="img-thumbnail" src="imagenes/beber.jpeg" alt="">
          </a>
          <h2 class="post-title">
            <h2 align="center">Chofer en caso de embriaguez</h2>
          </h2>
          <p class="post-contenido text-justify">
En caso de imposibilidad de conducir... Tranquilo, Sportmancar le proporciona un conductor para trasladarlo en su propio vehículo desde cualquier punto de la ciudad hasta su domicilio, sin ningún tipo de costo y riesgo.</p> 
        </article>

        <article class="post clearfix">
          <a href="#" class="thumb pull-left">
          </a>
          <h2 class="post-title">
            <h2 href="#">Cobertura</h2>
          </h2>
          <p class="post-contenido text-justify">
<li>- Servicio dentro del perímetro urbano</li>
<li>- Servicio gratuito para nuestros socios de membresia.</li>
          </p>
        </article>


       
      </section>

      <aside class="col-md-3 hidden-xs hidden-sm">
        <h4>Categorias</h4>
                <div class="list-group">
                    <a href="#" class="list-group-item active">Conducción Segura</a>
                    <a href="leydetransito.php" class="list-group-item">Ley de Transito</a>
                    <a href="licenciaB.php" class="list-group-item">Cursos</a>
                    <a href="consejos.php" class="list-group-item">Consejos</a>

                </div>


        <h4>Articulos Recientes</h4>
        <a href="leydetransito.php" class="list-group-item">
          <h4 class="list-group-item-heading">Leyes de Transito</h4>
          <p class="list-group-item-text">Aprende las leyes de Transito para así no pasar problemas con nadie. solo en Sportmancar</p>
        </a>

        <a href="#" class="list-group-item">
          <h4 class="list-group-item-heading">Sportmancar Seguridad tras el volante</h4>
          <p class="list-group-item-text">Tu seguridad lo es todo dentro Sportmancar compuestos con varios profesionales en el aréa.</p>
        </a>

        <a href="#" class="list-group-item">
          <h4 class="list-group-item-heading">Consejos dentro de Sportmancar</h4>
          <p class="list-group-item-text">Recuerda, todo lo aprendido es por tí, no por nosotros.</p>
        </a>
      </aside>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-xs-6">
          <p>Sportmancar Manta - Ecuador</p>
        </div>
        <div class="col-xs-6">
          <ul class="list-inline text-right">
            
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>