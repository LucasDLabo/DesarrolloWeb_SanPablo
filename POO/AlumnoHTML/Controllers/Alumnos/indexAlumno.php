<?php

require_once "../../Models/alumno.php";

$alumnos = Alumno::all();


require_once "../../Views/Alumnos/indexAlumno.view.php";

$alumno = Alumno::getById(9);
echo $alumno->materias()->materias;

