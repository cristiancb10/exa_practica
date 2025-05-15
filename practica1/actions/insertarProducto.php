<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "practica1";
$port = 3306;

$conexion = mysqli_connect($host,$user,$password,$database,$port);

// Recuperando datos por POST
$name = $_POST['name'];
$description =$_POST['description'];
$price = $_POST['price'];
$stock = $_POST['stock'];

$sql = "INSERT INTO producto (nombre, descripcion, precio, stock) VALUES
    ('$name', '$description', '$price', '$stock')";

$result = mysqli_query($conexion, $sql);
if ($result) {
    echo "<script>
        alert('Producto registrado exitosamente.');
        window.location.href = 'listar.php';
    </script>";
} else {
    echo "<script>
        alert('Error al registrar el producto: " . mysqli_error($conexion) . "');
        window.location.href = 'listar.php';
    </script>";
}
