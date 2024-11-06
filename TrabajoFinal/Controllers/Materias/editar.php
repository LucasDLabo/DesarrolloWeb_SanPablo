<?php

require_once "../../Models/materia.php";

$id = $_GET['id'];

if (isset($_POST['nombre'])) {
    $nombre = $_POST['nombre'];

    $materia = Materia::getById($id);
    $materia->nombre = $nombre;

    $materia->update();

    header('Location: ../../Controllers/Materias/index.php');
}else{
    $materia = Materia::getById($id);
    if($materia and $materia->papelera != 1 and $materia->borrado != 1){
        require_once "../../Views/Materias/editar.view.php";
    }else{
        require_once "../../Controllers/Materias/index.php";
    }
}

