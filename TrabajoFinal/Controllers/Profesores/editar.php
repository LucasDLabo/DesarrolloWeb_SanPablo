<?php

require_once "../../Models/profesor.php";
require_once "../../Models/materia.php";

$id = $_GET['id'];
$materias = Materia::all();

if (isset($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
    $segundo_nombre = $_POST['segundo_nombre'];
    $apellido = $_POST['apellido'];
    $materiaID = $_POST['materia'];

    $profesor = Profesor::getById($id);
    $profesor->nombre = $nombre;
    $profesor->segundo_nombre = $segundo_nombre;
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

