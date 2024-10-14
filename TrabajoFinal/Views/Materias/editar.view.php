<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Materia</title>
</head>
<body>
    <a href="indexMateria.php" style="text-decoration: none; color:black; font-size:17px"><button>Volver atrás ↩️</button></a>

    <h1>Ingrese los nuevos datos de la materia✍ - ID(<?= $materia->id?>)</h1>

    <form action="" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" value="<?= $materia->nombre?>">
        <br>
        <button type="submit" name="submitEdit2">Actualizar</button>
    </form>
</body>
</html>