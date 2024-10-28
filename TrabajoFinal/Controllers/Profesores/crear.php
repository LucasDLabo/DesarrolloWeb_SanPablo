<?php

require_once "../../Models/profesor.php";
require_once "../../Models/materia.php";

$materias = Materia::all();

if (isset($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $materiaID = $_POST['materiaID'];

    var_dump($nombre);

    $profesor = new Profesor();
    $profesor->nombre = $nombre;
    $profesor->apellido = $apellido;
    $profesor->materia_id = $materiaID;
    $profesor->create();

    header('Location: ../../Controllers/Profesores/index.php');

}

require_once "../../Views/Profesores/crear.view.php";