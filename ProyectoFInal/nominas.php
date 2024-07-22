<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo0.css">
    <script type="text/javascript" src="validacion0.js"></script>
    <title>Nominas</title>
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
                <a class="nav-link active" aria-current="page" href="#">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Nosotros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contactanos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Servicios</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <div id="lienzo">
        <h1> Nominas </h1>
        <p><b> Nota: </b> Solo se puede consultar por ID, impuestos y saldo libre se calculan solos. </p>
        <hr>
        <form method="post" action="controlador0.php" onsubmit="return validar(event);">
            <aside id="aside1">
                <label for="id"> <p class="labelG"> <b> ID </b> </p> 
                </label> <br>
                <label for="sueldo"> <p class="labelG"> <b> Sueldo </b> </p> 
                </label> <br>
                <label for="bonos"> <p class="labelG"> <b> Bonos </b> </p> 
                </label>
            </aside>
            <section id="section1">
                <input type="text" id="id" name="id" onfocus="enfocado(this); " onblur="desenfocado('inpM',this); validarTexto(this, 3);" placeholder="ID Empleado" class="inputM" /> <br>
                <input type="text" id="sueldo" name="sueldo" onfocus="enfocado(this)" onblur="desenfocado('inpM',this); validarNumero(this, 4);" placeholder="$##,###" class="inputM" /> <br>
                <input type="text" id="bonos" name="bonos" onfocus="enfocado(this)" onblur="desenfocado('inpM',this); validarNumero(this, 3);" placeholder="Opcional" class="inputM" /> <br>
            </section>
            <hr> <!--
            <button> Consultar </button> -->
            <button type='submit'> Guardar </button> 
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>