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

                <form action="" method="post" id="create">
                    <div class="mb-5">
                        <label for="nombre" class="block mb-2 font-bold text-gray-600">Nombre</label>
                        <input type="text" id="nombre" name="nombre" placeholder="Introduzca el nombre"
                            class="border border-gray-300 shadow p-3 w-full rounded">
                        <p id="errorNombre" class="text-sm text-indigo-700 mt-2"></p>
                    </div>

                    <div class="mb-5">
                        <label for="apellido" class="block mb-2 font-bold text-gray-600">Apellido</label>
                        <input type="text" id="apellido" name="apellido" placeholder="Introduzca el apellido"
                            class="border border-gray-300 shadow p-3 w-full rounded">
                        <p id="errorApellido" class="text-sm text-indigo-700 mt-2"></p>
                    </div>

                    <div class="mb-5">
                        <label for="date" class="block mb-2 font-bold text-gray-600">Fecha de
                            nacimiento</label>
                        <input type="date" id="date" name="date" placeholder="01-01-2024"
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

        document.querySelector('form').onsubmit = function(event) {
            // Limpiar el mensaje de error y el estilo del input antes de la validación
            document.getElementById('errorNombre').textContent = '';
            document.getElementById('errorApellido').textContent = '';
            document.getElementById('errorFecha').textContent = '';

            const nombreInput = document.getElementById('nombre');
            const apellidoInput = document.getElementById('apellido');
            const fechaInput = document.getElementById('date');

            nombreInput.classList.remove('border-indigo-500');
            apellidoInput.classList.remove('border-indigo-500');
            fechaInput.classList.remove('border-indigo-500');

            // Validación Nombre
            if (nombreInput.value.length < 2 || nombreInput.value.length > 255) {
                event.preventDefault(); // Evitar el envío del formulario
                if (nombreInput.value.length > 255) {
                    document.getElementById('errorNombre').textContent = 'El nombre tiene más de 255 caracteres.';
                } else {
                    document.getElementById('errorNombre').textContent = 'El nombre tiene menos de 2 caracteres.';
                }
                nombreInput.classList.add('border-indigo-500'); // Añadir clase de error
            }

            // Validación Apellido
            if (apellidoInput.value.length < 2 || apellidoInput.value.length > 255) {
                event.preventDefault(); // Evitar el envío del formulario
                if (apellidoInput.value.length > 255) {
                    document.getElementById('errorApellido').textContent = 'El apellido tiene más de 255 caracteres.';
                } else {
                    document.getElementById('errorApellido').textContent = 'El apellido tiene menos de 2 caracteres.';
                }
                apellidoInput.classList.add('border-indigo-500'); // Añadir clase de error
            }

            const today = new Date();
            const selectedDate = new Date(fechaInput.value);
            const minDate = new Date('1920-01-01')
            if (selectedDate > today) {
                event.preventDefault(); // Evitar el envío del formulario
                document.getElementById('errorFecha').textContent = 'La fecha no puede ser futura.';
                fechaInput.classList.add('border-indigo-500'); // Añadir clase de error
            } else if (selectedDate < minDate) {
                event.preventDefault(); // Evitar el envío del formulario
                document.getElementById('errorFecha').textContent = 'Ingrese una fecha válida.';
                fechaInput.classList.add('border-indigo-500'); // Añadir clase de error
            }

        };
    </script>
</body>

</html>
