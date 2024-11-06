<?php
require_once __DIR__ . "../../../Models/alumno.php";
require_once __DIR__ . "../../../Models/profesor.php";
require_once __DIR__ . "../../../Models/materia.php";

$conteoAlumnos = Alumno::conteo();
$conteoProfesores = Profesor::conteo();
$conteoMaterias = Materia::conteo();
$totalRegistros = $conteoAlumnos + $conteoMaterias + $conteoProfesores;

$alumnos = Alumno::all();
$edades = array(); 
$diaActual = date('Y');
foreach ($alumnos as $alumno) {
    $fecha_nacimiento = date('Y', strtotime($alumno->fecha_nacimiento));
    $edad = $diaActual - $fecha_nacimiento;
    $edades[] = $edad;
}
$promEdades = round((array_sum($edades) / $conteoAlumnos));


$idMateria = Alumno::materiaEstudiada();
$materiaMasEstudiada = Materia::getById($idMateria);

$idMateriaProfe = Profesor::materiaMenosProfes();
$materiaMenosProfes = Materia::getById($idMateriaProfe);


require_once "../../Views/Dashboard/index.view.php";