
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
}
