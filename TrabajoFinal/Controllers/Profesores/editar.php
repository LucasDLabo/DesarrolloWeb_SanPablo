<?php

require_once "../../Models/profesor.php";
require_once "../../Models/materia.php";

$id = $_GET['id'];
$materias = Materia::all();

if (isset($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $materiaID = $_POST['materiaID'];

    $profesor = Profesor::getById($id);
    $profesor->nombre = $nombre;
    $profesor->apellido = $apellido;
    $profesor->materia_id = $materiaID;
    $profesor->update();

    header('Location: ../../Controllers/Profesores/index.php');
}else{
    $profesor = Profesor::getById($id);
    if($profesor){
        require_once "../../Views/Profesores/editar.view.php";
    }
}

