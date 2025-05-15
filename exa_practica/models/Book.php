<?php
require_once "Connection.php";

class Book extends Connection{
    
    private $tabla = "book";

    public function mostrarLibros($user){
        $this->conectar();
        $stmt = mysqli_prepare(
            $this->conexion,
            "SELECT * FROM $this->tabla WHERE ci = ?"
        );
        $stmt->bind_param("s", $user);
        $stmt->execute();
        $result = $stmt->get_result();
        $lista = $result->fetch_all(MYSQLI_ASSOC);
        return $lista;
    }

    public function selectLibro($id){
        $this->conectar();
        $stmt = mysqli_prepare(
            $this->conexion,
            "SELECT * FROM $this->tabla WHERE id = ?"
        );
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function eliminar($id){
        $this->conectar();
        $stmt = mysqli_prepare(
            $this->conexion,
            "DELETE FROM $this->tabla WHERE id = ?"
        );
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $cambios = $stmt->affected_rows;
        return $cambios;
    }


}