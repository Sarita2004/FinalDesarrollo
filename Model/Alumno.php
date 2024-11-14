<?php

require_once 'Conexion.php';
require_once 'Materia.php';

class Alumno extends Conexion
{

    public $id_alumno, $nombre, $apellido, $email, $DNI, $fecha_nacimiento, $telefono, $calle, $nro, $codigo_postal, $estado_civil, $genero;

    public function create()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "INSERT INTO alumnos (nombre, apellido, email, DNI, fecha_nacimiento, telefono, calle, nro, codigo_postal, estado_civil, genero) VALUES (?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $pre->bind_param(
            "sssisisiiss",
            $this->nombre,
            $this->apellido,
            $this->email,
            $this->DNI,
            $this->fecha_nacimiento,
            $this->telefono, //fijate que a la hora de cargar el telefono, no lo carga bien, tendrias que poner que es varchar, no int en la BD
            $this->calle,
            $this->nro,
            $this->codigo_postal,
            $this->estado_civil,
            $this->genero
        );
        $pre->execute();
    }

    // public static function all() {
    //     $conexion = new Conexion();
    //     $conexion->conectar();
    //     $result = mysqli_prepare($conexion->con, "SELECT * FROM alumnos");
    //     $result->execute();
    //     $valoresDb = $result->get_result();
    //     $alumnos = [];
    //     while ($alumno = $valoresDb->fetch_object(Alumno::class)) {
    //         $alumnos[] = $alumno;
    //     }
    //     return $alumnos;
    // }

    // public static function getById($id) {
    //     $conexion = new Conexion();
    //     $conexion->conectar();
    //     $result = mysqli_prepare($conexion->con, "SELECT * FROM alumnos WHERE id_alumno = ?");
    //     $result->bind_param("i", $id);
    //     $result->execute();
    //     $valorDb = $result->get_result();
    //     $alumno = $valorDb->fetch_object(Alumno::class);
    //     return $alumno;
    // }


    public static function all()
    {
        $conexion = new Conexion();
        $conexion->conectar();
        $result = mysqli_prepare($conexion->con, "SELECT * FROM alumnos");
        $result->execute();
        $valoresDb = $result->get_result();
        $alumnos = [];
        while ($alumno = $valoresDb->fetch_object(Alumno::class)) {
            $alumnos[] = $alumno;
        }
        return $alumnos;
    }

    public static function getById($id)
    {
        $conexion = new Conexion();
        $conexion->conectar();
        $result = mysqli_prepare($conexion->con, "SELECT * FROM alumnos WHERE id_alumno = ?");
        $result->bind_param("i", $id);
        $result->execute();
        $valorDb = $result->get_result();
        $alumno = $valorDb->fetch_object(Alumno::class);
        return $alumno;
    }

    // public static function getById($id) {
    //     $conexion = new Conexion();
    //     $conexion->conectar();
    //     $result = mysqli_prepare($conexion->con, "SELECT * FROM alumnos WHERE id_alumno = ?");
    //     $result->bind_param("i", $id);
    //     $result->execute();  // ejecutamos la consulta
    //     $resultado = $result->get_result();  // obtenemos el resultado
    //     $alumno = $resultado->fetch_object(Alumno::class);  // obtenemos un solo objeto
    //     return $alumno;
    // }



    public function delete()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "DELETE FROM alumnos WHERE id_alumno = ?");
        $pre->bind_param("i", $this->id_alumno);
        $pre->execute();
    }

    public function update()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "UPDATE alumnos SET nombre = ?, apellido = ?, email = ?, DNI = ?, fecha_nacimiento = ?, telefono = ?, calle = ?, nro = ?, codigo_postal = ?, estado_civil = ?, genero = ? WHERE id_alumno = ?");
        $pre->bind_param(
            "sssisisiissi",
            $this->nombre,
            $this->apellido,
            $this->email,
            $this->DNI,
            $this->fecha_nacimiento,
            $this->telefono,
            $this->calle,
            $this->nro,
            $this->codigo_postal,
            $this->estado_civil,
            $this->genero,
            $this->id_alumno
        );
        $pre->execute();
    }
    // Constructor y otros métodos

    //     public static function obtenerPorEmail($email) {
    //         $this->conectar();
    //         $query = "SELECT * FROM alumnos WHERE email = ? ";
    //         $stmt = $conn->prepare($query);
    //         $stmt->bind_param("s", $email);
    //         $stmt->execute();
    //         $result = $stmt->get_result();
    //         return $result->fetch_assoc(); // Devolver el alumno como objeto o array
    //     }

    //     public function asignarMaterias($materias) {
    //         $this->conectar();
    //         foreach ($materias as $materia_id) {
    //             $query = "INSERT INTO alumno_materia (id_alumno, id_materia) VALUES (?, ?)";
    //             $stmt = $conn->prepare($query);
    //             $stmt->bind_param("ii", $this->id, $materia_id);
    //             $stmt->execute();
    //         }
    //     }
}
