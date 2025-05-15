<?php

require_once "Connection.php";

class Product extends Connection{
    // Campos de la tabla
    public $id=null;
    public $name=null;
    public $descripion=null;
    public $created_at=null;

    public function __construct(){
        $this->connect();
    }
    public function getAll(){
        $stmt = $this->connection->prepare(
            "SELECT * FROM products"
        );

        $stmt->execute();
        $res = $stmt->get_result();

        while($row = $res->fetch_assoc()){
            echo $row['id']."\t".$row['name']."\n";
        }

    }

    public function find(int $id){
        $pre = $this->connection->prepare(
            "SELECT * FROM products WHERE id = ?"
        );
        $pre->bind_param('i', $id);
        $pre->execute();

        $res = $pre->get_result();
        $fila = $res->fetch_assoc();

        print_r($fila);
    }

    public function create($name, $descripcion){
        $this->connect();
        $stmt = mysqli_prepare(
            $this->connection,
            "INSERT INTO products (name, description) VALUES (?, ?)"
        );
        $stmt->bind_param("ss", $this->name, $this->description);
        $stmt->execute();
        $stmt->close();
    }
}

$product = new Product();
$product->find(2);