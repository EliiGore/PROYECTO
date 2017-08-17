<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilo.css">

<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
    <link href='imagenes/sportmancar1.ico' rel='shortcut icon' type='image/png'>
    <title>Facultades Marker</title>
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
      html, body {



        height: 100%;
        margin: 0px;
        padding: 0;
      }


      #map {
        height: 90%;
      }
    </style>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAogHyqp1715OORuRvRKM0-8OYfzEYmDo"></script>
    <script>
  
     var locaciones = [
      //["nombre",latitud,longitud]
      ["Sportmancar",  -0.944876, -80.732214]
    ]
// In the following example, 

    
function initialize() {
  var Uleam = {lat: -0.944876, lng: -80.732214};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 16,
    center: Uleam
  });

     navigator.geolocation.getCurrentPosition(function(position) {
            var geolocate = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
            var info = new google.maps.InfoWindow({
              map:map,
              position: geolocate,
              content:'Esta es tu posición'
            });  
        });

  for (var i = locaciones.length - 1; i >= 0; i--) {
    addMarker(locaciones[i], map);
  }


  var line = new google.maps.Polyline({
    path : [

    ],
    strokeColor: "blue",
    strokeWeight:10,
    geodesic: true,
    strokeOpacity:1.0
  });

  line.setMap(map);
}

// Adds a marker to the map.
function addMarker(location, map) {
  // Add the marker at the clicked location, and add the next-available label
  // from the array of alphabetical characters.
  var marker = new google.maps.Marker({
    position: {lat: location[1], lng: location[2]},
    label: location[0],
    map: map
    //icon: "img/notifi.png"
  });
}

google.maps.event.addDomListener(window, 'load', initialize);


    </script>
    <style>
    	#cambiame{
    		color: black;
    	}
    	body{
    		background-color: beige;
    	}

    </style>
  </head>
  <body>
  <header id="cambiame">
   <center><h2>Contáctenos</h2></center>
    <p>Nos esforzamos día a día por ser reconocidos como la mejor escuela de capacitación para conductores no profesionales de Manabí</p>
    <p>Líderes en formación de conductores a nivel nacional, brindando un servicio de calidad y calidez que aporte al desarrollo de la sociedad.</p>
    <h3>Siganos en nuestras redes sociales y paginas, asi obtendrá beneficios adicionales.</h3>
    <br>

            <a href="https://www.facebook.com/sportmancar.manta" target="_blank"><img src="imagenes/Facebook.png" width="90px" height="70px"></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <a href="https://twitter.com/?lang=es" target="_blank"><img src="imagenes/twitter.png" width="90px" height="70px"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <a href="https://www.instagram.com/" target="_blank"><img src="imagenes/instagram.png" width="90px" height="70px"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="https://www.youtube.com/" target="_blank"><img src="imagenes/youtube.png" width="100px" height="70px" ></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        <img src="imagenes/what.png" width="100px" height="70px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <br><br> 
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 0969227858

</header>
    <div id="map"></div>
  </body>
</html>