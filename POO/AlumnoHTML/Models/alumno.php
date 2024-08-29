
<?php

require_once 'conexion.php';

class Alumno extends Conexion {

    public $id, $nombre, $apellido, $fecha_nacimiento;

    public function create() {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "INSERT INTO alumnos (nombre, apellido, fecha_nacimiento) VALUES (?, ?, ?)");
        $pre->bind_param("sss", $this->nombre, $this->apellido, $this->fecha_nacimiento);
        $pre->execute();
    }

    public static function all() {
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT * FROM alumnos");
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

    public function delete() {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "DELETE FROM alumnos WHERE id = ?");
        $pre->bind_param("i", $this->id);
        $pre->execute();
    }
}
