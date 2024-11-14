<?php 
require_once __DIR__ .'/../Model/Alumno.php';
//require_once __DIR__ . '/../Controllers/editarAlumno.php';
// Verificar si 'id_alumno' está en la URL y no está vacío
if (isset($_GET['id_alumno']) && !empty($_GET['id_alumno'])) {
    $id_alumno = $_GET['id_alumno'];
    $alumno = Alumno::getById($id_alumno);

    // Verificar si el alumno fue encontrado
    // if (!$alumno) {
    //     echo "El alumno con ID $id_alumno no fue encontrado.";
    //     exit;
    // }
} else {
    echo "ID de alumno no proporcionado.";
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Alumno</title>
    <!-- Include bootstrap last version -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include jQuery last version -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Include fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    
</head>

<body>

    <div class="container">
        <div class="row mt-5">
            <div class="col col-12">
                <div class="card">
                    <div class="card-header">

                        <h3>Editar Alumno - ID: <?= $alumno->id_alumno ?></h3>
                    </div>
                    <div class="card-body">

                        <form action="../Controllers/editarAlumno.php?id_alumno=<?= $alumno->id_alumno ?>" method="post">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" value="<?= $alumno->nombre ?>" name="nombre" id="nombre" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="apellido">Apellido</label>
                                <input type="text" value="<?= $alumno->apellido ?>" name="apellido" id="apellido" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="DNI">DNI</label>
                                <input type="text" value="<?= $alumno->DNI ?>" name="DNI" id="DNI" class="form-control">
                            </div>
                            <div class="form-group" id="fecha_nacimiento">
                                <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                                <input type="date" value="<?= $alumno->fecha_nacimiento ?>" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="telefono">Telefono</label>
                                <input type="text" value="<?= $alumno->telefono ?>" name="telefono" id="telefono" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="calle">Calle</label>
                                <input type="text" value="<?= $alumno->calle ?>" name="calle" id="calle" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="nro">Nro</label>
                                <input type="text" value="<?= $alumno->nro ?>" name="nro" id="nro" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="codigo_postal">Codigo postal</label>
                                <input type="text" value="<?= $alumno->codigo_postal ?>" name="codigo_postal" id="codigo_postal" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="estado_civil">Estado civil</label>
                                <input type="text" value="<?= $alumno->estado_civil ?>" name="estado_civil" id="estado_civil" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="genero">Genero</label>
                                <input type="text" value="<?= $alumno->genero ?>" name="genero" id="genero" class="form-control">
                            </div>
                            <button type="submit" name="actualizarDatos" class="btn btn-primary">
                                <i class="fas fa fa-send">Actualizar</i>
                            </button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>