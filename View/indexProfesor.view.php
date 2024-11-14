<?php
require_once  __DIR__ .'/../Controllers/indexProfesor.php';
require_once  __DIR__ .'/../Model/Profesor.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Profesores</title>
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
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <a href="createProfesor.view.php" class="btn btn-success float-right">Agregar Profesor</a>
                        <h2 class="pull-left">Lista de Profesores</h2>
                    </div>
                    <table id="listaAlumnos" class="table table-sm table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Fecha Nacimiento</th>
                                <th>Acciones</th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php

                            // foreach ($alumnos as $alumnos) {
                            //     echo "<tr>";
                            //     echo "<td>" . $alumnos->id . "</td>";
                            //     echo "<td>" . $alumnos->nombre . "</td>";
                            //     echo "<td>" . $alumnos->apellido . "</td>";
                            //     echo "<td>" . $alumnos->fecha_nacimiento . "</td>";
                            //     echo "</tr>";
                            // }

                            foreach ($profesores as $profesor) { ?>
                                <tr>
                                    <td><?= $profesor->id; ?></td>
                                    <td><?= $profesor->nombre; ?></td>
                                    <td><?= $profesor->apellido; ?></td>
                                    <td><?= date('d/m/Y', strtotime($profesor->fecha_nacimiento)); ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="editarProfesor.view.php?id_profesor=<?= $profesor->id; ?>" class="btn btn-warning btn-sm">Editar</a>

                                        
                                            <a href="../Controllers/eliminarProfesor.php?id=<?= $profesor->id; ?>" class="btn btn-danger btn-sm">Eliminar</a>
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
                                <th>Fecha Nacimiento</th>
                                <th>Acciones</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    $(document).ready(function() {
        $('#listaProfesores').DataTable({});
    });
</script>

</html>