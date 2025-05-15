<?php
require_once "../models/Usuario.php";

if($_SERVER["REQUEST_METHOD"] == "GET"){
    
    $user = $_GET["ci"];
    $usuarios = new Usuario();
    $lista = $usuarios->selectUsuario($user);

    if(!empty($lista)){
        include_once "../views/user_update.php";
    }else{
        include_once "../404.php";
        exit;
    }
}
elseif($_SERVER["REQUEST_METHOD"] == "POST"){

    $user = $_POST["ci"];
    $nombre = $_POST["nombre"];
    $apePa = $_POST["apePa"];
    $apeMa = $_POST["apeMa"];
    $cel = $_POST["cel"];
    $correo = $_POST["correo"];

    $usuarios = new Usuario();
    $lista = $usuarios->actualizar($user, $nombre, $apePa, $apeMa, $cel, $correo);

    if($lista === false || $lista < 0 ){
        header ("Location: ../404.php");
        exit;
    }
    else{
        header ("Location: ../controllers/user_index.php");
        exit;
    }
}