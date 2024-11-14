<?php

require_once 'Conexion.php';
require_once 'Materia.php';

class Profesor extends Conexion {

    public $id, $nombre, $apellido, $DNI, $fecha_nacimiento, $telefono, $calle, $nro, $codigo_postal, $estado_civil, $genero;

    public function create() {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "INSERT INTO profesores (nombre, apellido, DNI, fecha_nacimiento, telefono, calle, nro, codigo_postal, estado_civil, genero) VALUES (?,?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $pre->bind_param("ssisisiiss",
        $this->nombre,
        $this->apellido, 
        $this->DNI, 
        $this->fecha_nacimiento, 
        $this->telefono, 
        $this->calle, 
        $this->nro,
        $this->codigo_postal,
        $this->estado_civil,
        $this->genero);
        $pre->execute();
    }

    public static function all() {
        $conexion = new Conexion();
        $conexion->conectar();
        $result = mysqli_prepare($conexion->con, "SELECT * FROM profesores");
        $result->execute();
        $valoresDb = $result->get_result();
        $profesores = [];
        while ($profesor = $valoresDb->fetch_object(Profesor::class)) {
            $profesores[] = $profesor;
        }
        return $profesores;
    }

    public static function getById($id) {
        $conexion = new Conexion();
        $conexion->conectar();
        $result = mysqli_prepare($conexion->con, "SELECT * FROM profesores WHERE id_profesor = ?");
        $result->bind_param("i", $id);
        $result->execute();
        $valorDb = $result->get_result();
        $profesor = $valorDb->fetch_object(Profesor::class);
        return $profesor;
    }

    public function delete() {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "DELETE FROM profesores WHERE id_profesor = ?");
        $pre->bind_param("i", $this->id);
        $pre->execute();
    }

    public function update() {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "UPDATE profesores SET nombre = ?, apellido = ?, DNI = ?, fecha_nacimiento = ?,  telefono = ?, calle = ?, nro = ?, codigo_postal = ?, estado_civil=?, genero = ?  WHERE id_profesor = ?");
        $pre->bind_param("ssisisiissi",
        $this->nombre,
        $this->apellido,
        $this->DNI,
        $this->fecha_nacimiento,
        $this->telefono,
        $this->calle,
        $this->nro,
        $this->codigo_postal,
        $this->estado_civil,
        $this->genero,
        $this->id);
        $pre->execute();
    }
}