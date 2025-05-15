<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear usuario</title>
</head>
<body>
    <h1>Crear usuario</h1>
    <form class="action" href="../controllers/user_create.php" method="POST">
        
        <label for="ci">CI:</label><br>
        <input type="text" name="ci" id="ci" required><br>

        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre" id="nombre" required><br>

        <label for="apePa">Apellido Paterno:</label><br>
        <input type="text" name="apePa" id="apePa" required><br>

        <label for="apeMa">Apellido Materno:</label><br>
        <input type="text" name="apeMa" id="apeMa" required><br>

        <label for="cel">No. celular:</label><br>
        <input type="number" name="cel" id="cel" required><br>

        <label for="correo">Correo:</label><br>
        <input type="email" name="correo" id="correo" required><br>
        <br>
        <button type="submit">Aceptar</button>
        <a href="../controllers/user_index.php">Volver al inicio</a>
    </form>
</body>
</html>