<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Usuario</title>
</head>
<body>
    <h1>Usuario</h1>
    <p>¿Esta seguro que desea eliminar al usuario <?=htmlspecialchars($lista["ci"]) ?>?</p>
    <label for="nombre">Nombre:</label><br>
    <input type="text" name="nombre" id="nombre" value="<?=$lista['nombre'] ?>" disabled><br>

    <label for="apePa">Apellido Paterno:</label><br>
    <input type="text" name="apePa" id="apePa" value="<?=$lista['apePa'] ?>" disabled><br>

    <label for="apeMa">Apellido Materno:</label><br>
    <input type="text" name="apeMa" id="apeMa" value="<?=$lista['apeMa'] ?>" disabled><br>

    <label for="cel">No. celular:</label><br>
    <input type="number" name="cel" id="cel" value="<?=$lista['cel'] ?>" disabled><br>

    <label for="fechaReg">Fecha de registro:</label><br>
    <input type="text" name="fechaReg" id="fechaReg" value="<?=$lista['fechaReg'] ?>" disabled><br>

    <label for="fechaAct">Fecha de registro:</label><br>
    <input type="text" name="fechaAct" id="fechaAct" value="<?=$lista['fechaAct'] ?>" disabled><br>
    <br>
    <form class="action" href="../controllers/user_delete.php" method = "POST">
        <input type="hidden"  name="ci" id="ci" value="<?=$lista['ci'] ?>">
        <button type="submit">Eliminar</button>
    </form>
</body>
</html>