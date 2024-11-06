<?php

require_once "../../Models/alumno.php";

$id = $_GET['id'];

$alumno = Alumno::getById($id);

if($alumno){
    $alumno->softdelete();
    header('Location: ../../Controllers/Alumnos/index.php');
}