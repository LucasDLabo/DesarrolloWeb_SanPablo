<?php

require_once "../../Models/materia.php";

$id = $_GET['id'];

if (isset($_POST['nombreMateria'])) {
    $nombre = $_POST['nombreMateria'];

    $materia = Materia::getById($id);
    $materia->nombre = $nombre;

    $materia->update();

    header('Location: ../../Controllers/Materias/index.php');
}else{
    $materia = Materia::getById($id);
    if($materia){
        require_once "../../Views/Materias/editar.view.php";
    }
}

