<?php
class Aspirante {
    private $id_aspirante;
    private $DNI;
    private $nombre;
    private $apellido;
    private $email;
    private $telefono;
    private $genero;
    private $fecha_nac;
    private $nacionalidad;
    private $direccion;
    private $localidad;

    // Constructor
    public function __construct($DNI, $nombre, $apellido, $email, $telefono, $genero, $fecha_nac, $nacionalidad, $direccion, $localidad) {
        $this->DNI = $DNI;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->genero = $genero;
        $this->fecha_nac = $fecha_nac;
        $this->nacionalidad = $nacionalidad;
        $this->direccion = $direccion;
        $this->localidad = $localidad;
    }

    // Métodos de acceso
    public function getId() {
        return $this->id_aspirante;
    }

    // Métodos para guardar, obtener y eliminar
    public function guardar($conn) {
        $sql = "INSERT INTO aspirante (DNI, nombre, apellido, email, telefono, genero, fecha_nac, nacionalidad, direccion, localidad)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssssssss", $this->DNI, $this->nombre, $this->apellido, $this->email, $this->telefono, $this->genero, $this->fecha_nac, $this->nacionalidad, $this->direccion, $this->localidad);
        $stmt->execute();
    }

    public static function obtenerPorId($conn, $id) {
        $sql = "SELECT * FROM aspirante WHERE id_aspirante = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function actualizar($conn) {
        $sql = "UPDATE aspirante SET DNI=?, nombre=?, apellido=?, email=?, telefono=?, genero=?, fecha_nac=?, nacionalidad=?, direccion=?, localidad=?
                WHERE id_aspirante=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssssssssi", $this->DNI, $this->nombre, $this->apellido, $this->email, $this->telefono, $this->genero, $this->fecha_nac, $this->nacionalidad, $this->direccion, $this->localidad, $this->id_aspirante);
        $stmt->execute();
    }

    public function eliminar($conn) {
        $sql = "DELETE FROM aspirante WHERE id_aspirante=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $this->id_aspirante);
        $stmt->execute();
    }
}
?>
