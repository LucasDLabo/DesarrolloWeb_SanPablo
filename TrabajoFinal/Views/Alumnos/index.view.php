<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>👨‍🎓 Alumnos </title>

    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Incluye DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.tailwindcss.css">

</head>
<body>

<div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
    
    <h2 class="text-2xl font-bold mb-4">Lista de Alumnos 👩‍🎓</h2>
    <table id="listaAlumno" class="table-auto w-full">
        <nav>
        <a href="../Materias/indexMateria.php"><button>Materias📚</button></a>
        <a href="../Profesores/indexProfesor.php"><button>Profesores👨‍🏫</button></a>
        </nav>
        <div>
            <a href="" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Crear alumno 📖
            </a>
        </div>
        <thead>
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Nombre</th>
                <th class="px-4 py-2">Apellido</th>
                <th class="px-4 py-2">Fecha de Nacimiento</th>
                <th class="px-4 py-2">Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($alumnos as $alumno) { ?>
                            <tr>
                                <td class="border px-4 py-2"><?= $alumno->id; ?></td>
                                <td class="border px-4 py-2"><?= $alumno->nombre; ?></td>
                                <td class="border px-4 py-2"><?= $alumno->apellido; ?></td>
                                <td class="border px-4 py-2"><?= date('d/m/Y', strtotime($alumno->fecha_nacimiento));  ?></td>
                                <td class="border px-4 py-2">
                                    <div>
                                        <a href="showSubject.php?id=<?= $alumno->id; ?>" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Ver Materias📖</a>
                                        <a href="eliminar.php?id=<?= $alumno->id; ?>" class="bg-red-800 hover:bg-red-900 text-white font-bold py-2 px-4 rounded">Eliminar❌</a>
                                        <a href="editar.php?id=<?= $alumno->id; ?>" class="bg-yellow-600 hover:bg-yellow-900 text-white font-bold py-2 px-4 rounded"> Editar✍️</a>
                                    </div>
                                </td>
                            </tr>
                        <?php }

                        ?>
        </tbody>
        <tfoot>
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Nombre</th>
                <th class="px-4 py-2">Apellido</th>
                <th class="px-4 py-2">Fecha de Nacimiento</th>
                <th class="px-4 py-2">Acción</th>
            </tr>     
        </tfoot>
    </table>
</div>

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#listaAlumno').DataTable({
            // Add any customization options here
        });
    });
</script>

</body>
</html>