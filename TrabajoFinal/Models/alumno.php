<?php

require_once 'conexion.php';
require_once 'materia.php';


class Alumno extends Conexion {

    public $id, $nombre, $segundo_nombre, $apellido, $fecha_nacimiento, $papelera, $borrado;

    public function create() {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "INSERT INTO alumnos (nombre, segundo_nombre, apellido, fecha_nacimiento) VALUES (?, ?, ?, ?)");
        $pre->bind_param("ssss", $this->nombre, $this->segundo_nombre, $this->apellido, $this->fecha_nacimiento);
        $pre->execute();

        return $this->con->insert_id;
    }

    public static function all() {
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT * FROM alumnos WHERE papelera IS NULL AND borrado IS NULL");
        $pre->execute();
        $valoresDB = $pre->get_result();

        $alumnos = [];
        while ($alumno = $valoresDB->fetch_object(Alumno::class) ){
            array_push($alumnos, $alumno);
        }

        return $alumnos;
    }

    public static function allDelete() {
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT * FROM alumnos WHERE papelera = 1 AND borrado IS NULL");
        $pre->execute();
        $valoresDB = $pre->get_result();

        $alumnos = [];
        while ($alumno = $valoresDB->fetch_object(Alumno::class) ){
            array_push($alumnos, $alumno);
        }

        return $alumnos;
    }


    public static function getById($id){

        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT * FROM alumnos WHERE id = ?");
        $pre->bind_param("i", $id);
        $pre->execute();
        $valorDB = $pre->get_result();

        $alumno = $valorDB->fetch_object(Alumno::class);

        return $alumno;

    }

    public function softdelete() {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "UPDATE alumnos SET papelera = 1 WHERE id = ?");
        $pre->bind_param("i", $this->id);
        $pre->execute();
    }

    public function restaurar() {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "UPDATE alumnos SET papelera = NULL WHERE id = ?");
        $pre->bind_param("i", $this->id);
        $pre->execute();
    }

    public function delete() {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "UPDATE alumnos SET borrado = 1 WHERE id = ?");
        $pre->bind_param("i", $this->id);
        $pre->execute();
    }

    public function update() {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "UPDATE alumnos SET nombre = ?, apellido = ?, fecha_nacimiento = ? WHERE id = ? ");
        $pre->bind_param("sssi", $this->nombre, $this->apellido, $this->fecha_nacimiento, $this->id) ;
        $pre->execute();
    }

    public function insertar_materias($alumno_id, $materia_id){
        $this->conectar();
        $pre = mysqli_prepare($this->con, "INSERT INTO alumno_materia (alumno_id, materia_id) VALUES (?, ?)");
        $pre->bind_param("ii", $alumno_id, $materia_id);
        $pre->execute();

    }

    public function delete_materias($alumno_id){
        $this->conectar();
        $pre = mysqli_prepare($this->con, "DELETE FROM alumno_materia WHERE alumno_id = ?");
        $pre->bind_param("i", $alumno_id);
        $pre->execute();
    }

    public function materias(){
        $this->conectar();
        $pre = mysqli_prepare($this->con, "SELECT materias.* FROM materias INNER JOIN alumno_materia ON materias.id = alumno_materia.materia_id WHERE alumno_materia.alumno_id = ? ");
        $pre->bind_param("i", $this->id);
        $pre->execute();
        $valoresDB = $pre->get_result();

        $materias = [];
        while ($materia = $valoresDB->fetch_object(Materia::class) ){
            $materias[] = $materia;
        }
        
        return $materias;
    }


    public static function conteo() {
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT COUNT(id) as Recuento FROM `alumnos`");
        $pre->execute();
        $valoresDB = $pre->get_result();
        $alumno = $valoresDB->fetch_assoc();
        return $alumno['Recuento'];

    }

    public static function materiaEstudiada() {
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT materia_id,COUNT(alumno_id) AS 'total' FROM `alumno_materia` GROUP BY materia_id ORDER BY total DESC LIMIT 1");
        $pre->execute();
        $valoresDB = $pre->get_result();
        $materiaMasEstudiada = $valoresDB->fetch_assoc();

        return $materiaMasEstudiada['materia_id'];

    }

}
