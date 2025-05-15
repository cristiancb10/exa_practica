<?php
$conexion = mysqli_connect(
    '127.0.0.1',
    'root',
    '',
    'php1'
);
/*$consulta = "select * from usuario";
//echo "conectado a la base de datos";*/
$respuesta = mysqli_query($conexion,"select * from usuario");

/*$fila = mysqli_fetch_assoc($respuesta);
while($fila = mysqli_fetch_assoc($respuesta)){
    echo $fila[$nombre];
    echo "<br>";
}*/

/*echo $fla['id'];
echo $fla['nombre'];
echo $fla['correo'];*/

//funcion print

//print_r $fila['nombre'];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTA DE USUARIOS</title>
    <link rel="stylesheet" href= "stylephp.css">

</head>
<body>
    <h1>Tabla de registro</h1>
    <table>
        <tr> 
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Edad</th>
            <th>Contraseña</th>
        </tr>
        <?php

            while($fila = mysqli_fetch_assoc($respuesta)){
                echo "<tr>";
                echo "<td>".$fila['id']."</td>";
                echo "<td>".$fila['nombre']."</td>";
                echo "<td>".$fila['correo']."</td>";
                echo "<td>".$fila['edad']."</td>";
                echo "<td>".$fila['contrasenia']."</td>";
                echo "</tr>";

            }
        ?>
    </table>
    <br>
    <a href = "index.php">Volver a registro </a>     
</body>
</html>