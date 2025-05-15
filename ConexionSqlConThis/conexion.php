<?php
class conexion {
    // propiedad para almacenar la conexion a la BD
    public $con;

    //METODO para conecta a la base de datos
    public function conectar(){
        $this->con = mysqli_connect("localhost","root","","dbinf530");
        if(!$this->con){
            die("Error de conexion: " . mysqli_connect_error());
        }
    }
}
?>