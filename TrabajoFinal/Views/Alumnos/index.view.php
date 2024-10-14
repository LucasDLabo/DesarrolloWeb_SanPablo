<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>👨‍🎓 Alumnos </title>
    <!-- DataTables CSS library -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css" />

    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery-3.5.1.js"></script>
    <!-- DataTables JS library -->
    <script type="text/javascript" src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <!-- DataTables JBootstrap -->
    <script type="text/javascript" src="//cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <style type="text/css">
        .bs-example {
            margin: 20px;
        }
    </style>
</head>

<body>
    <div class="bs-example">
        <div class="container d-flex justify-content-center">
            <div class="col-md-11">
                <a href="../Materias/indexMateria.php"><button>Materias📚</button></a>
                <a href="../Profesores/indexProfesor.php"><button>Profesores👨‍🏫</button></a>
                <div class="page-header clearfix">
                    <h2 class="pull-left">Lista de Alumnos 👩‍🎓</h2>
                </div>
                <table id="listaUsuarios" class="table table-sm table-striped table-bordered" style="width:100%">
                    <nav class="nav justify-content-center  ">
                        <a class="btn btn-primary" href="create.php" aria-current="page">
                            Crear alumno 📖
                        </a>
                    </nav>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Fecha de Nacimiento</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <tr>
                                <td>1</td>
                                <td>Nicolás</td>
                                <td>Rotili</td>
                                <td>24/06/1993</td>
                            </tr> -->
                        <?php
                        // Primer Forma
                        // foreach ($alumnos as $alumnos){
                        //     echo "<tr>";
                        //         echo "<td>" . $alumnos->id . "</td>";
                        //         echo "<td>" . $alumnos->nombre . "</td>";
                        //         echo "<td>" . $alumnos->apellido . "</td>";
                        //         echo "<td>" . $alumnos->fecha_nacimiento . "</td>";
                        //     echo "<tr>";
                        // }

                        //Segunda Forma 
                        // "<?="  equivale a un <?php echo
                        foreach ($alumnos as $alumno) { ?>
                            <tr>
                                <td><?= $alumno->id; ?></td>
                                <td><?= $alumno->nombre; ?></td>
                                <td><?= $alumno->apellido; ?></td>
                                <td><?= date('d/m/Y', strtotime($alumno->fecha_nacimiento));  ?></td>
                                <td>
                                    <div>
                                        <a href="showSubject.php?id=<?= $alumno->id; ?>" class="btn btn-info ">Ver Materias📖</a>
                                        <a href="eliminar.php?id=<?= $alumno->id; ?>" class="btn btn-danger">Eliminar❌</a>
                                        <a href="editar.php?id=<?= $alumno->id; ?>" class="btn btn-info">Editar✍️</a>
                                    </div>
                                </td>
                            </tr>
                        <?php }

                        ?>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Fecha de Nacimiento</th>
                            <th>Accion</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</body>
<script>
    $(document).ready(function() {
        $('#listaUsuarios').DataTable({
            "columns": [
                null,
                null,
                null,
                null,
                {"width": "40%"}
            ]
        });
    });
</script>

</html>