<?php

require_once __DIR__ .'/../Model/Materia.php';
if (isset($_GET['id_materia'])) {
    $id = $_GET['id_materia'];
} else {
    die("ID de materia no proporcionado.");
}

$id = $_GET['id_materia'];

// require_once __DIR__ .'/../Model/Materia.php';
// if (isset($_GET['id_materia'])) {
//     $id = $_GET['id_materia'];
// } else {
//     die("ID de  no proporcionado.");
// }

// $id = $_GET['id_materia'];
if(isset($_POST['actualizarDatos'])){
    $nombre = $_POST['nombre'];
    $carga_horaria = $_POST['carga_horaria'];

    $materia = Materia::getById($id);
    $materia->nombre = $nombre;
    $materia->carga_horaria = $carga_horaria;
    $carga_horaria->update();

    header('Location: ../Controllers/indexMateria.php');
} else  {
    $materia = Materia::getById($id);
    if ($materia) {
        require_once __DIR__ .'/../Views/editarMateria.view.php';
    }
}



