<?php

class connection {
    protected $conexion = "null";
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $db = "tienda";
    private $port = 3306;
    
    protected function conex(){
        try{
            $this-> conexion = mysqli_connect(
                $this->host,$this->user, $this->password, $this->db, $this->port);
                //echo "Conexion exitosa genio";
        }
        catch(Exception $error ){
            echo "Error de conexión: ".$error->get_message();        
            die("No se pudo hacer la conexion");
        }
    }
}
