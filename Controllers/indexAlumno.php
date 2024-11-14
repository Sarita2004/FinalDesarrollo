<?php

require_once __DIR__ .'/../Model/Alumno.php';

$alumnos = Alumno::all();

//require_once __DIR__ .'/../Views/indexAlumno.view.php';

// $alumno = Alumno::getById($id); 



require_once __DIR__ .'/../Model/Alumno.php';

// $alumnos = Alumno::all();


// Verificar si existe 'id' en la URL
if (isset($_GET['id_alumno'])) {
    $id = $_GET['id_alumno'];
    $alumno = Alumno::getById($id_alumno);
}

echo '<pre>';
print_r($alumnos); // Imprime todos los datos de los alumnos
echo '</pre>';





