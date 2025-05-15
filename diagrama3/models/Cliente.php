<?php
require_once "../models/Connection.php";

class Cliente extends Connection{
    public $cId = "465"; 
    public $cName = "jogu";  
    public $telefonoNo = 7898651;      
    public $ciudad = "potosi"; 
    public $amtPaid = 10.2;

    public function mostrar(){
        $this-> connect();
        $stmt = mysqli_prepare($this->connection,
        "SELECT  * FROM cliente");

        $stmt->execute();
        $result = $stmt-> get_result();
        $clientes = array(); 
        while($rows=$result->fetch_assoc()){
            array_push($clientes,$rows);
        }
        $stmt->close();
        return $clientes;
    }
    
    public function insertar(){
        $this-> connect();
        $stmt = mysqli_prepare($this->connection,
        "INSERT INTO cliente (cId, cName, telefonoNo, ciudad, amtPaid) VALUES
        (?, ?, ?, ?, ?)");
        $stmt -> bind_param("ssisd", $this->cId, $this->cName, $this->telefonoNo,
        $this->ciudad, $this->amtPaid);
        $stmt->execute();
        $stmt->close();
    }


}

