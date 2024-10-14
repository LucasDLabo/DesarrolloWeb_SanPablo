<?php

require_once __DIR__ ."/../../Models/alumno.php";

$alumnos = Alumno::all();

require_once "../../Views/Alumnos/index.view.php";

$alumno = Alumno::getById(9);
foreach ($alumno->materias() as $materias) {
    echo "<p>$materias->nombre</p>";
}


//var_dump($alumno->materias()->nombre) ;



