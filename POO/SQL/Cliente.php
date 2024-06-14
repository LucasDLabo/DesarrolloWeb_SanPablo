<?php

include_once 'Conexion.php';

class Cliente extends Conexion{

    public $nombre, $apellido, $fecnac, $email, $edad;

    public function create(){
        $this->conectarBaseDeDatos();
        $prepare = mysqli_prepare($this->conexion, "INSERT INTO clientes (nombre, apellido, fecnac, email, edad) VALUES (?, ?, ?, ?, ?)");

        $prepare->bind_param("ssssi", $this->nombre, $this->apellido, $this->fecnac, $this->email, $this->edad);

        $prepare->execute();
    }

}