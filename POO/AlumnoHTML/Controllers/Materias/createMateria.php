<?php

require_once "../../Models/materia.php";

if (isset($_POST['createMateria'])){
    $nombreMateria = $_POST['nombreMateria'];

    $materia = new Materia;
    $materia->nombre = $nombreMateria;
    $materia->create();

    header('Location: ../../Controllers/Materias/indexMateria.php');
}


require_once "../../Views/Materias/createMateria.view.php";