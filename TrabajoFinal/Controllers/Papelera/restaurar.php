<?php
require_once '../../Models/alumno.php';

if (isset($_GET['id']) && isset($_GET['clase'])) {
    $id = $_GET['id'];
    $clase = $_GET['clase'];

    if ($clase == 'alumno') {
        $alumno = Alumno::getById($id);
        $alumno->restaurar();
        header('Location: ../../Controllers/Papelera/index.php');
    }elseif ($clase == 'profesor') {
        $profesor = Profesor::getById($id);
        $profesor->restaurar();
        header('Location: ../../Controllers/Papelera/index.php');
    }elseif ($clase == 'materia') {
        $materia = Materia::getById($id);
        $materia->restaurar();
        header('Location: ../../Controllers/Papelera/index.php');
    }
}
