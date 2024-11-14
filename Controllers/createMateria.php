<?php

require_once __DIR__ .'/../Model/Materia.php';

if(isset($_POST['enviarFormulario'])){
    $nombre = $_POST['nombre'];
    $carga_horaria = $_POST['carga_horaria'];



    $materia = new Materia();
    $materia->nombre = $nombre;
    $materia->carga_horaria = $carga_horaria;

    $materia->create();

    

    // echo "Nombre: $nombre, Apellido: $apellido, Fecha de Nacimiento: $fecha_nacimiento";

    // echo "Se presionó el botón de enviar formulario";
} else {
    echo "No se presionó el botón de enviar formulario";
}
