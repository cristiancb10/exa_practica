<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listado de usuarios</title>
    <style>
        table {
            width: auto;
        }
        table, th, td {
            border: 1.5px solid black; /*//#ddd*/
        }
        th, td {
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>Lista de usuarios</h1>   
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Email</th>
                <th>Acciones</th>
                <th>Post</th>
            </tr>
        </thead>
        <tbody>
        <?php if (!empty($users)): ?>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= htmlspecialchars($user['id']) ?></td>
                <td><?= htmlspecialchars($user['name']) ?></td>
                <td><?= htmlspecialchars($user['age']) ?></td>
                <td><?= htmlspecialchars($user['email']) ?></td>
                <td>
                    <a href="user_update.php?id=<?= $user['id'] ?>">Actualizar</a>  
                    <a href="user_delete.php?id=<?= $user['id'] ?>">Eliminar</a>
                </td>
                <td>
                    <a href="user_posts.php?id=<?= $user['id'] ?>">Ver</a>  
                    <a href="post_create.php?user_id=<?= $user['id'] ?>">Publicar</a>
                </td>
            </tr>
            <?php endforeach; ?>
            <?php else: ?>
            <tr>
                <td colspan="4">No hay usuarios registrados.</td>
            </tr>
            <?php endif; ?>
        </tbody>
    </table>
    <br>
    <a href="user_store.php">Registrar nuevo usuario</a>
</body>
</html>