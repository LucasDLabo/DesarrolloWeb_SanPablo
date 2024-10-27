<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>📚 Materias</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Incluye DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.tailwindcss.css">
</head>
<header>
<nav class=" bg-blue-400 flex text-center items-center">
        <div class="flex hover:bg-blue-300">
            <a href="../Index/Index.php" class="py-2 px-3 text-lg font-bold text-white">🏡 Ir a Vista General </a>

        </div>
        <section class=" text-white text-lg"> | </section>
    </nav>
</header>

<body>
    <div class="container mx-full w-12/12">

        <div class="flex gap-x-4">
            <div class="w-1/6 flex flex-col bg-indigo-200 justify-center items-center shadow-[inset_-5px_7px_8px_0px_rgba(0,0,0,0.3)]">

                <div class="flex flex-col gap-5 w-full items-center">
                    <a href="../Alumnos/index.php"
                        class="h-8 text-black w-4/5 text-center py-1 font-semibold hover:bg-indigo-50 hover:rounded-md">
                        Alumnos👩‍🎓
                    </a>
                    <a href="../Profesores/index.php"
                        class="h-8 text-black w-4/5 text-center py-1 font-semibold hover:bg-indigo-50 hover:rounded-md">
                        Profesores 👨‍🏫
                    </a>
                    <span class="bg-indigo-500 rounded-md text-white w-4/5 text-center py-1 font-semibold shadow-[5px_4px_0px_0px_#000047] cursor-default ">
                        Materias 📚
                    </span>
                </div>
            </div>

            <div class="flex-grow my-12">
                <div class="mb-5">
                    <h1 class="text-3xl font-bold mb-4">Lista de Materias📚 </h1>

                    <a href="create.php"
                        class=" bg-emerald-800 hover:bg-emerald-900 text-white font-bold py-2 px-4 rounded">
                        Crear Materia
                    </a>
                </div>
                <table id="listaMaterias"
                    class="table-auto w-full border-solid border-2 border-gray-400 rounded stripe">

                    <thead>
                        <tr>
                            <th class=" w-1/12 text-xs ">ID</th>
                            <th class=" w-3/12 text-xs ">Nombre</th>
                            <th class=" w-4/12 text-xs ">Información</th>
                            <th class=" w-4/12 text-xs ">Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($materiasDB as $materias) { ?>
                        <tr>
                            <td class="border text-center h-6"><?= $materias->id ?></td>
                            <td class="border h-6"><?= $materias->nombre ?></td>
                            <td class="border h-6">Aca va mas info</td>
                            <td class="border py-2 text-center h-6">
                                <div>

                                    <a href="editar.php?id=<?= $materias->id ?>"
                                        class= " bg-teal-600 hover:bg-teal-900 text-white text-center font-semibold py-1 px-4 mx-2 rounded">
                                        ✍Editar
                                    </a>
                                    <a href="eliminar.php?id=<?= $materias->id ?>"
                                        class=" bg-rose-700 hover:bg-rose-900 text-white text-center font-semibold py-1 px-4 mx-2 rounded">Eliminar❌
                                    </a>

                                </div>
                            </td>
                        </tr>
                        <?php }

?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th class=" text-xs ">ID</th>
                            <th class=" text-xs ">Nombre</th>
                            <th class=" text-xs ">Información</th>
                            <th class=" text-xs ">Acción</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

    </div>

    <footer>
        <div class=" bg-slate-600">
            Footer
        </div>
    </footer>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#listaMaterias').DataTable({
                // Add any customization options here
            });
        });
    </script>
</body>



</html>
