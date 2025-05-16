<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar datos de libro</title>
</head>
<body>
    <h1>Actualizar datos del libro</h1>
    <p>¿Esta seguro que desea actualizar los datos de libro <?= htmlspecialchars($libros["id"]) ?>?</p>
    
    <label>CI de usuario: <?= htmlspecialchars($libros["id"])?> </label><br><br>
    <label>ID de libro: <?= htmlspecialchars($libros["id"])?> </label><br>
    
    <form class="action" href="../controllers/book_update.php" method="POST">
        <input type="hidden" name="ci" id="ci" value="<?=htmlspecialchars($lista["ci"])?>"></input> 
        <input type="hidden" name="id" id="id" value="<?=htmlspecialchars($libros["id"])?>"></input><br>

        <label for="titulo">Título:</label><br>
        <input type="text" name="titulo" id="titulo" value="<?=htmlspecialchars($libros["titulo"])?>"></input><br>

        <label for="autor">Autor:</label><br>
        <input type="text" name="autor" id="autor" value="<?=htmlspecialchars($libros["autor"])?>"></input><br>

        <label for="editorial">Editorial:</label><br>
        <input type="text" name="editorial" id="editorial" value="<?=htmlspecialchars($libros["editorial"])?>"></input><br>

        <label for="ano">Año:</label><br>
        <input type="number" name="ano" id="ano" value="<?=htmlspecialchars($libros["ano"])?>"></input><br>

        <label for="cantidad">Cantidad:</label><br>
        <input type="number" name="cantidad" id="cantidad" value="<?=htmlspecialchars($libros["cantidad"])?>"></input><br>
        <br>
        <button type="submit">Aceptar</button>
        <a href="../controllers/book_index.php?ci=<?=htmlspecialchars($lista["ci"])?>">Volver a la lista de libros</a>
    </form>
</body>
</html>