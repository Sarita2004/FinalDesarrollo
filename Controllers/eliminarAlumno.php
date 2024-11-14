<?php
require_once __DIR__ . '/../Model/Alumno.php';

    $id_alumno = $_GET['id_alumno'];
    $alumno = Alumno::getById($id_alumno); // Obtiene el alumno por su ID

    if ($alumno) {
        $alumno->delete(); // Elimina el alumno
        header('Location: indexAlumno.php'); // Redirige a la lista de alumnos
        exit();
    }