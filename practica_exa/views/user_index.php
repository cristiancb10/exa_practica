<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de usuarios</title>
</head>
<body>
    <h1>Usuarios</h1>
    <table border="2">
        <tr>
            <th>CI</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Celular</th>
            <th>Correo</th>
            <th>Fecha de registro</th>
            <th>Fecha de actualización</th>
            <th>Eliminar</th>     
            <th>Actualizar</th> 
            <th>Libros</th> 
        </tr>
        <?php if(!empty($lista)): ?>
        <?php foreach($lista as $dato): ?>
            <tr>
                <td><?=htmlspecialchars($dato["ci"])?></td>
                <td><?=htmlspecialchars($dato["nombre"])?></td>
                <td><?=htmlspecialchars($dato["apePa"])?></td>
                <td><?=htmlspecialchars($dato["apeMa"])?></td>
                <td><?=htmlspecialchars($dato["cel"])?></td>
                <td><?=htmlspecialchars($dato["correo"])?></td>
                <td><?=htmlspecialchars($dato["fechaReg"])?></td>
                <td><?=htmlspecialchars($dato["fechaAct"])?></td>
                <td>
                    <a href="../controllers/user_delete.php?ci=<?=htmlspecialchars($dato['ci'])?>" class="button" >Eliminar</a>
                </td>
                <td>
                    <a href="../controllers/user_update.php?ci=<?=htmlspecialchars($dato['ci'])?>" class="button" >Actualizar</a>
                </td>
                <td>
                    <a href="../controllers/book_index.php?ci=<?=htmlspecialchars($dato['ci'])?>" class="button" >Ver Libros</a>
                </td>
            </tr>
        <?php endforeach; ?>;
        <?php  else: ?>
            <tr>
                <td colspan="10" >Ningun usuario registrado</td>
            </tr>
        <?php endif; ?>
    </table>
        </tbody>
        <br>
    <a href="../controllers/user_create.php" >Crear nuevo usuario</a>
</body>
</html>