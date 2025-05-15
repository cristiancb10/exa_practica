<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>CI</th>
                <th>Nombre</th>
                <th>Correo</th>
            </tr>
        </thead>

    <?php if(!empty($vendedores)):?>

        <?php foreach($vendedores as $venders):?>
            <tr>
            <th><?=htmlspecialchars($venders["ci"])?></th>
            <th><?=htmlspecialchars($venders["name"])?></th>
            <th><?=htmlspecialchars($venders["email"])?></th>
        </tr>
        <?php endforeach?>  
    <?php else:?>
        <th colspan= "7"> NO hay vendedores registrados</th>
    <?php endif?>  
    </table> 
</body>
</html>