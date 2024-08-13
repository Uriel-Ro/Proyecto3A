<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <title>Menu</title>
</head>
<body>
<?php
    $usuario = "Alumno";
    $contrasena = "12345678";

    if(isset($_POST['usr'])&&isset($_POST['pwd'])){
    
    if ($usuario == $_POST["usr"] && $contrasena == $_POST["pwd"]) {
        session_start();
        $_SESSION['usuario'] = $_POST['usr'];
        $_SESSION['contrasena'] = $_POST['pwd'];
    } else {
        header("Location: index.php?error=si");
    }}
    ?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">SPS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="menu.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="guardias.php">Guadias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contactog.html">Contacto_Guardia</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="asignaciong.html">Asignacion_Guardia</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="consulta.php">Consultar_Guardia</a>
          </li>
        </ul>

      </div>
      <ul class="navbar-nav">
        <a class="nav-link" href="salir.php">Salir</a>
      </ul>
    </div>
  </nav>

  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="guardia de seguridad.jpg" class="d-block w-100" alt="guardia">
      </div>
      <div class="carousel-item">
        <img src="camara.jpg" class="d-block w-100" alt="camara">
      </div>
    </div>
  </div>

  <br>
  <hr>
  <h1> SPS Servicio de proteccion y vigilancia.</h1>
  <p>
    Somos una empresa al servicio de la protección y vigilancia, dedicada a salvaguardar la integridad y el patrimonio
    de nuestros
    clientes a través de la prevención de siniestros físicos y materiales. <br><br>

    Ofrecemos una amplia gama de servicios de seguridad, incluyendo: <br><br>

    <b>Video vigilancia</b>: Monitoreo constante a través de cámaras de alta resolución. <br>
    <b>Sensores de humo</b>: Detección temprana de incendios para una respuesta rápida. <br>
    <b>Sensores de vidrios</b>: Detección de rupturas de cristales para evitar intrusiones. <br>
    <b>Sensores de movimiento</b>: Protección perimetral y detección de actividades sospechosas. <br>
    <b>Sensores de humedad y temperatura</b>: Monitoreo ambiental para evitar daños por condiciones extremas. <br>
    <b>Sensores sísmicos</b>: Alerta temprana en caso de terremotos. <br>
    <b>Sensores de accesos</b>: Control de entradas y salidas para asegurar instalaciones. <br>
    <b>Supervisión de personas, equipos, vehículos y mascotas</b>: Monitoreo integral para una protección completa. <br>

  </p>
    
  <hr>
  <footer>
    <b>SPS - Todos los derechos reservados. 16/07/2024</b>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>
</html>