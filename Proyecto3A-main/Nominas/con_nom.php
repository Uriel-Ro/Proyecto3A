<?php

include 'model_nom_dis.php';
$modelo0 = new Model_nom_dis();

$modelo0->id = $_POST['id'];
$modelo0->SueldoBruto = intval($_POST['sueldo']);
$modelo0->bono = intval($_POST['bonos']);

$accion = intval($_POST['opcion_submit']);
$poo = $_REQUEST['dinam_Btn'];

switch($accion) {
    case 1: //$activacion = $modelo0->inv_consulta();
        //header('Location: v_nominas.php?act='.$activacion ."&id=" .$_REQUEST['id']);
        header('Location: v_nominas.php?act=unica&id=' .$_REQUEST['id']);
        break;
    case 2: $modelo0->registrar();
        header('Location: v_nominas.php?act=unica&id=' .$_REQUEST['id']);
        break;
    case 3: $modelo0->modificar();
        header('Location: v_nominas.php?act=unica&id=' .$_REQUEST['id']);
        break;
    case 4: $modelo0->eliminar();
        header('Location: v_nominas.php');
        break;
}

switch($poo) {
    case "izquierda":
        header('Location: v_nominas.php?act=todo&chk=bi');
        break;
    case "derecha":
        header('Location: v_nominas.php?act=derecha&chk=bd');
        break;
}

/*
SELECT * FROM guardias WHERE NOT EXISTS (SELECT ID_Guardia FROM nominas WHERE guardias.ID_Guardias = nominas.ID_Guardia);
SELECT ID_Guardias,Nombre,Apelido1,Turno FROM guardias WHERE NOT EXISTS (SELECT ID_Guardia FROM nominas WHERE guardias.ID_Guardias = nominas.ID_Guardia);
CREATE VIEW nomina_pendiente AS SELECT * FROM guardias WHERE NOT EXISTS (SELECT ID_Guardia FROM nominas WHERE guardias.ID_Guardias = nominas.ID_Guardia);
CREATE VIEW nominas_pendientes AS SELECT ID_Guardias,Nombre,Apellido1,Turno FROM guardias WHERE NOT EXISTS (SELECT ID_Guardia FROM nominas WHERE guardias.ID_Guardias = nominas.ID_Guardia);*/
?>