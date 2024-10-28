<?php

require_once "../../Models/materia.php";

$materias = Materia::all();

require_once "../../Views/Materias/index.view.php";
