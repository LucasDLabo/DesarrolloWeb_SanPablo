<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />

</head>

<body class="min-h-screen flex flex-col">

<header>
        <nav class="border-gray-200 bg-white shadow dark:border-gray-700 dark:bg-gray-900">
            <div class="max-w-screen flex flex-wrap items-center justify-between p-4">
                <a href="../Dashboard/index.php" class="flex items-center space-x-3 rtl:space-x-reverse ">
                    <span
                        class="self-center text-xl font-semibold whitespace-nowrap dark:text-white hover:text-blue-500">
                        Ir a la Vista General
                    </span>
                </a>
                <button data-collapse-toggle="navbar-dropdown" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
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
                                class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">
                                Crear
                                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg></button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbar"
                                class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-2 text-sm text-gray-700"
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
                            </div>
                        </li>
                        <li>
                            <a href="../Papelera/index.php"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Papelera</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <main class="flex-grow">
        <div class="grid grid-cols-6 pt-8 mx-7 items-start justify-items-center h-auto">

            <a href="javascript:history.back()"
                class=" bg-blue-500 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded text-center">
                Volver atrás
            </a>
            <div class="col-start-2 col-end-6 flex w-full flex-col items-center text-center">
                <h2 class="class=text-center text-gray-600 font-bold text-2xl uppercase">Materias del Alumno <?= $alumno->nombre . ' ' . $alumno->apellido ?> </h2>
                <hr class="w-full border-6 border-solid border-indigo-500 my-3">

                <ul class="flex flex-col w-1/4">
                    <?php
        if($alumno->materias()){
            foreach ($alumno->materias() as $materias) {
                ?>
                    <li class="py-1 my-3 bg-indigo-500 font-bold text-white text-xl rounded"> <?= $materias->nombre ?> </li>
                    
                    <?php
                }
        }else{ ?>
        </ul>
                    <p class="col-start-2 col-end-6 text-indigo-500 w-full ">El alumno no cuenta con materias asignadas.</p>
                    <a href="editar.php?id=<?= $alumno->id ?>" class="my-3 rounded bg-emerald-800 px-2 py-2 font-bold text-white hover:bg-emerald-900"><button>Asignar Materias</button></a>
                    <?php
        };
        ?>

                
            </div>
        </div>



    </main>


    <footer>
        <div class="flex text-center justify-center py-3 bg-slate-800">
            <p class="text-gray-600">
            Proyecto Creado por Lucas D Labo - 2024
            <br> 
            Desarrollo Web - Instituto Superior San Pablo 9112.
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

</body>

</html>
