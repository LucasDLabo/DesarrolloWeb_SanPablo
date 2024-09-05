<?php

require_once "../../Models/profesor.php";

$profesores = Profesor::all();

require_once "../../Views/Profesores/indexProfesor.view.php";


