<?php

require_once "../Models/alumno.php";

$id = $_GET['id'];

echo $id;

$alumno = Alumno::getById($id);


if($alumno){
    $alumno->delete();
    header('Location: ../Controllers/indexAlumno.php');
}