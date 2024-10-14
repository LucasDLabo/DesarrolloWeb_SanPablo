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
                <a href="../Profesores/indexProfesor.php"><button>Profesores👨‍🏫</button></a>
                <div class="page-header clearfix">
                    <h2 class="pull-left">Lista de Materias 📚</h2>
                </div>
                <table id="listamaterias" class="table table-sm table-striped table-bordered " style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre de materia</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <nav class="nav justify-content-center  ">
                            <a class="btn btn-primary" href="createMateria.php" aria-current="page">
                                Crear materia 📖
                            </a>
                        </nav>



                        <?php

                        foreach ($materiasDB as $materias) { ?>
                            <tr>
                                <td><?= $materias->id; ?></td>
                                <td><?= $materias->nombre; ?></td>

                                <td>
                                    <div>
                                        <a href="eliminarMateria.php?id=<?= $materias->id; ?>" class="btn btn-danger">Eliminar❌</a>
                                        <a href="editarMateria.php?id=<?= $materias->id; ?>" class="btn btn-info">Editar✍️</a>
                                    </div>
                                </td>
                            </tr>
                        <?php }

                        ?>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Nombre de materia</th>
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
        $('#listamaterias').DataTable({
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