<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <title>consulta</title>
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
      <h1>Consultar Guardias</h1>
      <br>

      <form method="GET" action="consulta.php" class="row g-3 mt-4">
        <div class="col-md-6">
            <label for="criterio" class="form-label">Buscar por cualquier campo</label>
            <input type="text" class="form-control" id="criterio" name="criterio" placeholder="Ingrese criterio de búsqueda">
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Buscar</button>
        </div>
    </form>
    
    <?php
    if (isset($_GET['criterio'])) {
        include 'modelo.php';
        $modelo = new Modelo();
        $criterio = $_GET['criterio'];
        $resultado = $modelo->consultar($criterio);
    } else {
        include 'modelo.php';
        $modelo = new Modelo();
        $resultado = $modelo->consultar(null);
    }

    if (isset($resultado)) {
    ?>
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Edad</th>
                    <th>Sexo</th>
                    <th>Contacto</th>
                    <th>Turno</th>
                    <th>Descanso</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($fila = mysqli_fetch_assoc($resultado)) {
                    echo "<tr>";
                    echo "<td>" . $fila['ID_Guardias'] . "</td>";
                    echo "<td>" . $fila['Nombre'] . "</td>";
                    echo "<td>" . $fila['Apelido1'] . "</td>";
                    echo "<td>" . $fila['Apellido2'] . "</td>";
                    echo "<td>" . $fila['Edad'] . "</td>";
                    echo "<td>" . $fila['Sexo'] . "</td>";
                    echo "<td>" . $fila['Contacto'] . "</td>";
                    echo "<td>" . $fila['Turno'] . "</td>";
                    echo "<td>" . $fila['Descanso'] . "</td>";
                    echo "<td>";
                    echo "<a href='editar.php?id=" . $fila['ID_Guardias'] . "' class='btn btn-warning btn-sm'>Editar</a> ";
                    echo "<a href='controlador.php?accion=eliminar&id=" . $fila['ID_Guardias'] . "' class='btn btn-danger btn-sm' onclick='return confirm(\"¿Está seguro de eliminar este registro?\")'>Eliminar</a>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    <?php } ?>    
        
      <hr>
      <footer>
        <b>SPS - Todos los derechos reservados. 16/07/2024</b>
      </footer>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>
</html>