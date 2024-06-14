<?php

class Conexion{
    public $conexion;
    public $host;
    public $user;
    public $pass;
    public $db;

    public function conectarBaseDeDatos(){
        $this->conexion = mysqli_connect ("localhost", "root", "", "poo");
    }
}