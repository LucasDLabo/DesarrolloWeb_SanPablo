<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Papelera</title>
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
                            <a href="../Alumnos/index.php"
                                class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-black md:p-0 md:dark:text-blue-500 dark:bg-blue-600 md:dark:bg-transparent">Lista
                                de datos</a>
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
                            <a href="#" aria-current="page"
                                class="cursor-default block py-2 px-3 text-blue-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Papelera</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>

    <main class="flex flex-col flex-grow gap-x-4 px-4">

        <!-- Alumnos -->
        <div class="flex flex-col flex-grow w-full p-5">
            <h2 class="font-bold lg:text-2xl ">Lista de Alumnos eliminados</h2>
            <hr class="my-5 bg-gray-400 rounded h-0.5">
            <?php if($alumnos) {?>
            <div class="">
                <table id="listaAlumnosEliminados"
                    class="stripe table-auto rounded border-2 border-solid border-gray-400 w-full">
                    <thead>
                        <tr>
                            <th class="w-1/12 text-xs">ID</th>
                            <th class="text-xs">Nombre Completo</th>
                            <th class="text-xs">Apellido</th>
                            <th class="text-xs">Fecha nac.</th>
                            <th class="text-xs">Materias</th>
                            <th class=" w-44 text-xs">Acción</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php foreach ($alumnos as $alumno) { ?>

                        <tr>
                            <td class="border text-center"><?= $alumno->id ?></td>
                            <td class="border"><?= $alumno->nombre ?></td>
                            <td class="border"><?= $alumno->apellido ?></td>
                            <td class="border text-center">
                                <?= date('d/m/Y', strtotime($alumno->fecha_nacimiento)) ?></td>
                            <td class="border text-center">
                                <div class=" ">
                                    <a href="../Alumnos/verMaterias.php?id=<?= $alumno->id ?> "
                                        title="Ver Materias de <?= $alumno->nombre . ' ' . $alumno->segundo_nombre . ' ' . $alumno->apellido ?>"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-1 px-4 rounded">Ver
                                        📖</a>
                                </div>
                            </td>
                            <td class="border text-center ">
                                <div class="flex justify-center space-x-2">

                                    <a href="restaurar.php?id=<?= $alumno->id ?>&clase=alumno"
                                        onclick="return restaurar('<?= $alumno->nombre . ' ' . $alumno->segundo_nombre . ' ' . $alumno->apellido ?>')"
                                        title="Restaurar Alumno <?= $alumno->nombre . ' ' . $alumno->segundo_nombre . ' ' . $alumno->apellido ?>"
                                        class=" w-32 rounded bg-teal-600 py-1 text-center font-semibold text-white hover:bg-teal-900">
                                        Restaurar Alumno</a>
                                    <a href="eliminar.php?id=<?= $alumno->id ?>&clase=alumno"
                                        onclick="return confirmar('<?= $alumno->nombre . ' ' . $alumno->segundo_nombre . ' ' . $alumno->apellido ?>')"
                                        title="Eliminar Definitivamente el Alumno <?= $alumno->nombre . ' ' . $alumno->segundo_nombre . ' ' . $alumno->apellido ?>"
                                        class=" w-32 rounded bg-rose-700 py-1 text-center font-semibold text-white hover:bg-rose-900">Borrar
                                        Definitivamente</a>

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
            <div class="flex justify-center">
                <hr class="h-0.5 mt-5 bg-gray-400 rounded w-1/4">
            </div>
            <?php }else { ?>
            <div class="text-gray-400 flex text-center items-center justify-center gap-2 mt-1">
                <p>Aquí no hay nada ... </p>
                <img src="../../assets/img/ghost-svgrepo-com.png" alt="" class="h-auto w-9 translate-y-1">
            </div>
            <div class="flex justify-center items-end my-5">
                <hr class="m-0 h-0.5 bg-gray-400 rounded w-1/4 ">
            </div>
            <?php } ?>
        </div>



        <!-- Profesores -->
        <div class="flex flex-col flex-grow w-full p-5">
            <h2 class="font-bold lg:text-2xl ">Lista de Profesores eliminados</h2>
            <hr class="my-5 bg-gray-400 rounded h-0.5">
            <?php if($profesores) {?>

            <div class="">
                <table id="listaProfesoresEliminados"
                    class="stripe table-auto rounded border-2 border-solid border-gray-400 w-full">
                    <thead>
                        <tr>
                            <th class="w-1/12 text-xs">ID</th>
                            <th class="text-xs">Nombre Completo</th>
                            <th class="text-xs">Apellido</th>
                            <th class="text-xs">Materias</th>
                            <th class=" w-44 text-xs">Acción</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php foreach ($profesores as $profesor) { ?>

                        <tr>
                            <td class="border text-center"><?= $profesor->id ?></td>
                            <td class="border"><?= $profesor->nombre ?></td>
                            <td class="border"><?= $profesor->apellido ?></td>
                            <td class="border text-center">
                                <?= $profesor->materia()->nombre ?>
                            </td>
                            <td class="border text-center ">
                                <div class="flex justify-center space-x-2">

                                    <a href="restaurar.php?id=<?= $profesor->id ?>&clase=profesor"
                                        onclick="return confirmar('<?= $profesor->nombre . ' ' . $profesor->segundo_nombre . ' ' . $profesor->apellido ?>')"
                                        title="Restaurar Alumno <?= $profesor->nombre . ' ' . $profesor->segundo_nombre . ' ' . $profesor->apellido ?>"
                                        class=" w-32 rounded bg-teal-600 py-1 text-center font-semibold text-white hover:bg-teal-900">
                                        Restaurar Profesor</a>
                                    <a href="eliminar.php?id=<?= $profesor->id ?>&clase=profesor"
                                        onclick="return confirmar('<?= $profesor->nombre . ' ' . $profesor->segundo_nombre . ' ' . $profesor->apellido ?>')"
                                        title="Eliminar Alumno <?= $profesor->nombre . ' ' . $profesor->segundo_nombre . ' ' . $profesor->apellido ?>"
                                        class=" w-32 rounded bg-rose-700 py-1 text-center font-semibold text-white hover:bg-rose-900">Borrar
                                        Definitivamente</a>

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
                            <th class="text-xs">Materias</th>
                            <th class="text-xs">Acción</th>
                        </tr>
                    </tfoot>
                </table>

            </div>

            <div class="flex justify-center">
                <hr class="h-0.5 bg-gray-400 rounded w-1/4">
            </div>

            <?php }else { ?>
            <div class="text-gray-400 flex text-center items-center justify-center gap-2 mt-1">
                <p>Aquí no hay nada ... </p>
                <img src="../../assets/img/ghost-svgrepo-com.png" alt="" class="h-auto w-9 translate-y-1">
            </div>
            <div class="flex justify-center items-end my-5">
                <hr class="m-0 h-0.5 bg-gray-400 rounded w-1/4 ">
            </div>
            <?php } ?>
        </div>

        <!-- Materias -->
        <div class="flex flex-col flex-grow w-full p-5">
            <h2 class="font-bold lg:text-2xl ">Lista de Materias eliminadas</h2>
            <hr class="my-5 bg-gray-400 rounded h-0.5">
            <?php if($materias) {?>

            <div class="">
                <table id="listaMateriasEliminados"
                    class="stripe table-auto rounded border-2 border-solid border-gray-400 w-full">
                    <thead>
                        <tr>
                            <th class="w-1/12 text-xs">ID</th>
                            <th class="text-xs">Nombre de la materia</th>
                            <th class=" w-44 text-xs">Acción</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php foreach ($materias as $materia) { ?>

                        <tr>
                            <td class="border text-center"><?= $materia->id ?></td>
                            <td class="border text-center"><?= $materia->nombre ?></td>
                            <td class="border text-center ">
                                <div class="flex justify-center space-x-2">

                                    <a href="restaurar.php?id=<?= $materia->id ?>&clase=materia"
                                        onclick="return confirmar('<?= $materia->nombre ?>')"
                                        title="Restaurar Alumno <?= $materia->nombre ?>"
                                        class=" w-32 rounded bg-teal-600 py-1 text-center font-semibold text-white hover:bg-teal-900">
                                        Restaurar Materia</a>
                                    <a href="eliminar.php?id=<?= $materia->id ?>&clase=materia"
                                        onclick="return confirmar('<?= $materia->nombre ?>')"
                                        title="Eliminar Alumno <?= $materia->nombre ?>"
                                        class=" w-32 rounded bg-rose-700 py-1 text-center font-semibold text-white hover:bg-rose-900">Borrar
                                        Definitivamente</a>

                                </div>
                            </td>
                        </tr>

                        <?php } ?>

                    </tbody>

                    <tfoot>
                        <tr>
                            <th class="text-xs">ID</th>
                            <th class="text-xs">Nombre de la Materia</th>
                            <th class="text-xs">Acción</th>
                        </tr>
                    </tfoot>
                </table>

            </div>

            <?php }else { ?>
            <div class="text-gray-400 flex text-center items-center justify-center gap-2 mt-1">
                <p>Aquí no hay nada ... </p>
                <img src="../../assets/img/ghost-svgrepo-com.png" alt="" class="h-auto w-9 translate-y-1">
            </div>
            <div class="flex justify-center items-end my-5">
                <hr class="m-0 h-0.5 bg-gray-400 rounded w-1/4 ">
            </div>
            <?php } ?>
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
            $('#listaAlumnosEliminados').DataTable({
                // Add any customization options here
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.5/i18n/es-ES.json'
                },
                pagingType: 'full_numbers',
            });
        });

        $(document).ready(function() {
            $('#listaProfesoresEliminados').DataTable({
                // Add any customization options here
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.5/i18n/es-ES.json'
                },
                pagingType: 'full_numbers',
            });
        });

        $(document).ready(function() {
            $('#listaMateriasEliminados').DataTable({
                // Add any customization options here
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.5/i18n/es-ES.json'
                },
                pagingType: 'full_numbers',
            });
        });

        function confirmar(nombre) {
            return confirm("⚠️ Atención ⚠️ \n¿Estás seguro de que deseas eliminar el registro de " + nombre +
                "? \nEstá acción no se puede deshacer.");
        }

        function restaurar(nombre) {
            return confirm("✅ Confirmación ✅ \n¿Estás seguro de que deseas restaurar el registro " + nombre + "?.");
        }
    </script>
</body>

</html>
