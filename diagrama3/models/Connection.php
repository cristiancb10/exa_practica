<?php
class Connection {
    protected $connection  = null;
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $db = "diagrama3";
    private $port = 3306;

    protected function connect(){
        try{
            $this->connection = mysqli_connect(
            $this->host, $this->user, $this->password, $this->db, $this->port);
                echo "conexion exitosa";
        }
        catch(Exception $error){
            echo "Error: ".$error->getMessage();
            die ("Connection fallado"); 
        }
    }   
}