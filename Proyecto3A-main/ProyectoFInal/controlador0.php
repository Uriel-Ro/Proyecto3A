<?php

include 'modelo0.php';
$modelo0 = new Modelo0();

$modelo0->id = $_POST['id'];
$modelo0->SueldoBruto = intval($_POST['sueldo']);
$modelo0->bono = intval($_POST['bonos']);
$modelo0->registrar();

?>