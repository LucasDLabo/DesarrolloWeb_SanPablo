<?php

require_once "../../Models/materia.php";

$materiasDB = Materia::all();

require_once "../../Views/Materias/indexMateria.view.php";

