<?php

require_once __DIR__ ."/../../Models/alumno.php";

$alumnos = Alumno::all();


require_once "../../Views/Alumnos/indexAlumno.view.php";

$alumno = Alumno::getById(9);

foreach ($alumno->materias() as $materia) {
    echo "<p>$materia->nombre</p>";

}

