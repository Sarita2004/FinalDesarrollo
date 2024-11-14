<?php

require_once 'Conexion.php';


class Materia extends Conexion
{

    public $id, $nombre, $carga_horaria;
    public function create()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "INSERT INTO materia (nombre, carga_horaria) VALUES (?, ?)");
        $pre->bind_param(
            "si",
            $this->nombre,
            $this->carga_horaria
        );
        $pre->execute();
    }

    public static function all()
    {
        $conexion = new Conexion();
        $conexion->conectar();
        $result = mysqli_prepare($conexion->con, "SELECT * FROM materia");
        $result->execute();
        $valoresDb = $result->get_result();
        $materias = [];
        while ($materia = $valoresDb->fetch_object(Materia::class)) {
            $materias[] = $materia;
        }
        return $materias;
    }

    public static function getById($id)
    {
        $conexion = new Conexion();
        $conexion->conectar();
        $result = mysqli_prepare($conexion->con, "SELECT * FROM materia WHERE id_materia = ?");
        $result->bind_param("i", $id);
        $result->execute();
        $valorDb = $result->get_result();
        $materia = $valorDb->fetch_object(Materia::class);
        return $materia;
    }

    public function delete()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "DELETE FROM materia WHERE id_materia = ?");
        $pre->bind_param("i", $this->id);
        $pre->execute();
    }

    public function update()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "UPDATE materia SET nombre = ? , carga_horaria = ?");
        $pre->bind_param(
            "si",
            $this->nombre,
            $this->carga_horaria
        );

        $pre->execute();
    }
}
