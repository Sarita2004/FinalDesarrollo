<?php
require_once __DIR__ . '/../Model/Profesor.php';

// Asegúrate de que el 'id' está presente en el GET antes de usarlo
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $profesor = new Profesor();
    $profesor->id = $id;
    $profesor->delete();
    echo "Profesor eliminado correctamente";
} else {
    echo "Error: ID no especificado.";
}
