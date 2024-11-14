
<?php
require_once __DIR__ . '/../Model/Alumno.php';

// Obtiene todos los alumnos
$alumnos = Alumno::all();

// Carga la vista de la lista de alumnos
require_once __DIR__ . '/../View/indexAlumno.view.php';