<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "practica1";
$port = 3306;

$conexion = mysqli_connect($host,$user,$password,$database,$port);

$response = mysqli_query($conexion, "SELECT * FROM producto");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de productos</title>
    <link rel="stylesheet" href= "../public/styles.css">
</head>
<body>
    <h1 style="color: #f9f9f9;">Tabla de productos</h1>
    <table>
        <tr> 
            <div class="cabeza">
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Fecha de registro</th>
            </div>
        </tr>
        <?php
            while($fila = mysqli_fetch_assoc($response)){
                echo "<tr>";
                echo "<td>".$fila['id']."</td>";
                echo "<td>".$fila['nombre']."</td>";
                echo "<td>".$fila['descripcion']."</td>";
                echo "<td>".$fila['precio']."</td>";
                echo "<td>".$fila['stock']."</td>";
                echo "<td>".$fila['created_at']."</td>";                
                echo "</tr>";
            }
        ?>
    </table>
    <div class="enlaces">
        <a href = "../index.php">Volver al inicio </a>    
        <a href = "../views/insertar.php">Insertar otro producto</a>
        <a href = "../views/eliminar.php">Eliminar otro producto</a>
        <a href = "../views/actualizar.php">Actualizar otro producto</a>

    </div>     
</body>
</html>