<?php

require_once 'conexion.php';
require_once 'profesor.php';
require_once 'alumno.php';


class Materia extends Conexion {

    public $id, $nombre;

    public function create(){
        $this->conectar();
        $pre = mysqli_prepare($this->con, "INSERT INTO materias (nombre) VALUES (?)");
        $pre->bind_param("s", $this->nombre);
        $pre->execute();
    }

    public static function all(){
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT * FROM materias ORDER BY nombre ASC");
        $pre->execute();
        $valoresDB = $pre->get_result();

        $materiasDB = array();
        while ($materia = $valoresDB->fetch_object(Materia::class) ){
            array_push($materiasDB, $materia);
        }

        return $materiasDB;
    }

    public static function getById($id){

        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT * FROM materias WHERE id = ?");
        $pre->bind_param("i", $id);
        $pre->execute();
        $valorDB = $pre->get_result();

        $materia = $valorDB->fetch_object(Materia::class);

        return $materia;

    }

    public function delete() {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "DELETE FROM materias WHERE id = ?");
        $pre->bind_param("i", $this->id);
        $pre->execute();
    }

    public function update() {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "UPDATE materias SET nombre = ? WHERE id = ? ");
        $pre->bind_param("si", $this->nombre, $this->id) ;
        $pre->execute();
    }

    public function profesores(){
        $this->conectar();
        $pre = mysqli_prepare($this->con, "SELECT * FROM profesores WHERE materia_id = ?");
        $pre->bind_param("i", $this->id);
        $pre->execute();

        $valoresDB = $pre->get_result();

        $materiasDelProfe = [];
        while ($profesor = $valoresDB->fetch_object(Profesor::class) ){
            array_push($materiasDelProfe, $profesor);
        }

        return $materiasDelProfe;
    } 

    public function alumnos(){
        $this->conectar();
        $pre = mysqli_prepare($this->con, "SELECT alumnos.* FROM alumnos INNER JOIN alumno_materia ON alumnos.id = alumno_materia.alumno_id WHERE alumno_materia.materia_id = ? ");
        $pre->bind_param("i", $this->id);
        $pre->execute();
        $valoresDB = $pre->get_result();

        $alumnos = [];
        while ($alumno = $valoresDB->fetch_object(Alumno::class) ){
            $alumnos[] = $alumno;
        }
        return $alumnos;
    }
}