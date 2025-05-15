<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "repaso1";
$port = 3306;

try{
    $con = new mysqli($host, $user, $password, $db);
    echo "conexion exitosa\n";
}
catch(Exception $error){
    echo "Error al conectarse a la base de datos: ";
    echo $error->getMessage();
}

$pre = $con ->prepare("SELECT * FROM users");

$pre->execute();

$res = $pre->get_result();

while($fila = $res->fetch_assoc()){
    print($fila["id"]);
    print($fila["name"]);
    print($fila["correo"]);
};
?>


