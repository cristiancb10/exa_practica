
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de publicaciones</title>
    <style>
        table{
            margin: 10px;
        }
    </style>
</head>
<body>
    <h1>Publicaciones del usuario</h1>
    <a href="post_create.php?user_id=<?= $user_id ?>">Nueva Publicación</a>

    <p><strong>ID del usuario:</strong> <?= htmlspecialchars($user['id']) ?></p>
    <p><strong>Nombre:</strong> <?= htmlspecialchars($user['name']) ?></p>  
    <br>
   <?php 
    if(!empty($posts)): ?>
        <table border="1">
            <tr>
                <th>Id Publicacion</th>                
                <th>Título</th>
                <th>Contenido</th>
                <th>Fecha</th>
                <th>Id usuario</th>

            </tr>

            <?php foreach($posts as $post): ?>
            <tr>           
                <td><?= htmlspecialchars($post['id']) ?></td>
                <td><?= htmlspecialchars($post['title']) ?></td>
                <td><?= htmlspecialchars($post['content']) ?></td>
                <td><?= $post['created_at'] ?></td>
                <td><?= htmlspecialchars($user['id']) ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>Este usuario no tiene publicaciones aún.</p>
    <?php endif; ?>
    <a href="user_index.php">Volver a usuarios</a>
</body>
</html>