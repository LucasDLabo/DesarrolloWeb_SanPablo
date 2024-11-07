<?php

require_once 'conexion.php';
require_once 'materia.php';

class Profesor extends Conexion {

    public $id, $nombre, $segundo_nombre, $apellido, $materia_id, $papelera, $borrado;

    public function create() {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "INSERT INTO profesores (nombre, segundo_nombre, apellido, materia_id) VALUES (?, ?, ?, ?)");
        $pre->bind_param("sssi", $this->nombre, $this->segundo_nombre, $this->apellido, $this->materia_id);
        $pre->execute();
    }

    public static function all() {
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT * FROM profesores WHERE papelera IS NULL AND borrado IS NULL");
        $pre->execute();
        $valoresDB = $pre->get_result();

        $profesores = [];
        while ($profesor = $valoresDB->fetch_object(Profesor::class) ){
            array_push($profesores, $profesor);
        }

        return $profesores;
    }

    public static function allDelete() {
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT * FROM profesores WHERE papelera = 1 AND borrado IS NULL");
        $pre->execute();
        $valoresDB = $pre->get_result();

        $profesores = [];
        while ($profesor = $valoresDB->fetch_object(Profesor::class) ){
            array_push($profesores, $profesor);
        }

        return $profesores;
    }
    public static function getById($id){

        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT * FROM profesores WHERE id = ?");
        $pre->bind_param("i", $id);
        $pre->execute();
        $valorDB = $pre->get_result();

        $profesor = $valorDB->fetch_object(Profesor::class);

        return $profesor;

    }

    public function softdelete() {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "UPDATE profesores SET papelera = 1 WHERE id = ?");
        $pre->bind_param("i", $this->id);
        $pre->execute();
    }

    public function restaurar() {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "UPDATE profesores SET papelera = NULL WHERE id = ?");
        $pre->bind_param("i", $this->id);
        $pre->execute();
    }

    public function delete() {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "UPDATE profesores SET borrado = 1 WHERE id = ?");
        $pre->bind_param("i", $this->id);
        $pre->execute();
    }

    public function update() {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "UPDATE profesores SET nombre = ?, segundo_nombre = ?, apellido = ?, materia_id = ? WHERE id = ? ");
        $pre->bind_param("sssii", $this->nombre, $this->segundo_nombre, $this->apellido, $this->materia_id, $this->id) ;
        $pre->execute();
    }

    
    public function materia() {
        return Materia::getById($this->materia_id);
    }

    public static function conteo() {
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT COUNT(id) as Recuento FROM `profesores` WHERE papelera IS NULL OR borrado IS NULL");
        $pre->execute();
        $valoresDB = $pre->get_result();
        $alumno = $valoresDB->fetch_assoc();
        return $alumno['Recuento'];

    }

    public static function materiaMenosProfes() {
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT materia_id,COUNT(id) AS 'total' FROM `profesores` WHERE papelera IS NULL OR borrado IS NULL GROUP BY materia_id ORDER BY total ASC LIMIT 1");
        $pre->execute();
        $valoresDB = $pre->get_result();
        $materiaMenosProfes = $valoresDB->fetch_assoc();

        return $materiaMenosProfes['materia_id'];

    }
}
