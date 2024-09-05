<?php

require_once "../../Models/profesor.php";

$id = $_GET['id'];

if (isset($_POST['submitEdit3'])) {
    $nombre = $_POST['nombreProfesor'];
    $apellido = $_POST['apellidoProfesor'];
    $materiaID = $_POST['materiaProfesor'];

    $profesor = Profesor::getById($id);
    $profesor->nombre = $nombre;
    $profesor->apellido = $apellido;
    $profesor->materia_id = $materiaID;
    $profesor->update();

    header('Location: ../../Controllers/Profesores/indexProfesor.php');
}else{
    $profesor = Profesor::getById($id);
    if($profesor){
        require_once "../../Views/Profesores/editarProfesor.view.php";
    }
}

