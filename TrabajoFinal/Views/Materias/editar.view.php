<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Materia</title>
</head>

<body class="min-h-screen flex flex-col">
    <header>
        <nav class=" bg-blue-400 flex text-center items-center">
            <div class="flex hover:bg-blue-300">
                <a href="../Index/Index.php" class="py-2 px-3 text-lg font-bold text-white">🏡 Ir a Vista General </a>
            </div>

            <section class=" text-white text-lg"> | </section>
        </nav>
    </header>

    <main class="flex-grow">

    </main>

    <footer>
        <div class=" bg-slate-600">
            Footer
        </div>
    </footer>

    <h1>Ingrese los nuevos datos de la materia✍ - ID(<?= $materia->id ?>)</h1>

    <form action="" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" value="<?= $materia->nombre ?>">
        <br>
        <button type="submit" name="submitEdit2">Actualizar</button>
    </form>
</body>

</html>
