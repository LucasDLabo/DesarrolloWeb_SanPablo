<?php
require_once "../../Models/materia.php";

$profesores = Profesor::getById(1);

echo  $profesores->materia()->nombre;

$materia = Materia::getById(1);
//echo $materia->nombre;


foreach ($materia->profesores() as $profesor) {
    echo "<p>$profesor->nombre</p>";
}