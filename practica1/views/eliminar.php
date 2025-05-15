<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Producto</title>
    <link rel="stylesheet" href= "../public/styles.css">
</head>
<body>
    <div class="form_eliminar">
        <h1>Eliminar Producto:</h1>
        <form action="../actions/eliminarProducto.php" method="GET">
            <label for="id">Id del producto:</label>
            <br>
            <input type= "text" name="id" id="id" required>
            <br>
            <br>
            <button type="submit">Eliminar</button>
        </form>
        <br>
        <div class="enlaces">
            <a href = "../index.php">Volver al Inicio</a>
            <a href = "../actions/listar.php">Ver tabla de productos</a>
        </div>  
    </div>  
</body>
</html>