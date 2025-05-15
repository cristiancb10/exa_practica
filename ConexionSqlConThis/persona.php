<?php




include_once "conexion.php"; //incluye la clase conexion

class Persona extends conexion {
    //Propiedades (atributos de una persona)
    public $ci;
    public $nombre;
    public $correo;
    public $fecha_nac;
    //Metodo para insertar una persona en la BD
    public function crear(){
        $this-> conectar();
        $pre = mysqli_prepare(
            $this -> con, "INSERT INTO persona (ci, nombre, correo, fecha_nac) values (?, ?, ?, ?)"
        );
        $pre -> bind_param("ssss", $this->ci, $this->nombre, $this->correo, $this->fecha_nac);
        return $pre -> execute();
    }
}
    /*if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $p = new Persona();
        $p->ci = $_POST['ci'];
        $p->nombre = $_POST['nombre'];
        $p->correo = $_POST['correo'];
        $p->fecha_nac = $_POST['fecha_nac'];
        
        if ($p->crear()) {
            header("Location: registro.php?success=1"); // Redirige si es exitoso
            exit();
        } else {
            header("Location: registro.php?error=1"); // Redirige si hay error
            exit();
        }
    }*/
?>
