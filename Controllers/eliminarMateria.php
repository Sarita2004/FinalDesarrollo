<?php
require_once __DIR__ . '/../Model/Materia.php';


if (isset($_GET['id_materia'])) {
    $id = $_GET['id_materia'];
    $materia = new Materia();
    $materia->id = $id;
    $materia->delete();
    echo "materia eliminado correctamente";
} else {
    echo "Error: ID no especificado.";
}