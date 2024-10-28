<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Alumno</title>

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
                        <?= $alumno->nombre . ' ' . $alumno->apellido ?>
                    </span>
                </h2>

                <hr class="my-5 border-3 border-solid border-indigo-500">

                <form action="" method="post" id="editAlumno" data-form-type="edit">

                    <div class="mb-5">
                        <label for="nombre" class="block mb-2 font-bold text-gray-600">Nombre</label>
                        <input type="text" id="nombreEdit" name="nombre" value="<?= $alumno->nombre ?>"
                            class="border border-gray-300 shadow p-3 w-full rounded">
                        <p id="errorNombreE" class="text-sm text-indigo-700 mt-2"></p>
                    </div>

                    <div class="mb-5">
                        <label for="apellido" class="block mb-2 font-bold text-gray-600">Apellido</label>
                        <input type="text" id="apellidoEdit" name="apellido" value="<?= $alumno->apellido ?>"
                            class="border border-gray-300 shadow p-3 w-full rounded ">
                        <p id="errorApellidoE" class="text-sm text-indigo-700 mt-2"></p>
                    </div>

                    <div class="mb-5">
                        <label for="fecha" class="block mb-2 font-bold text-gray-600">Fecha de
                            nacimiento</label>
                        <input type="date" id="fechaEdit" name="fecha" value="<?= $alumno->fecha_nacimiento ?>"
                            class="border border-gray-300 shadow p-3 w-full rounded ">
                        <p id="errorFechaE" class="text-sm text-indigo-700 mt-2"></p>
                    </div>

                    <div class="mb-5">
                        <?php
                        $alumnoMaterias = $alumno->materias();
                        
                        $idMaterias = array_map(function ($materia) {
                            return $materia->id;
                        }, $alumnoMaterias);
                        ?>

                        <label for="materia" class="block mb-2 font-bold text-gray-600">
                            Editar Materias Asignadas
                        </label>
                        <select name="materia[]" id="materia" multiple>
                            <?php 
                            foreach ($materias as $materia) {?>
                            <option value="<?= $materia->id ?>"
                                <?= in_array($materia->id, $idMaterias) ? 'selected' : '' ?>><?= $materia->nombre ?>
                            </option>
                            <?php } ?>
                        </select>
                        <?= $idMaterias == null ? '<p class="text-sm text-indigo-700 mt-2">El alumno no cuenta con materias asignadas.</p>' : '' ?>
                    </div>

                    <div class="flex justify-end">
                        <button class="mx-8 bg-gray-200 hover:bg-gray-300 text-black font-bold p-4 rounded-lg">
                            Cancelar
                        </button>


                        <button class=" w-28 bg-indigo-500 hover:bg-indigo-700 text-white font-bold p-4 rounded-lg"
                            type="submit" id="submitEdit" name="submitEdit">Guardar
                        </button>

                    </div>
                </form>

            </div>
        </div>

    </div>


    <footer>
        <div class=" bg-slate-600">
            <p class="text-3xl">Footer</p>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.1.0/dist/js/multi-select-tag.js"></script>
    <script>
        new MultiSelectTag('materia', {
            rounded: true, // default true
            shadow: true, // default false
            placeholder: 'Seleccione una materia', // default Search...
            tagColor: {
                textColor: '#327b2c',
                borderColor: '#92e681',
                bgColor: '#eaffe6',
            }
        })
    </script>
    <script defer src="validaciones.js"></script>
</body>

</html>
