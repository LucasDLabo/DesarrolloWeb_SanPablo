<?php

require_once "../../Models/alumno.php";

$id = $_GET['id'];

$alumno = Alumno::getById($id);

if($alumno){
    $alumno->delete();
    header('Location: ../../Controllers/Alumnos/index.php');
}