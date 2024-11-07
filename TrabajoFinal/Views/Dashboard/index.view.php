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
                <span class="flex items-center space-x-3 rtl:space-x-reverse ">
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white cursor-default">
                        Dashboard
                    </span>
                </span>
                <button data-collapse-toggle="navbar-dropdown" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-dropdown" aria-expanded="false">
                    <span class="sr-only">Abrir menu principal</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>

            </div>
        </nav>

    </header>

    <main class="flex flex-row flex-grow gap-x-4 px-16 justify-between">

        <div class="flex flex-col flex-grow">

            <h2 class="font-bold lg:text-3xl mt-3 text-blue-900">📊 Métricas</h2>
            <hr class="my-3 w-1/6 border-1 rounded">

            <div class="flex border-2 rounded p-5">

                <div class="flex items-center justify-center flex-grow">
                    <div class=" w-auto bg-gray-50 border-solid border-blue-900 border-2 rounded p-3">
                        <canvas id="recuento"></canvas>
                    </div>
                </div>

                <div class="flex flex-grow items-center justify-center uppercase">
                    <a href="../Alumnos/index.php" class="text-white bg-blue-900 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Ver Lista de Datos
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                    </a>

                </div>


                <div class="flex flex-col flex-grow justify-center items-center gap-10">
                    <div
                        class="h-50 w-3/4 bg-gray-50 border-solid border-blue-900 border-2 rounded p-3 flex flex-col items-center">
                        <h3 class=" font-semibold text-gray-500">Materia más estudiada / más asignaciones</h3>
                        <span class="text-4xl text-blue-900"><?= $materiaMasEstudiada->nombre ?></span>
                    </div>

                    <div
                        class="h-50 w-3/4 bg-gray-50 border-solid border-blue-900 border-2 rounded p-3 flex flex-col items-center">
                        <h3 class=" font-semibold text-gray-500">Materia con menos profesores enseñando</h3>
                        <span class="text-4xl text-blue-900"><?= $materiaMenosProfes->nombre ?></span>
                    </div>

                    <div
                        class="h-50 w-3/4 bg-gray-50 border-solid border-blue-900 border-2 rounded p-3 flex flex-col items-center">
                        <h3 class=" font-semibold text-gray-500">Promedio de edad de los Alumnos</h3>
                        <span class="text-4xl text-blue-900"><?= $promEdades ?></span>
                    </div>
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <script>
        const torta = document.getElementById('recuento');
        new Chart(torta, {
            type: 'pie',
            data: {
                labels: ['Alumnos', 'Profesores', 'Materias'],
                datasets: [{
                    label: 'Cantidad',
                    data: [<?= $conteoAlumnos ?>, <?= $conteoProfesores ?>, <?= $conteoMaterias ?>],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Cantidad de Alumnos, Profesores y Materias'
                    },
                    subtitle: {
                        display: true,
                        text: 'Cantidad Total: <?= $totalRegistros ?>'
                    }
                }
            },
        });
    </script>
</body>

</html>
