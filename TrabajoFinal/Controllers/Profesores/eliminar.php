<?php

require_once "../../Models/profesor.php";

$id = $_GET['id'];

$profesor = Profesor::getById($id);

if($profesor){
    $profesor->softDelete();
    header('Location: ../../Controllers/Profesores/index.php');
}