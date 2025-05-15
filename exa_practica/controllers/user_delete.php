<?php
include_once "../models/Usuario.php";

if($_SERVER["REQUEST_METHOD"]  == "GET"){


    $usuarios =  new Usuario();
    $user = $_GET['ci'];
    $lista = $usuarios->selectUsuario($user);

    if($lista === null){
        include_once "../404.php";
        exit;
    }
    else{
        include_once "../views/user_delete.php";
    }
}
elseif($_SERVER["REQUEST_METHOD"] == "POST"){

    $usuarios =  new Usuario();
    $user = $_POST['ci'];
    $usuarios->eliminar($user);

    header ("Location: user_index.php ");
    exit;
}