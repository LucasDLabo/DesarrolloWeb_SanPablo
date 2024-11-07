<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>👨‍🎓 Alumnos </title>

    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Incluye DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.tailwindcss.css">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
</head>


<body class="min-h-screen flex flex-col">

    <header>
        <nav class="border-gray-200 bg-white shadow dark:border-gray-700 dark:bg-gray-900">
            <div class="max-w-screen flex flex-wrap items-center justify-between  p-4">
                <a href="../Dashboard/index.php" class="flex items-center space-x-3 rtl:space-x-reverse ">
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
                            <a href="#"
                                class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500 dark:bg-blue-600 md:dark:bg-transparent"
                                aria-current="page">Lista de datos</a>
                        </li>
                        <li>
                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                                class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Crear
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

    <main class="flex flex-grow gap-x-4 px-4">

        <div class="m-5 flex flex-grow flex-col">

            <div class="flex w-auto flex-grow">
                <div
                    class="mr-3 flex w-1/6 flex-col content-center items-center text-center font-medium text-gray-500 shadow-[1px_0_0px_rgba(0,0,0,0.2)]">
                    <h2 class="pt-3">Índice</h2>
                    <hr class="mb-4 mt-3 w-8/12">
                    <span class="flex w-full flex-col items-center gap-4">
                        <a href="#"
                            class="active w-3/5 rounded-lg bg-blue-700 px-4 py-3 text-white dark:bg-blue-600"
                            aria-current="page">
                            Alumnos
                        </a>

                        <a href="../Profesores/index.php"
                            class="w-3/5 rounded-lg bg-gray-100 px-4 py-3 hover:bg-gray-100 hover:text-gray-900">
                            Profesores
                        </a>

                        <a href="../Materias/index.php"
                            class="px-4 w-3/5 rounded-lg bg-gray-100 py-3 hover:bg-gray-100 hover:text-gray-900">
                            Materias
                        </a>
                    </span>
                </div>

                <div name="datatable" class="w-full px-5">
                    <div class="flex flex-row items-end justify-between">
                        <h1 class="font-bold lg:text-3xl ">👩‍🎓 Lista de Alumnos </h1>
                        <a href="crear.php">
                            <button
                                class="-translate-y-1 justify-end rounded bg-emerald-800 px-3 py-2 text-sm font-bold text-white shadow-[0px_6px_0px_0px_#1a380c] hover:bg-emerald-900 active:translate-y-[2px] active:shadow-[0px_3px_0px_0px_#1a380c]">
                                Crear Alumno
                            </button>
                        </a>
                    </div>
                    <hr class="my-3">
                    <table id="listaAlumno" class="stripe table-auto rounded border-2 border-solid border-gray-400">

                        <thead>
                            <tr>
                                <th class="w-1/12 text-xs">ID</th>
                                <th class=" text-xs">Nombre Completo</th>
                                <th class=" text-xs">Apellido</th>
                                <th class=" text-xs">Fecha nac.</th>
                                <th class=" text-xs">Materias</th>
                                <th class=" w-44 text-xs">Acción</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php foreach ($alumnos as $alumno) { ?>

                            <tr>
                                <td class="border text-center"><?= $alumno->id ?></td>
                                <td class="border"><?= $alumno->nombre . " " . $alumno->segundo_nombre?></td>
                                <td class="border"><?= $alumno->apellido ?></td>
                                <td class="border text-center">
                                    <?= date('d/m/Y', strtotime($alumno->fecha_nacimiento)) ?></td>
                                <td class="border text-center">
                                    <div class=" ">
                                        <a href="verMaterias.php?id=<?= $alumno->id ?> "
                                            title="Ver Materias de <?= $alumno->nombre . ' ' . $alumno->apellido ?>"
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-1 px-4 rounded">Ver
                                            📖</a>
                                    </div>
                                </td>
                                <td class="border text-center ">
                                    <div class="flex justify-center space-x-2">

                                        <a href="editar.php?id=<?= $alumno->id ?>"
                                            title="Editar Alumno <?= $alumno->nombre . ' ' . $alumno->apellido ?>"
                                            class="w-20 rounded bg-teal-600 py-1 text-center font-semibold text-white hover:bg-teal-900">
                                            Editar</a>
                                        <a href="eliminar.php?id=<?= $alumno->id ?>"
                                            onclick="return confirmar('<?= $alumno->nombre . ' '. $alumno->segundo_nombre . ' ' . $alumno->apellido ?>')"
                                            title="Eliminar Alumno <?= $alumno->nombre . ' ' . $alumno->apellido ?>"
                                            class="w-20 rounded bg-rose-700 py-1 text-center font-semibold text-white hover:bg-rose-900">Eliminar</a>

                                    </div>
                                </td>
                            </tr>

                            <?php } ?>

                        </tbody>

                        <tfoot>
                            <tr>
                                <th class="text-xs">ID</th>
                                <th class="text-xs">Nombre Completo</th>
                                <th class="text-xs">Apellido</th>
                                <th class="text-xs">Fecha nac.</th>
                                <th class="text-xs">Materias</th>
                                <th class="text-xs">Acción</th>
                            </tr>
                        </tfoot>

                    </table>
                </div>
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

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>


    <script>
        $(document).ready(function() {
            $('#listaAlumno').DataTable({
                // Add any customization options here
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.5/i18n/es-ES.json'
                },
                pagingType: 'full_numbers',

            });
        });

        function confirmar(nombre) {
            return confirm("⚠️ Atención ⚠️ \n¿Estás seguro de que deseas eliminar al alumno " + nombre +
                "? \nEl alumno será enviado a la papelera .");
        }
    </script>

</body>

</html>
