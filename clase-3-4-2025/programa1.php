<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculadora</title>
</head>
<body>
    
    <form action = "codigo.php" method="POST">
        <label for="num1">Numero 1 </label>
        <input type="number" name="num1" id= "num1" required>
        <label for="num2">Numero 2 </label>
        <input type="number" name="num2" id= "num2"required>

        <select name="operacion" >
            <option value = "suma">suma</option>
            <option value = "resta">restar</option>
            <option value = "multiplicacion">multiplicar</option>
            <option value = "division">dividir</option>
        </select>

        <button type="submit">
            calcular
        </button>
</form>
</body>
</html>