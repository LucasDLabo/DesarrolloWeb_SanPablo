<?php

require_once "../../Models/materia.php";

$materiasDB = Materia::all();

require_once "../../Views/Materias/indexMateria.view.php";

$materias = Materia::getById(3);

foreach ($materias->alumnos() as $alumnos) {
    echo "<p>$alumnos->nombre</p>";
}
