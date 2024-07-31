<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <script>type="text/javascript" href="validaciones.js"</script>
    <title>Login</title>
</head>
<body>
      
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">SPS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="Inicio.html">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="nosotros.html">Nosotros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contactanos.html">Contactanos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="servicios.html">Servicios</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <form action="menu.php" method="post" enctype="application/x-www-form-urlencoded">
        <div class="login">
  <div class="row mb-3">
    <label for="usr" class="col-sm-2 col-form-label">Usuario</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="usr" name="usr" onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarObligatorio(this);" />
    </div>
  </div>
  <div class="row mb-3">
    <label for="pwd" class="col-sm-2 col-form-label">Contraseña</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="pwd" name="pwd" onfocus="entroEnFoco(this)" onblur="salioDeFoco(this); revisarLongitud(this, 8);" />
    </div>
  </div>
  </div>
  </div>
  <div class="login">
  <button type="submit" class="btn btn-primary" value="Ingresar">Sign in</button>
  </div>
  
</form>
<?php
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
    if ($_GET["error"] == "si") {
        echo "<span style=\"color:#F00;  font-family: Verdana; font-size:2em;\">VERIFICA TUS DATOS</span>";
    }

    ?>
      <footer>
        SPS - Todos los derechos reservados. 16/07/2024
     </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 
</body>
</html>