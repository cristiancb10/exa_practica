<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO</title>
    <link rel="stylesheet" href= "stylephp.css">
</head>
<body>
    <div class="formulario1">
    <form action="conexion.php" method="POST">
    <h1>Formulario de registro </h1>
        <div class="form-field">
            <label for="name">Nombre:</label>
            <input type= "text" name="name" id="name">
        </div>
        <br>
        <div class="form-field">
            <label for="email">Correo:</label>
            <input type= "email" name="email" id="email">
        </div>
        <br>
        <div class="form-field">
            <label for="age">Edad:</label>
            <input type= "age" name="age" id="age">
        </div>
        <br>
        <div class="form-field">
            <label for="password">Contraseña:</label>
            <input type= "password" name="password" id="password">
        </div>
        <br>
        <div class="form-field">
            <label for="password">Confirmar contraseña:</label>
            <input type= "password" name="confir_password" id="confir_password">
        </div>
        <br>
        <button type="submit">Enviar</button>
        <a href = "listar.php">Ver datos registrados</a>     
    </div>
    </form>
</body>
</html>