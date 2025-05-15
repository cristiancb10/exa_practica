<?php

$id = $_POST['id'];
$name = $_POST['name'];
$description =$_POST['description'];
$price = $_POST['price'];
$stock = $_POST['stock'];

$host = "localhost";
$user = "root";
$password = "";
$database = "practica1";
$port = 3306;

$conexion = mysqli_connect($host,$user,$password,$database,$port);

$query = "SELECT * FROM producto WHERE id = $id";
$response = mysqli_query($conexion, $query);

$num_rows = mysqli_num_rows($response);

if ($num_rows < 1 ){
    echo  "<script>
    alert('Error al eliminar el producto, el id no existe: " . mysqli_error($conexion) . "');
    window.location.href = 'listar.php';
</script>";
}else{
    $query= "UPDATE producto SET nombre='".$name."', descripcion='".$description."',
    precio='".$price."', stock='".$stock."'
    WHERE id =".$id;
    $response= mysqli_query($conexion,$query);
        echo "<script>
        alert('Producto actualizado exitosamente.');
        window.location.href = 'listar.php';
    </script>";
    }
?>