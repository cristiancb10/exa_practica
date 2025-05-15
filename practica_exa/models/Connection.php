<?php

class Connection {
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $db = 'examen';
    private $port = '3306';
    protected $conexion = null;

    public function conectar(){
        $this -> conexion =  mysqli_connect(
            $this -> host,
            $this -> user,
            $this -> pass,
            $this -> db,
            $this -> port
        );
        if($this->conexion === false){
            echo "Error: ".mysqli_connect_error();
            die("Conexión fallida");
            exit;
        }else{
            //echo "Conexion exitosa";
        }
    }
}
