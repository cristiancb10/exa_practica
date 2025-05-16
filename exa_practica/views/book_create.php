<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar libro</title>
</head>
<body>
    <h1>Registar libro</h1>
    <label>ID de usuario: <?=htmlspecialchars($lista["ci"])?></label><br>
    <label>Nombre completo: <?=htmlspecialchars($lista["nombre"])?> <?=htmlspecialchars($lista["apePa"])?> <?=htmlspecialchars($lista["apeMa"])?></label>

    <form class="action" href="../controllers/book_create.php" method="POST">
        <input type="hidden" name="ci" id="ci"  value="<?=htmlspecialchars($lista['ci'])?>"><br>
        
        <label for="titulo">Título:</label><br>
        <input type="text" name="titulo" id="titulo" required><br>

        <label for="autor">Autor:</label><br>
        <input type="text" name="autor" id="autor" required><br>

        <label for="editorial">Editorial:</label><br>
        <input type="text" name="editorial" id="editorial" required><br>

        <label for="ano">Año:</label><br>
        <input type="number" name="ano" id="ano" required><br>

        <label for="cantidad">Cantidad:</label><br>
        <input type="number" name="cantidad" id="cantidad" required><br>
        <br>
        <button type="submit">Aceptar</button>
        <a href="../controllers/book_index.php">Volver a lista de libros</a>
    </form>
</body>
</html>