<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar libro</title>
</head>
<body>
    <h1>Eliminar libro</h1>
    <label>CI de Usuario: <?=htmlspecialchars($lista["ci"])?></label>
    <p>¿Esta seguro de eliminar el libro <?=htmlspecialchars($books["titulo"]) ?>?</p>

    <form class="action" href="../controllers/book_delete.php" method = "POST">
        <input type="hidden" name="id" id="id" value="<?=htmlspecialchars($books["id"])?>">
        <input type="hidden" name="ci" id="ci" value="<?=htmlspecialchars($lista["ci"])?>">

        <label for="id_book">ID:</label><br>
        <input type="text" name="id_book" id="id_book" value="<?=htmlspecialchars($books["id"])?>" disabled><br>

        <label for="titulo">Titulo:</label><br>
        <input type="text" name="titulo" id="titulo" value="<?=htmlspecialchars($books["titulo"])?>" disabled><br>

        <label for="autor">Autor:</label><br>
        <input type="text" name="autor" id="autor" value="<?=htmlspecialchars($books["autor"])?>" disabled><br>

        <label for="editorial">Editorial:</label><br>
        <input type="text" name="editorial" id="editorial" value="<?=htmlspecialchars($books["editorial"])?>" disabled><br>

        <label for="ano">Año:</label><br>
        <input type="number" name="ano" id="ano" value="<?=htmlspecialchars($books["ano"])?>" disabled><br>
        
        <label for="cantidad">Cantidad:</label><br>
        <input type="number" name="cantidad" id="cantidad" value="<?=htmlspecialchars($books["cantidad"])?>" disabled><br>

        <label for="fechaReg">Fecha de Registro:</label><br>
        <input type="text" name="fechaReg" id="fechaReg" value="<?=htmlspecialchars($books["fechaReg"])?>" disabled><br>

        <label for="fechaAct">Fecha de actualización:</label><br>
        <input type="text" name="fechaAct" id="fechaAct" value="<?=htmlspecialchars($books["fechaAct"])?>" disabled><br><br>
        
        <button type="submit">Aceptar</button>
        
        <a href="../controllers/book_index.php?ci=<?=htmlspecialchars($lista["ci"])?>">Volver a lista de libros</a>
    </form>
</body>
</html>