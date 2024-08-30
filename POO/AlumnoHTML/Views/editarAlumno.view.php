<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Alumno</title>
</head>
<body>
    <button>
        <a href="indexAlumno.php" style="text-decoration: none; color:black; font-size:17px">Volver atras ↩</a>
    </button>

    <h1>Ingrese los nuevos datos del alumno✍ - ID(<?= $alumno->id?>)</h1>

    <form action="" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" value="<?= $alumno->nombre?>">
        <br>
        <label for="apellido">Apelido</label>
        <input type="text" name="apellido" id="apellido" value="<?= $alumno->apellido?>">
        <br>
        <label for="date">Fecha de nacimiento</label>
        <input type="date" name="date" id="date" value="<?= $alumno->fecha_nacimiento?>">
        <br>
        <button type="submit" name="submitEdit">Actualizar</button>
    </form>
</body>
</html>