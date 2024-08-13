<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <title>guardias</title>
</head>
<body>
    
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

      <?php
session_start();
$usuario=$_SESSION['usuario'];
?>
    
      <br>
      <h1>Registrar Guardia</h1>
      <br>

<form method="post" action="controlador.php" class="row g-3 needs-validation" novalidate>
  <div class="col-md-4 position-relative">
    <label for="idemp" class="form-label">Id de empleado</label>
    <input type="text" class="form-control" id="idemp" name="idemp" value="A108" required>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
  <div class="col-md-4 position-relative">
    <label for="nom" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nom" name="nom" value="Mark" required>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
  <div class="col-md-4 position-relative">
    <label for="apellido1" class="form-label">Apellido paterno</label>
    <input type="text" class="form-control" id="apellido1" name="apellido1" value="Otto" required>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>  
  <div class="col-md-4 position-relative">
    <label for="apellido2" class="form-label">Apellido materno</label>
    <input type="text" class="form-control" id="apellido2" name="apellido2" value="Otto" required>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
  <div class="col-md-6 position-relative">
    <label for="edad" class="form-label">Edad</label>
    <input type="text" class="form-control" id="edad" name="edad" required>
    <div class="invalid-tooltip">
      La edad minima es de 18 años.
    </div>
  </div>
  <div class="col-md-3 position-relative">
    <label for="sexo" class="form-label">Sexo</label>
    <select class="form-select" id="sexo" name="sexo" required>
      <option selected disabled value="">Elige...</option>
      <option>Hombre</option>
      <option>Mujer</option>
    </select>
    <div class="invalid-tooltip">
      Selecciona Hombre o Mujer.
    </div>
</div>
  </div>
  <div class="col-md-6 position-relative">
    <label for="contacto" class="form-label">Contacto</label>
    <input type="number" class="form-control" id="contacto" name="contacto" required>
    <div class="invalid-tooltip">
      El numero de contacto es igual a los ultimos digitos del Id.
    </div>
  </div>
  <div class="col-md-3 position-relative">
    <label for="turno" class="form-label">Turno</label>
    <select class="form-select" id="turno" name="turno" required>
      <option selected disabled value="">Elige...</option>
      <option>Matutino</option>
      <option>Vespertino</option>
      <option>Nocturno</option>
    </select>
    <div class="invalid-tooltip">
      Selecciona un turno.
    </div>
</div>
<div class="col-md-3 position-relative">
    <label for="descanso" class="form-label">Descanso</label>
    <select class="form-select" id="descanso" name="descanso" required>
      <option selected disabled value="">Elige...</option>
      <option>Lunes</option>
      <option>Martes</option>
      <option>Miercoles</option>
      <option>Jueves</option>
      <option>Viernes</option>
      <option>Sabado</option>
      <option>Domingo</option>
    </select>
    <div class="invalid-tooltip">
      Selecciona un dia de descanso.
    </div>
</div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Guardar</button>
  </div>
</form>      
        
      <hr>
      <footer>
        <b>SPS - Todos los derechos reservados. 16/07/2024</b>
      </footer>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>
</html>