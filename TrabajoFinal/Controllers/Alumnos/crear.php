<?php

require_once "../../Models/alumno.php";
require_once "../../Models/materia.php";

$materias = Materia::all();

if (isset($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fecha_nacimineto = $_POST['date'];
    $materias = $_POST['materia'];

    $alumno = new Alumno();
    $alumno->nombre = $nombre;
    $alumno->apellido = $apellido;
    $alumno->fecha_nacimiento = $fecha_nacimineto;
    $alumno_id = $alumno->create();
    
    foreach ($materias as $materia) {
        $alumno->insertar_materias($alumno_id ,$materia);
    }
    

    header('Location: ../../Controllers/Alumnos/index.php');

}

require_once "../../Views/Alumnos/crear.view.php";