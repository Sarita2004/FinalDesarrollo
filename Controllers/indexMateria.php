<?php
require_once __DIR__ .'/../Model/Materia.php';

$materias = Materia::all();


// Verificar si existe 'id' en la URL
if (isset($_GET['id_materia'])) {
    $id = $_GET['id_materia'];
    $materia = Materia::getById($id);
}

