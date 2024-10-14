<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Profesor</title>
</head>
<body>
    <a href="indexProfesor.php" style="text-decoration: none; color:black; font-size:17px"><button>Volver atrás ↩️</button></a>

    <h1>Ingrese los nuevos datos del profesor✍ - ID(<?= $profesor->id?>)</h1>

    <form action="" method="post">
        <label for="nombreProfesor">Nombre del profesor</label>
        <input type="text" name="nombreProfesor" id="nombreProfesor" value="<?= $profesor->nombre?>">
        <br>
        <label for="apellidoProfesor">Apellido del profesor</label>
        <input type="text" name="apellidoProfesor" id="apellidoProfesor" value="<?= $profesor->apellido?>">
        <br>
        <label for="materiaProfesor">Materias que enseña</label>
        <input type="text" name="materiaProfesor" id="materiaProfesor" value="<?= $profesor->materia_id?>">
        <br>
        <button type="submit" name="submitEdit3">Actualizar</button>
    </form>
</body>
</html>