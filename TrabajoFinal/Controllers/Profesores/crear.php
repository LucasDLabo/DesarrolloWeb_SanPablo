<?php

require_once "../../Models/profesor.php";
require_once "../../Models/materia.php";

$materias = Materia::all();

if (isset($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
    $segundo_nombre = $_POST['segundo_nombre'];
    $apellido = $_POST['apellido'];
    $materiaID = $_POST['materia'];

    $profesor = new Profesor();
    $profesor->nombre = $nombre;
    $profesor->segundo_nombre = $segundo_nombre;
    $profesor->apellido = $apellido;
    $profesor->materia_id = $materiaID;
    $profesor->create();

    header('Location: ../../Controllers/Profesores/index.php');

}

require_once "../../Views/Profesores/crear.view.php";