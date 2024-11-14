<?php
require_once __DIR__ . '/../Model/Profesor.php';

    $id_profesor = $_GET['id_profesor'];
    $profesor = Profesor::getById($id_profesor); // Obtiene el profesor por su ID

    if (isset($_POST['actualizarDatos'])) {
        // Recoge los datos del formulario
        $profesor->nombre = $_POST['nombre'];
        $profesor->apellido = $_POST['apellido'];
        $profesor->DNI = $_POST['DNI'];
        $profesor->fecha_nacimiento = $_POST['fecha_nacimiento'];
        $profesor->telefono = $_POST['telefono'];
        $profesor->calle = $_POST['calle'];
        $profesor->nro = $_POST['nro'];
        $profesor->codigo_postal = $_POST['codigo_postal'];
        $profesor->estado_civil = $_POST['estado_civil'];
        $profesor->genero = $_POST['genero'];

        // Llama al método update para guardar los cambios en la base de datos
        $profesor->update();

        // Redirige a la lista de profesores
        header('Location: indexProfesor.php');
        exit();
    }

// Carga la vista de edición
require_once __DIR__ . '/../View/editarProfesor.view.php';