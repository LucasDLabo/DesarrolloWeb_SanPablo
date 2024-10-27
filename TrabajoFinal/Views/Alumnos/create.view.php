<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Alumno</title>
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.1.0/dist/css/multi-select-tag.css">

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <header>
        <nav class=" bg-blue-400 flex text-center items-center">
            <div class="flex hover:bg-blue-300">
                <a href="../Index/Index.php" class="py-2 px-3 text-lg font-bold text-white">🏡 Ir a Vista General </a>

            </div>
            <section class=" text-white text-lg cursor-default"> | </section>
        </nav>
    </header>

    <a href="index.php">
        <button class=" bg-blue-600 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded">
            Volver atrás
        </button>
    </a>

    <body class=" bg-red-900">
        <div class="flex flex-col bg-lime-400 min-h-screen">
            <div class="bg-gray-300 h-1/4">
                <div class="w-full">
                    <div
                        class="bg-white px-20 py-8 rounded-lg shadow mx-auto w-1/2 border-solid border-2 border-indigo-500">
                        <h2 class="text-center text-gray-600 font-bold text-2xl uppercase">Ingrese los datos del Alumno
                            ✍</h2>
                        <hr class="my-5 border-3 border-solid border-indigo-500">
                        
                        <form action="" method="post">
                            <div class="mb-5">
                                <label for="nombre" class="block mb-2 font-bold text-gray-600">Nombre</label>
                                <input type="text" id="nombre" name="nombre" placeholder="Introduzca el nombre"
                                    class="border border-gray-300 shadow p-3 w-full rounded">
                            </div>

                            <div class="mb-5">
                                <label for="apellido" class="block mb-2 font-bold text-gray-600">Apellido</label>
                                <input type="text" id="apellido" name="apellido"
                                    placeholder="Introduzca el apellido"
                                    class="border border-indigo-700 shadow p-3 w-full rounded ">
                                <p class="text-sm text-indigo-700 mt-2">Twitter username is required</p>
                            </div>

                            <div class="mb-5">
                                <label for="date" class="block mb-2 font-bold text-gray-600">Fecha de
                                    nacimiento</label>
                                <input type="date" id="date" name="date" placeholder="01-01-2024"
                                    class="border border-indigo-700 shadow p-3 w-full rounded ">
                                <p class="text-sm text-indigo-700 mt-2">Twitter username is required</p>
                            </div>

                            <div class="mb-5">
                                <label for="materia" class="block mb-2 font-bold text-gray-600">Materias</label>

                                <select name="materia[]" id="materia" multiple>
                                    <?php foreach ($materias as $materia) {?>
                                    <option value="<?= $materia->id ?>"><?= $materia->nombre ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="flex justify-end">
                                <button
                                    class="mx-8 w-1/5 bg-gray-200 hover:bg-gray-300 text-black font-bold p-4 rounded-lg">Cancelar</button>

                                <button
                                    class=" w-1/4 bg-indigo-500 hover:bg-indigo-700 text-white font-bold p-4 rounded-lg"
                                    type="submit" name="submit">Crear</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </body>

    <footer>
        <div class=" bg-slate-600">
            <p class="text-3xl">Footer</p>
        </div>
    </footer>

    

    <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.1.0/dist/js/multi-select-tag.js"></script>
    <script>
    new MultiSelectTag('materia')  // id
    </script>
</body>

</html>
