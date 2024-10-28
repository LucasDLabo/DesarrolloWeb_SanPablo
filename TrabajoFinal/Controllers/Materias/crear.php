<?php

require_once "../../Models/materia.php";

if (isset($_POST['nombreMateria'])){
    $nombreMateria = $_POST['nombreMateria'];
    var_dump($nombreMateria);
    $materia = new Materia;
    $materia->nombre = $nombreMateria;
    $materia->create();

    header('Location: ../../Controllers/Materias/index.php');
}


require_once "../../Views/Materias/crear.view.php";