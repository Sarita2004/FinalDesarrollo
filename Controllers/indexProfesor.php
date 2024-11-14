<?php
require_once __DIR__ .'/../Model/Profesor.php';

$profesores = Profesor::all();

// Verificar si existe 'id' en la URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $profesor = Profesor::getById($id);
}

//require_once __DIR__ .'/../Views/indexProfesor.view.php';
