<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2">
        <tr>
        <th>ci</th>
        <th>nombre</th>
        <th>apellido paterno</th>
        <th>apellido materno</th>
        <th>correo</th>
        <th>fecha de nacimiento</th>
        <th>fecha de registro</th>
        </tr>
        <?php if(!empty($listaUsers)):?>
        <?php foreach($listaUsers as $user): ?>
            <tr>
            <td><?=htmlspecialchars($user['ci'])?></td>
            <td><?=htmlspecialchars($user['nombre'])?></td>
            <td><?=htmlspecialchars($user['apePaterno'])?></td>
            <td><?=htmlspecialchars($user['apeMaterno'])?></td>
            <td><?=htmlspecialchars($user['correo'])?></td>
            <td><?=htmlspecialchars($user['fechaNac'])?></td>
            <td><?=htmlspecialchars($user['fechaRegistro'])?></td>
            </tr>
        <?php endforeach; ?>
        <?php else: ?>
            <td colspan = "5">no hay registros</td>
            <?php  endif; ?>
    </table>
</body>
</html>