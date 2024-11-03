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
        <nav class="bg-white border-gray-200 dark:bg-gray-900 dark:border-gray-700 shadow">
            <div class="max-w-screen flex flex-wrap items-center justify-between  p-4">
                <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse ">
                    <!-- <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" /> -->
                    <span
                        class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white hover:text-blue-500">Ir
                        a la Vista
                        General </span>
                </a>
                <button data-collapse-toggle="navbar-dropdown" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-dropdown" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
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
                                aria-current="page">Lista de usuarios</a>
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
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Nuevo
                                            Alumno</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Nuevo
                                            Profesor</a>
                                    </li>
                                    <li>
                                        <a href=""
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Nueva
                                            Materia</a>
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

    <main class="flex flex-grow gap-x-4 px-4">

        <div class="flex flex-col flex-grow m-5 justify-center">

            <div class="flex flex-row flex-grow justify-center ">

                <div class="flex flex-col w-1/6 content-center items-center gap-4 pt-16 text-center font-medium text-gray-500 shadow-[1px_0_0px_rgba(0,0,0,0.2)] mr-3">

                    <a href="#" class=" px-4 py-3 text-white bg-blue-700 rounded-lg active w-3/5 dark:bg-blue-600"
                        aria-current="page">
                        Alumnos
                    </a>


                    <a href="#"
                        class="px-4 py-3 rounded-lg hover:text-gray-900 bg-gray-100 hover:bg-gray-100 w-3/5 ">
                        Profesores
                    </a>


                    <a href="../Materias/index.php"
                        class="px-4 py-3 rounded-lg hover:text-gray-900 bg-gray-100 hover:bg-gray-100 w-3/5">
                        Materias
                    </a>

                </div>

                <div name="datatable" class="w-full px-5">

                    <div class="flex flex-row gap-10">
                        <h1 class="mb-4 font-bold lg:text-3xl ">Lista de Alumnos 👩‍🎓</h1>

                        <a href="crear.php">
                            <button
                                class="rounded bg-emerald-800  px-4 py-2 font-bold text-white shadow-[0px_6px_0px_0px_#1a380c] hover:bg-emerald-900 active:translate-y-[2px] active:shadow-[0px_3px_0px_0px_#1a380c]">
                                Crear Alumno
                            </button>
                        </a>

                    </div>

                    <hr class="mb-4 mt-2">
                    <table id="listaAlumno"
                        class=" table-auto w-full border-solid border-2 border-gray-400 rounded stripe">

                        <thead>
                            <tr>
                                <th class=" text-xs ">ID</th>
                                <th class=" text-xs ">Nombre</th>
                                <th class=" text-xs ">Apellido</th>
                                <th class=" text-xs ">Fecha nac.</th>
                                <th class=" text-xs ">Materias</th>
                                <th class=" text-xs ">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($alumnos as $alumno) { ?>
                            <tr>
                                <td class="border text-center h-6"><?= $alumno->id ?></td>
                                <td class="border h-6"><?= $alumno->nombre ?></td>
                                <td class="border h-6"><?= $alumno->apellido ?></td>
                                <td class="border h-6"><?= date('d/m/Y', strtotime($alumno->fecha_nacimiento)) ?></td>
                                <td class="border text-center h-6">
                                    <div class=" ">
                                        <a href="verMaterias.php?id=<?= $alumno->id ?> "
                                            title="Ver Materias de <?= $alumno->nombre . ' ' . $alumno->apellido ?>"
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-1 px-4 rounded">Ver
                                            📖</a>
                                    </div>
                                </td>
                                <td class="border py-2 text-center h-6">
                                    <div>

                                        <a href="editar.php?id=<?= $alumno->id ?>"
                                            title="Editar Alumno <?= $alumno->nombre . ' ' . $alumno->apellido ?>"
                                            class="bg-teal-600 hover:bg-teal-900 text-white text-center font-semibold py-1 px-4 mx-2 rounded">
                                            ✍Editar
                                        </a>
                                        <a href="eliminar.php?id=<?= $alumno->id ?>"
                                            onclick="return confirmar('<?= $alumno->nombre . ' ' . $alumno->apellido ?>')"
                                            title="Eliminar Alumno <?= $alumno->nombre . ' ' . $alumno->apellido ?>"
                                            class="bg-rose-700 hover:bg-rose-900 text-white text-center font-semibold py-1 px-4 mx-2 rounded">Eliminar❌
                                        </a>

                                    </div>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th class=" text-xs ">ID</th>
                                <th class=" text-xs ">Nombre</th>
                                <th class=" text-xs ">Apellido</th>
                                <th class=" text-xs ">Fecha nac.</th>
                                <th class=" text-xs ">Materias</th>
                                <th class=" text-xs ">Acción</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>

            </div>

        </div>

    </main>

    <footer>
        <div class=" bg-slate-600">
            Footer
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
            });
        });

        function confirmar(nombre) {
            return confirm("⚠️ Atención ⚠️ \n ¿Estás seguro de que deseas eliminar al alumno " + nombre +
                "? \n Está acción no se puede deshacer.");
        }
    </script>

</body>

</html>
