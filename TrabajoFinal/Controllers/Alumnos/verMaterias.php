<?php

require_once __DIR__ ."/../../Models/alumno.php";
require_once __DIR__ ."/../../Models/materia.php";

$id = $_GET['id'];
$alumno = Alumno::getById($id);

require_once "../../Views/Alumnos/verMaterias.view.php";
