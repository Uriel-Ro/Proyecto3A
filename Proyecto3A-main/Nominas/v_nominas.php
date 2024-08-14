<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="estilov.css">
    <script type="text/javascript" src="validacion2.js"></script>
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

    <div class="container-md lienzo">
        <h1 class="encabezadoDiv"> Nominas </h1>
        <p class="encabezadoDiv"><b> Nota: </b> Solo se puede consultar por ID, impuestos y saldo libre se calculan solos. </p>
        <hr>
        <form action="con_nom.php" onsubmit="return validar2();" method="post">
            <div class="row mb-3">
                <label for="id" class="col-sm-2 col-form-label"> <b> ID </b> </label>
                <div class="col-sm-10">
                    <input id="id" name="id" type="text" class="form-control" placeholder="ID Empleado" onfocus="enfocado2(this);" onblur="desenfocado2(this); validarTexto(this, 3);">
                </div>
            </div>
            <div class="row mb-3">
                <label for="sueldo" class="col-sm-2 col-form-label"> <b> Sueldo </b> </label>
                <div class="col-sm-10">
                    <input id="sueldo" name="sueldo" type="text" class="form-control" placeholder="$##,###" onfocus="enfocado2(this);" onblur="desenfocado2(this); validarNumero(this, 4);">
                </div>
            </div>
            <div class="row mb-3">
                <label for="bonos" class="col-sm-2 col-form-label"> <b> Bonos </b></label>
                <div class="col-sm-10">
                    <input id="bonos" name="bonos" type="text" class="form-control" placeholder="Opcional" onfocus="enfocado2(this);" onblur="desenfocado2(this); validarNumero(this, 3);">
                </div>
            </div>
            <div class="input-group">
                <label class="input-group-text input1" for="opcion_submit"> Opciones -> </label>
                <select class="form-select" id="opcion_submit" name="opcion_submit">
                    <option value="0"> Elija una opcion para manipular los datos... </option>
                    <option value="1"> Consultar </option>
                    <option value="2"> Guardar </option>
                    <option value="3"> Modificar </option>
                    <option value="4"> Eliminar </option>
                </select>
                <button type="submit" class="btn btn-outline-light"> Ejecutar </button>
            </div>
        </form>
    </div>
    <!--    -->
    <?php 
    error_reporting(0);
    switch($_REQUEST['chk']) {
        case "bi": $checar1 = "checked"; break;
        case "bd": $checar2 = "checked"; break;
    }
    ?>
      <div class="container-md p0">
        <form action="controlador2.php" method="post" id="dinamico" name="dinamico">
            <div class="btn-group btn_largo" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check" name="dinam_Btn" id="dinam_I" value="izquierda" onclick= "document.dinamico.action = 'con_nom.php'; document.dinamico.submit()" <?php echo $checar1; ?> >
                <label class="btn btn-outline-light" for="dinam_I"> Consultar Nominas </label>
                
                <input type="radio" class="btn-check" name="dinam_Btn" id="dinam_R" value="derecha" onclick= "document.dinamico.action = 'con_nom.php'; document.dinamico.submit()" <?php echo $checar2; ?>>
                <label class="btn btn-outline-light" for="dinam_R"> Nominas Pendientes </label>
            </div>
        </form>

    <?php 
    //error_reporting(0);
    include 'model_nom_dis.php';
    $modelo0 = new Model_nom_dis();

    if(isset($_REQUEST['act'])) {
        switch($_REQUEST['act']) {
            case "unica":
                sleep(1);
                $informacion = $modelo0->consultar_uno($_REQUEST['id']);
                break;
            case "todo":
            case "izquierda":
                $informacion = $modelo0->consultar_todo();
                break;
            case "derecha":
                $informacion = $modelo0->consultar_faltantes();
                break;
        }
    }
    if($_REQUEST['act'] == "derecha") { ?>

        <table class="table table-secondary p1">
            <thead>
                <tr class="table-dark">
                    <th scope="col"> ID Guardia </th>
                    <th scope="col"> Nombre </th>
                    <th scope="col"> Apellido </th>
                    <th scope="col"> Turno </th>
                </tr>
            </thead>
            <tbody>
            
        <?php
        while($row = $informacion->fetch_array()) {
            $id = $row['ID_Guardias'];
            $nombre = $row['Nombre'];
            $apellido = $row['Apellido1'];
            $turno = $row['Turno']; ?>
            
                <tr>
                    <th scope="row"> <?php echo $id; ?> </th>
                    <td> <?php echo $nombre; ?> </td>
                    <td> <?php echo $apellido; ?> </td>
                    <td> <?php echo $turno; ?> </td>
                </tr>

                <?php
                    } ?>
            </tbody>
        </table>
      </div>
    <?php
    } else if($informacion) { ?>
    
        <table class="table table-secondary p1">
            <thead>
                <tr class="table-dark">
                    <th scope="col"> ID Guardia </th>
                    <th scope="col"> Sueldo Bruto </th>
                    <th scope="col"> Bonos </th>
                    <th scope="col"> Impuestos </th>
                    <th scope="col"> Sueldo Libre</th>
                </tr>
            </thead>
            <tbody>
            
        <?php
        while($row = $informacion->fetch_array()) {
            $id = $row['ID_Guardia'];
            $SueldoBruto = $row['SueldoBruto'];
            $bono = $row['Bonos'];
            $isr = $row['Impuestos'];
            $sueldoLibre = $row['SueldoLibre']; ?>
            
                <tr>
                    <th scope="row"> <?php echo $id; ?> </th>
                    <td> <?php echo $SueldoBruto; ?> </td>
                    <td> <?php echo $bono; ?> </td>
                    <td> <?php echo $isr; ?> </td>
                    <td> <?php echo $sueldoLibre; ?> </td>
                </tr>
        
        <?php
        }
        ?>
            </tbody>
        </table>
      </div>
        <?php
    }

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>