<?php

$id = $_GET['id'];

$host = "localhost";
$user = "root";
$password = "";
$database = "practica1";
$port = 3306;

$conexion = mysqli_connect($host,$user,$password,$database,$port);

$query = "SELECT * FROM producto WHERE id = ?";

$stm = mysqli_prepare($conexion,$query);
mysqli_stmt_bind_param($stm,'i',$id);
mysqli_stmt_execute($stm);
$response = mysqli_stmt_get_result($stm);

$num_rows = mysqli_num_rows($response);

if ($num_rows != 1 ){
    echo "<script>
    alert('El id de producto no existe: " . mysqli_error($conexion) . "');
    window.location.href = 'listar.php';
    </script>";  
}else{
    $query= "DELETE FROM producto where id=".$id;
    $response= mysqli_query($conexion,$query);
        echo "<script>
            alert('Producto eliminado exitosamente.');
            window.location.href = 'listar.php';
        </script>";
    }

