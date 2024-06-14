<?php

include_once 'Conexion.php';
include_once 'Cliente.php';

$conexion = new Conexion;
$conexion->conectarBaseDeDatos();

//Create
$cliente = new Cliente;
$cliente->nombre = "Lucas";
$cliente->apellido = "Del Labo";
$cliente->fecnac = "2003-05-30";
$cliente->email = "lucas.dellabo@gmail.com";
$cliente->edad = "21";
$cliente->create();

