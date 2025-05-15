<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Producto</title>
    <link rel="stylesheet" href= "../public/styles.css">
</head>
<body>
    <div class="form_actualizar">
        <h1>Actualizar Producto:</h1>
        <form action="../actions/actualizarProducto.php" method="POST">
            <label for="id">Id:</label>
            <br>
            <input type= "text" name="id" id="id" required>
            <br>
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
            <button type="submit">Actualizar</button>
        </form>
        <div class="enlaces">
            <a href = "../index.php">Volver al Inicio</a>
            <a href = "../actions/listar.php">Ver tabla de productos</a>
        </div>
    </div>  
</body>
</html>