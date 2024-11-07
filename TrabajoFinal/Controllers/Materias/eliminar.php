<?php

require_once "../../Models/materia.php";

$id = $_GET['id'];

$materia = Materia::getById($id);
$profesores = $materia->profesores();
foreach ($profesores as $profesor ) {
    $profesor->materia_id = null;
    $profesor->update();
}
var_dump($profesores);

if($materia){
    $materia->softdelete();
    header('Location: ../../Controllers/Materias/index.php');
}