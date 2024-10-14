<?php

require_once "../../Models/profesor.php";

$id = $_GET['id'];

$profesor = Profesor::getById($id);

if($profesor){
    $profesor->delete();
    header('Location: ../../Controllers/Profesores/index.php');
}