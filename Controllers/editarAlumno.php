<?php
require_once __DIR__ .'/../Model/Alumno.php';
 

// if (isset($_GET['id_alumno'])) {
//     $id = $_GET['id_alumno'];
// } else {
//     die("ID de alumno no proporcionado.");
// }

$id_alumno = $_GET['id_alumno'];

if(isset($_POST['actualizarDatos'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    //$email = $_POST['email'];
    $DNI = $_POST['DNI'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $telefono = $_POST['telefono'];
    $calle = $_POST['calle'];
    $nro = $_POST['nro'];
    $codigo_postal = $_POST['codigo_postal'];
    $estado_civil = $_POST['estado_civil'];
    $genero = $_POST['genero'];

    $alumno = Alumno::getById($id_alumno);
    $alumno->nombre = $nombre;
    $alumno->apellido = $apellido;
    //$alumno->email = $email;
    $alumno->DNI = $DNI;
    $alumno->fecha_nacimiento = $fecha_nacimiento;
    $alumno->telefono = $telefono;
    $alumno->calle = $calle;
    $alumno->nro = $nro;
    $alumno->codigo_postal = $codigo_postal;
    $alumno->estado_civil = $estado_civil;
    $alumno->genero = $genero;
   
    $alumno->update();

    header('Location: ../Controllers/indexAlumno.php');}
 else  {
    $alumno = Alumno::getById($id_alumno);
    if ($alumno) {
        require_once __DIR__ .'/../Views/editarAlumno.view.php';
    }}







// require_once __DIR__ . '/../Model/Alumno.php';

// // Verifica si se ha pasado el parámetro 'id_alumno' en la URL
// if (isset($_GET['id_alumno']) && !empty($_GET['id_alumno'])) {
//     // Obtiene el ID del alumno desde la URL
//     $id = (int) $_GET['id_alumno'];  // Asegúrate de convertirlo a entero

//     // Obtiene los datos del alumno desde la base de datos
//     $alumno = Alumno::getById($id);

//     if ($alumno) {
//         // Si el alumno existe, incluir la vista para editar
//         require_once __DIR__ . '/../Views/editarAlumno.view.php';
//     } else {
//         die("Alumno no encontrado.");
//     }
// } else {
//     die("ID de alumno no proporcionado.");
// }
// ?>
