<?php
require_once 'Connection.php';

class User extends Connection{
    public $ci;
	public $nombre;
	public $apePaterno;
	public $apeMaterno; 
	public $correo;
	public $password;
	public $fechaNac;
	public $fechaRegistro;

    public function userAll(){
        $this->connect();
        $stmt = mysqli_prepare(
            $this->connection, "SELECT * FROM usuario"
        );
        $stmt-> execute();
        $result = $stmt ->get_result();
        $lista = array();
        while($filas = $result->fetch_assoc()){
            array_push($lista,$filas);
        }
        return $lista;
    }



}