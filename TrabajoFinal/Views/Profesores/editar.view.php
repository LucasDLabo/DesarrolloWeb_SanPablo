<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Profesor</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />

    <script defer src="editarValidaciones.js"></script>
</head>

<body class="min-h-screen flex flex-col">
    <header>
        <nav class="border-gray-200 bg-white shadow dark:border-gray-700 dark:bg-gray-900">
            <div class="max-w-screen flex flex-wrap items-center justify-between p-4">
                <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse ">
                    <!-- <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" /> -->
                    <span
                        class="self-center text-xl font-semibold whitespace-nowrap dark:text-white hover:text-blue-500">
                        Ir a la Vista General
                    </span>
                </a>
                <button data-collapse-toggle="navbar-dropdown" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-dropdown" aria-expanded="false">
                    <span class="sr-only">Abrir menu principal</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
                    <ul
                        class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="../Alumnos/index.php"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                                Lista de datos
                            </a>
                        </li>
                        <li>
                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                                class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-blue-500 md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent"
                                >
                                Crear
                                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg></button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbar"
                                class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-400"
                                    aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="../Alumnos/crear.php"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                            Nuevo Alumno
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../Profesores/crear.php"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                            Nuevo Profesor
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../Materias/crear.php"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                            Nueva Materia
                                        </a>
                                    </li>
                                </ul>
                                <div class="py-1">
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                                        out</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Papelera</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pricing</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="flex-grow">
        <div class="grid grid-cols-6 items-start justify-items-center py-8">

            <a href="javascript:history.back()"
                class="w-3/5  bg-blue-500 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded text-center">
                Volver atrás
            </a>

            <div class="w-full col-start-2 col-end-6">
                <div class= "bg-white px-20 py-8 rounded-lg mx-20 ">
                    <h2 class="text-center text-blue-900 font-bold text-2xl uppercase">datos del Profesor: <?= $profesor->nombre . " " . $profesor->segundo_nombre . " " . $profesor->apellido?>
                    </h2>
                    <hr class="my-5 border-3 border-solid border-blue-900">

                    <form action="" method="post" id="createProfesor">

                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="relative z-0 w-full mb-3 group">

                                <input type="text" name="nombre" id="nombre"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-900 peer"
                                    placeholder=" "
                                    value="<?= $profesor->nombre?>" />

                                <label for="nombre"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-900 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                    * Primer Nombre
                                </label>
                                <p id="errorNombre" class="text-xs h-5 text-blue-700 mt-2"></p>

                            </div>

                            <div class="relative z-0 w-full mb-3 group">
                                <input type="text" name="segundo_nombre"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-900 peer"
                                    placeholder=" "
                                    value="<?= $profesor->segundo_nombre?>" />
                                <label for="segundo_nombre"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-900 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Segundo Nombre
                                </label>
                            </div>
                        </div>

                        <div class="relative z-0 w-full mb-1 group">
                            <input type="text" name="apellido" id="apellido"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-900 peer"
                                placeholder=" "
                                value="<?= $profesor->apellido?>" />
                            <label for="apellido"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-900 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                * Apellido
                            </label>
                            <p id="errorApellidoE" class="text-xs h-5 text-blue-700 mt-2"></p>
                        </div>


                        <div class="relative z-0 w-full mb-1 group">
                            <label for="materia" class="text-gray-500 text-sm">* Materia</label>
                            <select id="materia" name="materia"
                                class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                                <option hidden value="">Selecciona la materia del profesor</option>
                                <?php foreach ($materias as $materia) {?>
                                    <option value="<?=$materia->id?>" <?= $profesor->materia_id == $materia->id ? 'selected' : '' ?> ><?=$materia->nombre?></option>
                                    <?php } ?>
                            </select>
                            <p id="errorApellidoE" class="text-xs h-5 text-blue-700 mt-2"></p>

                        </div>

                        <div class="flex justify-end">
                            <button type="button" onclick="clean()"
                                class="mx-8 w-20 border border-solid hover:text-black text-gray-700 font-bold py-2">Cancelar</button>

                            <button
                                class=" w-24 text-gray-100 bg-blue-900 hover:text-white hover:bg-blue-800 font-bold py-2 rounded-lg"
                                type="submit" id="submitCreate" name="submitCreate">Crear</button>
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

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <script>
        const formulario = document.getElementById('createProfesor');

        function clean() {
            formulario.reset();
            cleanErrores();
        }
    </script>
</body>

</html>
