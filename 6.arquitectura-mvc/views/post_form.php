<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Nueva Publicación</title>
    <style>
        form {
            max-width: 500px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <h1>Nueva Publicación</h1>
    <form action="post_create.php" method="POST">
        <input type="hidden" name="user_id" value="<?= $_GET['user_id'] ?>">
        
        <label for="title">Título:</label>
        <input type="text" id="title" name="title" required>
        
        <label for="content">Contenido:</label>
        <textarea id="content" name="content" rows="5" required></textarea>
        
        <button type="submit">Publicar</button>
        <a href="user_index.php">Cancelar</a>
    </form>
</body>
</html>