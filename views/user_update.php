<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar usuario</title>
</head>
<body>
    <h1>Actualizar usuario</h1>
    <p>¿Esta seguro de actualizar los datos del usuario <?=htmlspecialchars($lista["ci"])?> ?</p>
    <form class="action" href="../controllers//user_update.php" method="POST">
        <input type="hidden" name="ci" id="ci" value="<?=htmlspecialchars($lista['ci'])?>"><br>

        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre" id="nombre" value="<?=htmlspecialchars($lista['nombre'])?>"><br>

        <label for="apePa">Apellido Paterno:</label><br>
        <input type="text" name="apePa" id="apePa" value="<?=htmlspecialchars($lista['apePa'])?>"><br>

        <label for="apeMa">Apellido Materno:</label><br>
        <input type="text" name="apeMa" id="apeMa" value="<?=htmlspecialchars($lista['apeMa'])?>"><br>

        <label for="cel">No. celular:</label><br>
        <input type="number" name="cel" id="cel" value="<?=htmlspecialchars($lista['cel'])?>"><br>

        <label for="correo">Correo:</label><br>
        <input type="email" name="correo" id="correo" value="<?=htmlspecialchars($lista['correo'])?>"><br>
        <br>
        <button type="submit">Aceptar</button>
        <a href="../controllers/user_index.php" >Volver al inicio</a>
    </form>
</body>
</html>