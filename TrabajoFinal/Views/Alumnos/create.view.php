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


    <div class="grid grid-cols-6 items-start py-8 justify-items-center">

        <a href="index.php"
            class="w-3/5  bg-blue-500 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded text-center">
            Volver atrás
        </a>
        <div class="w-full col-start-2 col-end-6">
            <div class= "bg-white px-20 py-8 rounded-lg shadow mx-20 border-solid border-2 border-indigo-500">
                <h2 class="text-center text-gray-600 font-bold text-2xl uppercase">Ingrese los datos del Alumno
                    ✍</h2>
                <hr class="my-5 border-3 border-solid border-indigo-500">

                <form action="" method="post" id="createAlumno" data-form-type="create">

                    <div class="mb-5">
                        <label for="nombre" class="block mb-2 font-bold text-gray-600">Nombre</label>
                        <input type="text" id="nombreCreate" name="nombre" placeholder="Introduzca el nombre"
                            class="border border-gray-300 shadow p-3 w-full rounded">
                        <p id="errorNombre" class="text-sm text-indigo-700 mt-2"></p>
                    </div>

                    <div class="mb-5">
                        <label for="apellido" class="block mb-2 font-bold text-gray-600">Apellido</label>
                        <input type="text" id="apellidoCreate" name="apellido" placeholder="Introduzca el apellido"
                            class="border border-gray-300 shadow p-3 w-full rounded">
                        <p id="errorApellido" class="text-sm text-indigo-700 mt-2"></p>
                    </div>

                    <div class="mb-5">
                        <label for="date" class="block mb-2 font-bold text-gray-600">Fecha de
                            nacimiento</label>
                        <input type="date" id="fechaCreate" name="date" placeholder="01-01-2024"
                            class="border border-gray-300 shadow p-3 w-full rounded">
                        <p id="errorFecha" class="text-sm text-indigo-700 mt-2"></p>
                    </div>

                    <div class="mb-5">

                        <label for="materia" class="block mb-2 font-bold text-gray-600">Asignar Materias</label>
                        <select name="materia[]" id="materia" multiple>
                            <?php foreach ($materias as $materia) {?>
                            <option value="<?= $materia->id ?>"><?= $materia->nombre ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="flex justify-end">
                        <button
                            class="mx-8 w-1/5 bg-gray-200 hover:bg-gray-300 text-black font-bold p-4 rounded-lg">Cancelar</button>

                        <button class=" w-1/4 bg-indigo-500 hover:bg-indigo-700 text-white font-bold p-4 rounded-lg"
                            type="submit" name="submit">Crear</button>
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
        });
    </script>
    <script defer src="createValidaciones.js"></script>

</body>

</html>
