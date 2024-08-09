<?php

include 'modelo0.php';
$modelo0 = new Modelo0();

$modelo0->id = $_POST['id'];
$modelo0->SueldoBruto = intval($_POST['sueldo']);
$modelo0->bono = intval($_POST['bonos']);

$accion = intval($_POST['opcion_submit']);

switch($accion) {
    case 1: $modelo0->consultar();
        break;
    case 2: $modelo0->registrar();
        break;
    case 3: $modelo0->modificar();
        break;
    case 4: $modelo0->eliminar();
        break;
}

?>