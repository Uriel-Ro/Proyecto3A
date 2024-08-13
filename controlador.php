<?php
include 'modelo.php';
$modelo = new Modelo();
/*
if (isset($_POST['nombre'])) {
    $modelo->nombre = $_POST['nombre'];
}

if (isset($_POST['apellido'])) {
    $modelo->apellido = $_POST['apellido'];
}

if (isset($_POST['email'])) {
    $modelo->email = $_POST['email'];
}

if (isset($_POST['comentarios'])) {
    $modelo->comentarios = $_POST['comentarios'];
}

if (isset($_REQUEST['opcion'])&&isset($_REQUEST['id'])) {
    
    if($_REQUEST['opcion']=2){
        $modelo->eliminar($_REQUEST['id']);
    }
}else{
    $modelo->registrar();}
    header('Location: contactanos.php');*/

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['accion']) && $_POST['accion'] == 'modificar') {
            $modelo->id = $_POST['idemp'];  // Asegúrate de que 'idemp' tiene el valor correcto
            $modelo->nombre = $_POST['nom'];
            $modelo->apellido1 = $_POST['apellido1'];
            $modelo->apellido2 = $_POST['apellido2'];
            $modelo->edad = $_POST['edad'];
            $modelo->sexo = $_POST['sexo'];
            $modelo->contacto = $_POST['contacto'];
            $modelo->turno = $_POST['turno'];
            $modelo->descanso = $_POST['descanso'];
            $modelo->modificar();  // Llama a modificar en lugar de registrar
        } else {
            $modelo->id = $_POST['idemp'];
            $modelo->nombre = $_POST['nom'];
            $modelo->apellido1 = $_POST['apellido1'];
            $modelo->apellido2 = $_POST['apellido2'];
            $modelo->edad = $_POST['edad'];
            $modelo->sexo = $_POST['sexo'];
            $modelo->contacto = $_POST['contacto'];
            $modelo->turno = $_POST['turno'];
            $modelo->descanso = $_POST['descanso'];
            $modelo->registrar();
        }
        header('Location: guardias.php');
    }
    

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Código para manejar el POST (registro o modificación)
        if (isset($_POST['accion']) && $_POST['accion'] == 'modificar') {
            $modelo->modificar();
        } else {
            $modelo->registrar();
        }
        header('Location: guardias.php');
    } elseif ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['accion']) && $_GET['accion'] == 'eliminar') {
        // Código para manejar el GET (eliminación)
        $id = $_GET['id'];
        $modelo->eliminar($id);
        header('Location: consulta.php');
    }
    ?>

    