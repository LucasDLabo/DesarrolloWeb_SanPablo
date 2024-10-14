<?php

require_once "../../Models/alumno.php";
require_once "../../Models/materia.php";

$materias = Materia::all();

if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fecha_nacimineto = $_POST['date'];

    $alumno = new Alumno();
    $alumno->nombre = $nombre;
    $alumno->apellido = $apellido;
    $alumno->fecha_nacimiento = $fecha_nacimineto;
    $alumno->create();

    header('Location: ../../Controllers/Alumnos/index.php');

}

require_once "../../Views/Alumnos/create.view.php";