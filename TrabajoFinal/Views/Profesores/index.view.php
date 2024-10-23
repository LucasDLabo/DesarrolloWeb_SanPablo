<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>📚 Materias </title>
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
                <a href="../Alumnos/index.php"><button>Alumnos 👨‍🎓</button></a>
                <a href="../Materias/indexMateria.php"><button>Materias 📚</button></a>
                <div class="page-header clearfix">
                    <h2 class="pull-left">Lista de Profesores 👨‍🏫</h2>
                </div>
                <table id="listaprofesores" class="table table-sm table-striped table-bordered " style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Materias que enseña</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <nav class="nav justify-content-center  ">
                            <a class="btn btn-primary" href="create.php" aria-current="page">
                                Crear Profesor 📖
                            </a>
                        </nav>



                        <?php

                        foreach ($profesores as $profesor) { ?>
                            <tr>
                                <td><?= $profesor->id; ?></td>
                                <td><?= $profesor->nombre; ?></td>
                                <td><?= $profesor->apellido; ?></td>
                                <td><?= $profesor->materia()->nombre; ?></td>

                                <td>
                                    <div>
                                        <a href="eliminar.php?id=<?= $profesor->id; ?>" class="btn btn-danger">Eliminar❌</a>
                                        <a href="editar.php?id=<?= $profesor->id; ?>" class="btn btn-info">Editar✍️</a>
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
                            <th>Materia que enseña</th>
                            <th>Acción</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</body>
<script>
    $(document).ready(function() {
        $('#listaprofesores').DataTable({
            "columns": [{
                    "width": "5%"
                }, // Primera columna con un ancho de 100px
                null, // Segunda columna sin ancho definido
                {
                    "width": "25%"
                } // Tercera columna con un ancho de 150px
            ]
        });
    });
</script>

</html>