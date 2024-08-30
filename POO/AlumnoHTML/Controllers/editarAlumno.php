<?php

require_once "../Models/alumno.php";

$id = $_GET['id'];

if (isset($_POST['submitEdit'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fecha_nacimineto = $_POST['date'];

    $alumno = Alumno::getById($id);
    $alumno->nombre = $nombre;
    $alumno->apellido = $apellido;
    $alumno->fecha_nacimiento = $fecha_nacimineto;
    $alumno->update();

    header('Location: ../Controllers/indexAlumno.php');
}else{
    $alumno = Alumno::getById($id);
    if($alumno){
        require_once "../Views/editarAlumno.view.php";
    }
}

