<?php

require_once "../../Models/alumno.php";
require_once "../../Models/materia.php";

$id = $_GET['id'];
$materias = Materia::all();

if (isset($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fecha_nacimineto = $_POST['fecha'];
    $materias = $_POST['materia'];

    $alumno = Alumno::getById($id);
    $alumno->nombre = $nombre;
    $alumno->apellido = $apellido;
    $alumno->fecha_nacimiento = $fecha_nacimineto;
    $alumno->update();


    $alumno->delete_materias($id);
    foreach ($materias as $materia) {
        $alumno->insertar_materias($id ,$materia);
    }

    header('Location: ../../Controllers/Alumnos/index.php');
}else{
    $alumno = Alumno::getById($id);
    if($alumno and $alumno->papelera != 1 and $alumno->borrado != 1){
        require_once "../../Views/Alumnos/editar.view.php";
    }else{
        require_once "../../Controllers/Alumnos/index.php";
    }
}

