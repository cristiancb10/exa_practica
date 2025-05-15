<?php
$nombre = $_POST['name'];
$correo = $_POST['email'];
$edad = $_POST['age'];
$contrasenia = $_POST['password']; 

echo "El nombre es: ".$nombre;
"\n";
echo "La contraseña es: ".$contrasenia;

$conexion = mysqli_connect(
    'localhost',
    'root',
    '',
    'php1'
);
echo "conexion realizada con exito";

$consulta = "insert into usuario(nombre,correo,edad, contrasenia) values
('$nombre','$correo', '$edad','$contrasenia')";

$respuesta = mysqli_query($conexion, $consulta);

if($respuesta){
    echo "consulta efecutada correctamente"; 
    header("Location:index.php");
}
else{
    echo "hubo un error en la consulta";
}