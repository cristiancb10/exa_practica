<?php
//header('Content-Type: application/json');
$ci=$_REQUEST['ci'] ?? '';
$nombre=$_REQUEST['nombre'] ?? '';
$correo=$_REQUEST['correo'] ?? '';
$fecha_nac=$_REQUEST['fecha_nac'] ?? '';

echo ($ci."</>");
echo ($nombre."</>");
echo ($correo."</>");
echo ($fecha_nac."</>");

include_once "./persona.php";
$persona= new Persona;
$persona->ci=$ci;
$persona->nombre=$nombre;
$persona->correo=$correo;
$persona->fecha_nac=$fecha_nac;
$persona->crear();





/*echo htmlspecialchars($ci)."</>";
echo htmlspecialchars($nombre)."</>";
echo htmlspecialchars($correo)."</>";
echo htmlspecialchars($fecha_nac)."</>";*/



