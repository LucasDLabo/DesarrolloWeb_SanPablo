<?php

include_once 'Conexion.php';

class Cliente extends Conexion{

    public $id, $nombre, $apellido, $fecnac, $email, $edad;

    public function create(){
        $this->conectarBaseDeDatos();
        $prepare = mysqli_prepare($this->conexion, "INSERT INTO clientes (nombre, apellido, fecnac, email, edad) VALUES (?, ?, ?, ?, ?)");

        $prepare->bind_param("ssssi", $this->nombre, $this->apellido, $this->fecnac, $this->email, $this->edad);

        $prepare->execute();
    }

    public function update(){
        $this->conectarBaseDeDatos();

        $prepare = mysqli_prepare($this->conexion, "UPDATE clientes SET nombre = ? , apellido = ? , fecnac = ? , email = ? , edad = ? WHERE id = ?");

        $prepare->bind_param("ssssii", $this->nombre, $this->apellido, $this->fecnac, $this->email, $this->edad, $this->id);

        $prepare->execute();        

    }

    public function delete(){
        $this->conectarBaseDeDatos();

    }

    //Cuando es static debo de crear de nuevo la conexion. Se usa static cuando no queremos crear un nuevo objeto.
    public static function BuscarId($id){
        //Instanciamos la conexion
        $conexion = new Conexion();
        $conexion->conectarBaseDeDatos();

        //Preparamos la secuencia sql y ejecutamos
        $prepare = mysqli_prepare($conexion->conexion, "SELECT * FROM clientes WHERE id = ?");
        $prepare->bind_param("i", $id);
        $prepare->execute();

        //Obtenemos los datos que solamente son importantes con get_result
        $getResult = $prepare->get_result();

        //Retornamos los datos y los transformamos como objetos con fetch_object
        return $getResult->fetch_object(Cliente::class);
    }
}