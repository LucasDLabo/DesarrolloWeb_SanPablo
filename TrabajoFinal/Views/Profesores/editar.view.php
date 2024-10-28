<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Profesor</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="editarValidaciones.js"></script>
</head>

<body class="min-h-screen flex flex-col">
    <header>
        <nav class=" bg-blue-400 flex text-center items-center">
            <div class="flex hover:bg-blue-300">
                <a href="../Index/Index.php" class="py-2 px-3 text-lg font-bold text-white">🏡 Ir a Vista General </a>

            </div>
            <section class=" text-white text-lg cursor-default"> | </section>
        </nav>
    </header>

    <main class="flex-grow">
        <div class="grid grid-cols-6 items-start py-8 justify-items-center">

            <a href="index.php"
                class="w-3/5  bg-blue-500 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded text-center">
                Volver atrás
            </a>
            <div class="w-full col-start-2 col-end-6">

                <div class="bg-white px-20 py-8 rounded-lg mx-20 border-solid border-2 border-indigo-500">

                    <h2 class="text-center text-gray-600 font-bold text-2xl uppercase">
                        Datos de
                        <span class="font-extrabold text-indigo-500 uppercase">
                            <?= $profesor->nombre . ' ' . $profesor->apellido ?>
                        </span>
                    </h2>

                    <hr class="my-5 border-3 border-solid border-indigo-500">

                    <form action="" method="post" id="editProfesor">

                        <div class=" mb-3">
                            <label for="nombre" class="block mb-2 font-bold text-gray-600">Nombre</label>
                            <input type="text" id="nombreEditProfesor" name="nombre"
                                value="<?= $profesor->nombre ?>"
                                class="border border-gray-300 shadow p-3 w-full rounded">
                            <p id="errorNombreE" class="mt-2 h-5 text-sm text-indigo-700"></p>
                        </div>

                        <div class=" mb-3">
                            <label for="apellido" class="block mb-2 font-bold text-gray-600">Apellido</label>
                            <input type="text" id="apellidoEditProfesor" name="apellido"
                                value="<?= $profesor->apellido ?>"
                                class="border border-gray-300 shadow p-3 w-full rounded ">
                            <p id="errorApellidoE" class="mt-2 h-5 text-sm text-indigo-700"></p>
                        </div>

                        <div class=" mb-3">
                            <label for="materiaID" class="mb-2 block font-bold text-gray-600">Materia</label>
                            <select name="materiaID" id="materiaEditProfesor"
                                class="w-full rounded border border-gray-300 p-3 shadow">
                                <?php foreach ($materias as $materia) {  ?>

                                <option value="<?= $materia->id ?>"
                                    <?= $profesor->materia_id == $materia->id ? 'selected' : '' ?>>
                                    <?= $materia->nombre ?>
                                </option>

                                <?php } ?>
                            </select>
                            <p class="mt-2 h-5 text-sm text-indigo-700"></p>
                        </div>

                        <div class="flex justify-end">
                            <button class="mx-8 rounded-lg bg-gray-200 p-4 font-bold text-black hover:bg-gray-300">
                                Cancelar
                            </button>

                            <button class="w-28 rounded-lg bg-indigo-500 p-4 font-bold text-white hover:bg-indigo-700"
                                type="submit" id="submitEditProfesor" name="submitEdit">Guardar
                            </button>

                        </div>
                    </form>

                </div>
            </div>

        </div>
    </main>

    <footer>
        <div class=" bg-slate-600">
            <p class="text-3xl">Footer</p>
        </div>
    </footer>

</body>

</html>
