<?php

// require_once __DIR__ .'/../Model/Alumno.php';


// $id = $_GET['id_alumno'];

// $alumno = Alumno::getById($id);

// if ($alumno) {
//     $alumno->delete();
//     header('Location: ../Controllers/indexAlumno.view.php');
// }

require_once __DIR__ .'/../Model/Alumno.php';

$id = $_GET['id_alumno'];

$alumno = Alumno::getById($id_alumno);

if ($alumno) {
    $alumno->delete();
    header('Location: ../Controllers/indexAlumno.php');
}


echo $id_alumno;

//echo $id;


// require_once __DIR__ . '/../Model/Alumno.php';

// if (isset($_GET['id_alumno'])) {
//     $id = $_GET['id_alumno'];
//     $alumno = new Alumno();
//     $alumno->id= $id;
//     $alumno->delete();
//     echo "Alumno eliminado correctamente";
// } else {
//     echo "Error: ID no especificado.";
// }
