<?php

class Connection {
    public $connection = 'null';
    private $host = 'localhost';
    private $user = 'root';
    private $password = 'root';
    private $db = 'prueba1';
    private $port = 3306;

    public function connect(){
        try {
            $this-> connection = mysqli_connect(
                $this -> host,
                $this -> user,
                $this -> password,
                $this -> db,
                $this -> port,
            );
        echo 'Conexion exitosa';   
        }
        catch(Exception $error){
            echo 'error'.$error->get_message();
            exit;
        }
    }
}
/*
class Connection{
    private $connection = null;
    private $host = 'localhost';
    private $user = 'root';
    private $password = 'root';
    private $db = 'prueba1';
    private $port = 3306;

    public function connect(){

            $this -> connection = mysqli_connect(
                $this -> host,
                $this -> user,
                $this -> password,
                $this -> db,
                $this -> port,
            );


        if($this -> connection === false){
            echo 'Error: '.mysqli_connect_error();
            die('conexion fallida');
        }
        else{
            echo 'conexion exitosa';
        }
        exit;
    }
}

$con = new Connection();
$con->connect();*/