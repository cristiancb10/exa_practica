<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Eliminar usuario</title>
    <title>Confirmar Eliminación</title>
</head>
    <style>
        button{
            margin: 2px;
        }
        </style>
<body>
    <h1>Confirmar Eliminación</h1>   
    <p>¿Estás seguro de eliminar al usuario?</p>
    <ul>
        <li><strong>ID:</strong> <?= htmlspecialchars($userData['id']) ?></li>
        <li><strong>Nombre:</strong> <?= htmlspecialchars($userData['name']) ?></li>
        <li><strong>Edad:</strong> <?= htmlspecialchars($userData['age']) ?></li>
        <li><strong>Email:</strong> <?= htmlspecialchars($userData['email']) ?></li>
    </ul>
    <form action="user_delete.php" method="POST">
        <input type="hidden" name="id" value="<?= $userData['id'] ?>">
        <button type="submit" >Confirmar Eliminación</button>
    </form>
    <br>
    <button onclick="window.location.href='user_index.php'">Cancelar</button>
</body>
</html>