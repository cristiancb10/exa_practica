<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Producto</title>
    <link rel="stylesheet" href= "../public/styles.css">
</head>
<body>
    <div class="form_insertar">
        <h1>Insertar Producto:</h1>
        <form action="../actions/insertarProducto.php" method="POST">
            <label for="name">Nombre:</label>
            <br>
            <input type= "text" name="name" id="name" required> 
            <br>
            <label for="description">Descripción:</label>
            <br>
            <input type= "text" name="description" id="description" required>
            <br>
            <label for="price">Precio:</label>
            <br>
            <input type= "number" name="price" id="price" step="0.01" min="0" required>
            <br>
            <label for="stock">Stock:</label>
            <br>
            <input type= "number" name="stock" id="stock" required>
            <br>
            <br>
            <button type="submit">Insertar</button>
        </form>
        <br>
        <div class="enlaces">
            <a href = "../index.php">Volver al Inicio</a>
            <a href = "../actions/listar.php">Ver tabla de productos</a>
        </div>
    </div>  
</body>
</html>




