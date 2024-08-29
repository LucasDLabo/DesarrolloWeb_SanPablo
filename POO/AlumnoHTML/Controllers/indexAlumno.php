<?php

require_once "../Models/alumno.php";

$alumnos = Alumno::all();

require_once "../Views/indexAlumno.view.php";


