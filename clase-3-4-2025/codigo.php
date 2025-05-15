<?php
$num1 = (float)$_POST['num1'];
$num2 = (float)$_POST['num2'];
$operacion = $_POST['operacion'];


switch($operacion) {
    case 'suma':
        $resultado =  $num1 + $num2;
        break;
    case 'resta':
        $resultado =  $num1 - $num2;
        break;
    case 'multiplicacion':
        $resultado =  $num1 * $num2;
        break;
    case 'division':
        if($num2 == 0){
            $resultado = "No es posible dividir por cero"; 
        }
        else {
            $resultado =  $num1 / $num2;
        }
        break;
    default:
        $resultado = "Operacion no válida";
}
echo "La $operacion de $num1 y $num2 es $resultado"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <a href="programa1.php">Volver a la página principal</a>
</body>
</html>