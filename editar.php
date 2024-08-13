<?php
include 'modelo.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
    $modelo = new Modelo();
    $resultado = $modelo->consultar($_GET['id']);
    $guardia = mysqli_fetch_assoc($resultado);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <title>editar</title>
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
      <h1>Editar Guardias</h1>
      <br>

      <form method="POST" action="controlador.php" class="row g-3 mt-4">
    <input type="hidden" name="accion" value="modificar">
    <input type="hidden" name="idemp" value="<?php echo $guardia['ID_Guardias']; ?>">
    
    <div class="col-md-6">
        <label for="nom" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nom" name="nom" value="<?php echo $guardia['Nombre']; ?>" required>
    </div>
    <div class="col-md-6">
        <label for="apellido1" class="form-label">Apellido Paterno</label>
        <input type="text" class="form-control" id="apellido1" name="apellido1" value="<?php echo $guardia['Apelido1']; ?>" required>
    </div>
    <div class="col-md-6">
        <label for="apellido2" class="form-label">Apellido Materno</label>
        <input type="text" class="form-control" id="apellido2" name="apellido2" value="<?php echo $guardia['Apellido2']; ?>" required>
    </div>
    <div class="col-md-6">
        <label for="edad" class="form-label">Edad</label>
        <input type="number" class="form-control" id="edad" name="edad" value="<?php echo $guardia['Edad']; ?>" required>
    </div>
    <div class="col-md-6">
    <label for="sexo" class="form-label">Sexo</label>
    <select class="form-control" id="sexo" name="sexo" required>
        <option value="Hombre" <?php if($guardia['Sexo'] == 'Hombre') echo 'selected'; ?>>Hombre</option>
        <option value="Mujer" <?php if($guardia['Sexo'] == 'Mujer') echo 'selected'; ?>>Mujer</option>
    </select>
</div>
    <div class="col-md-6">
        <label for="contacto" class="form-label">Contacto</label>
        <input type="text" class="form-control" id="contacto" name="contacto" value="<?php echo $guardia['Contacto']; ?>" required>
    </div>
    <div class="col-md-6">
        <label for="turno" class="form-label">Turno</label>
        <input type="text" class="form-control" id="turno" name="turno" value="<?php echo $guardia['Turno']; ?>" required>
    </div>
    <div class="col-md-6">
        <label for="descanso" class="form-label">Descanso</label>
        <input type="text" class="form-control" id="descanso" name="descanso" value="<?php echo $guardia['Descanso']; ?>" required>
    </div>
    <div class="col-12">
        <button class="btn btn-primary" type="submit">Guardar Cambios</button>
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