
<?php
// require_once __DIR__ .'/../Model/Alumno.php';
// require_once __DIR__ .'/../Controllers/createAlumno.php';

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

                        <h3>Crear Alumno</h3>
                    </div>
                    <div class="card-body">

                        <form action="" method="post">
                            
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" name="nombre" id="nombre" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="apellido">Apellido</label>
                                <input type="text" name="apellido" id="apellido" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="DNI">DNI</label>
                                <input type="text" name="DNI" id="DNI" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                                <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="telefono">Telefono</label>
                                <input type="text" name="telefono" id="telefono" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="calle">Calle</label>
                                <input type="text" name="calle" id="calle" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="nro">Nro</label>
                                <input type="text" name="nro" id="nro" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="codigo_postal">Codigo Postal</label>
                                <input type="text" name="codigo_postal" id="codigo_postal" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="estado_civil">Estado Civil</label>
                                <input type="text" name="estado_civil" id="estado_civil" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="genero">Genero</label>
                                <input type="text" name="genero" id="genero" class="form-control">
                            </div>
                            <button type="submit" name="enviarFormulario" class="btn btn-primary">
                                <i class="fas fa fa-send">Enviar</i>
                            </button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>