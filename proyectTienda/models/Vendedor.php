<?php
require_once 'Connection.php';

class Vendedor extends connection{
    public $ci;
    public $name;
    public $email;
    public $fechaRegistro;
    public $fechaActualizacion;
    
    public function getall(){
        $this ->conex();
        $stmt = mysqli_prepare($this->conexion,
        "SELECT *  FROM vendedor");
        
        $stmt->execute();
        $res = $stmt ->get_result();
        if($res->num_rows == 0){
            return null;
        }
        $vendedores = $res->fetch_all(MYSQLI_ASSOC);

        return $vendedores;
    }




}