<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de libros</title>
</head>
<body>
    <h1>Lista de libros</h1>
    <label>CI: <?= htmlspecialchars($lista["ci"]) ?> </label><br>
    <label>Nombre: <?= htmlspecialchars($lista["nombre"]) ?></label><br>
    <label>Apellido Paterno: <?= htmlspecialchars($lista["apePa"]) ?></label><br>
    <label>Apellido Materno: <?= htmlspecialchars($lista["apeMa"]) ?></label><br><br>
    <tbody>
        <table border="2">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Autor</th>
                    <th>Editorial</th>
                    <th>Año</th>
                    <th>Cantidad</th>
                    <th>Fecha de Registro</th>
                    <th>Fecha de Actualizacion</th>  
                    <th>Eliminar Libro</th>  
                    <th>Actualizar Libro</th>                                       
                </tr>
            </thead>
            <?php if(!empty($books)){ ?>
            <?php foreach($books as $dato): ?>
                <tr>
                    <td><?=htmlspecialchars($dato["id"]) ?></td>
                    <td><?=htmlspecialchars($dato["titulo"])?></td>
                    <td><?=htmlspecialchars($dato["autor"])?></td>
                    <td><?=htmlspecialchars($dato["editorial"])?></td>
                    <td><?=htmlspecialchars($dato["ano"])?></td>
                    <td><?=htmlspecialchars($dato["cantidad"])?></td>
                    <td><?=htmlspecialchars($dato["fechaReg"])?></td>
                    <td><?=htmlspecialchars($dato["fechaAct"])?></td>
                    <td>
                        <a href="../controllers/book_delete.php?id=<?=htmlspecialchars($dato["id"])?>&ci=<?= htmlspecialchars($lista["ci"]) ?>">Eliminar</a> 
                    </td>
                    <td>
                        <a href="../controllers/book_update.php?id=<?=htmlspecialchars($dato["id"])?>&ci=<?= htmlspecialchars($lista["ci"]) ?>">Actualizar</a> 
                    </td>
                </tr>
            <?php endforeach ?>
            <?php } else { ?>
                <tr>
                    <td colspan = "8"> Ningun libro registrado</td>
                </tr>
            <?php }?>
        </table>
    </tbody>
    <br>
    <a href="../controllers/book_create.php?ci=<?=htmlspecialchars($lista["ci"])?>">Registrar nuevo libro</a>
    <a href="../controllers/user_index.php">Volver al inicio</a>
</body>
</html>