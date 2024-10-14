<?php

require_once "../../Models/profesor.php";
require_once "../../Models/materia.php";

$profesores = Profesor::all();




require_once "../../Views/Profesores/index.view.php";

