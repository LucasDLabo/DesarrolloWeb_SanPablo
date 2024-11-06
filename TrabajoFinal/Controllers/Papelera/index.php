<?php
require_once __DIR__ . "../../../Models/profesor.php";
require_once __DIR__ . "../../../Models/alumno.php";
require_once __DIR__ . "../../../Models/materia.php";

$alumnos = Alumno::allDelete();

$profesores = Profesor::allDelete();

$materias = Materia::allDelete();


require_once "../../Views/Papelera/index.view.php";