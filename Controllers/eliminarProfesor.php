<?php
require_once __DIR__ . '/../Model/Profesor.php';

    $id_profesor = $_GET['id_profesor'];
    $profesor = Profesor::getById($id_profesor); // Obtiene el profesor por su ID

    if ($profesor) {
        $profesor->delete(); // Elimina el profesor
        header('Location: indexProfesor.php'); // Redirige a la lista de profesores
        exit();
    }