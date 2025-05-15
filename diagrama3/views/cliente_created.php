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
    <form action="../models/cliente_created.php" method="POST">
        <label for="cId" >Id de cliente: </label>
        <input type="text" name="cId" id="cId" >
        
        <label for="cName" >Nombre: </label>
        <input type="text" name="cName" id="cName" >
                
        <label for="telefonoNo" >Telefono: </label>
        <input type="number" name="telefonoNo" id="telefonoNo" >
                
        <label for="ciudad" >Ciudad: </label>
        <input type="text" name="ciudad" id="ciudad" >
                
        <label for="amtPaid" >Monto pagado: </label>
        <input type="amtPaid" name="amtPaid" id="amtPaid" step="0.01" min="0" >
    </form>
</body>
</html>