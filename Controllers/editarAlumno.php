<?php
require_once __DIR__ . '/../Model/Alumno.php';

    $id_alumno = $_GET['id_alumno'];
    $alumno = Alumno::getById($id_alumno); // Obtiene el alumno por su ID

    if (isset($_POST['actualizarDatos'])) {
        // Recoge los datos del formulario
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $DNI = $_POST['DNI'];
        $fecha_nacimiento = $_POST['fecha_nacimiento'];
        $telefono = $_POST['telefono'];
        $calle = $_POST['calle'];
        $nro = $_POST['nro'];
        $codigo_postal = $_POST['codigo_postal'];
        $estado_civil = $_POST['estado_civil'];
        $genero = $_POST['genero'];

        // Actualiza las propiedades del objeto alumno
        $alumno->nombre = $nombre;
        $alumno->apellido = $apellido;
        $alumno->email = $email;
        $alumno->DNI = $DNI;
        $alumno->fecha_nacimiento = $fecha_nacimiento;
        $alumno->telefono = $telefono;
        $alumno->calle = $calle;
        $alumno->nro = $nro;
        $alumno->codigo_postal = $codigo_postal;
        $alumno->estado_civil = $estado_civil;
        $alumno->genero = $genero;

        // Llama al método update para guardar los cambios en la base de datos
        $alumno->update();

        // Redirige a la lista de alumnos
        header('Location: indexAlumno.php');
        exit();
    }

// Carga la vista de edición
require_once __DIR__ . '/../View/editarAlumno.view.php';