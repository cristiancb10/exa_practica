<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>
    <h1>Agregar cliente</h1>

        <?php foreach ($clientes as $cliente ): ?>-->
            <label for="cId" >Id de cliente: <?=htmlspecialchars($cliente['cId'])?></label>
            <label for="cName" >Nombre: <?=htmlspecialchars($cliente['cName'])?></label> 
            <label for="telefonoNo" >Telefono: <?=htmlspecialchars($cliente['telefonoNo'])?></label>
            <label for="ciudad" >Ciudad: <?=htmlspecialchars($cliente['ciudad'])?></label>               
            <label for="amtPaid" >Monto pagado: <?=htmlspecialchars($cliente['amtPaid'])?> </label>
        <?php endforeach;?>
</body>
</html>