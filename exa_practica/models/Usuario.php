<?php
require_once "Connection.php";

class Usuario extends Connection{
    private $tabla = "usuario";

    public function mostrarLista(){
        $this -> conectar();
        $stmt = mysqli_prepare(
            $this -> conexion,
            "SELECT * FROM $this->tabla"
        );
        $stmt -> execute();
        $result = $stmt ->get_result();
        $lista = array();
        while($filas = $result->fetch_assoc()){
            array_push($lista,$filas);
        }
        return $lista;
    }

    public function selectUsuario($user){
        $this->conectar();
        $stmt = mysqli_prepare(
            $this->conexion,
            "SELECT * FROM $this->tabla WHERE ci = ?"
        );
        $stmt->bind_param("s", $user);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_assoc();
    }

    public function eliminar($user){
        $this->conectar();
        $stmt = mysqli_prepare(
            $this->conexion,
            "DELETE FROM $this->tabla WHERE ci=?"
        );
        $stmt->bind_param("s",$user);
        $stmt->execute();
    }

    public function actualizar($user, $nombre, $apePa, $apeMa, $cel, $correo){
        $this->conectar();
        $stmt =  mysqli_prepare(
            $this->conexion,
            "UPDATE $this->tabla SET nombre = ?, apePa = ?, apeMa = ?, cel = ?, correo = ? WHERE ci = ?"
        );
        $stmt->bind_param("sssiss", $nombre, $apePa, $apeMa, $cel, $correo, $user);
        $stmt->execute();
        $cambios = $stmt->affected_rows;
        return $cambios;
    }

    public function crear($ci, $nombre, $apePa, $apeMa, $cel, $correo){
        $this->conectar();
        $stmt = mysqli_prepare(
            $this->conexion,
            "INSERT INTO $this->tabla (ci, nombre, apePa, apeMa, cel, correo) VALUES
            (?, ?, ?, ?, ?, ?)"
        );
        $stmt->bind_param("ssssis", $ci, $nombre, $apePa, $apeMa, $cel, $correo);
        $stmt ->execute();
        $result = $stmt->affected_rows;
        return $result;
    }
}