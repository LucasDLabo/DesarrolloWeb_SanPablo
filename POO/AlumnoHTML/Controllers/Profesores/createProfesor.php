<?php

require_once "../../Models/profesor.php";
require_once "../../Models/materia.php";

$materias = Materia::all();

if (isset($_POST['createProfesor'])) {
    $nombre = $_POST['nombreProfesor'];
    $apellido = $_POST['apellidoProfesor'];
    $materiaID = $_POST['materiaID'];

    $profesor = new Profesor();
    $profesor->nombre = $nombre;
    $profesor->apellido = $apellido;
    $profesor->materia_id = $materiaID;
    $profesor->create();

    header('Location: ../../Controllers/Profesores/index.php');

}

require_once "../../Views/Profesores/create.view.php";