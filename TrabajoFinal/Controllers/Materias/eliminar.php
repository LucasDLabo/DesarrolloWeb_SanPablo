<?php

require_once "../../Models/materia.php";

$id = $_GET['id'];

$materia = Materia::getById($id);

if($materia){
    $materia->softdelete();
    header('Location: ../../Controllers/Materias/index.php');
}