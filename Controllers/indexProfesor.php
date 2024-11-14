<?php
require_once __DIR__ . '/../Model/Profesor.php';

// Obtiene todos los profesores
$profesores = Profesor::all();

// Carga la vista de la lista de profesores
require_once __DIR__ . '/../View/indexProfesor.view.php';