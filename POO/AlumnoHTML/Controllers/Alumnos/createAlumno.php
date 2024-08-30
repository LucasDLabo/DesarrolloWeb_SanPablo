<?php

require_once "../../Models/alumno.php";

if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fecha_nacimineto = $_POST['date'];

    $alumno = new Alumno();
    $alumno->nombre = $nombre;
    $alumno->apellido = $apellido;
    $alumno->fecha_nacimiento = $fecha_nacimineto;
    $alumno->create();

    header('Location: ../../Controllers/Alumnos/indexAlumno.php');

}

require_once "../../Views/Alumnos/createAlumno.view.php";