<?php
include_once "../models/Usuario.php";

if($_SERVER["REQUEST_METHOD"] == "GET"){

    include_once "../views/user_create.php";
    exit;
}
elseif($_SERVER["REQUEST_METHOD"] == "POST"){

    $ci = $_POST["ci"];
    $nombre = $_POST["nombre"];
    $apePa = $_POST["apePa"];
    $apeMa = $_POST["apeMa"];
    $cel = $_POST["cel"];
    $correo = $_POST["correo"];

    $usuarios = new Usuario();
    $lista = $usuarios->crear($ci, $nombre, $apePa, $apeMa, $cel, $correo);

    if($lista){
        header ("Location: ../controllers/user_index.php");
    }
    else{
        header ("Location: ../404.php");
    }
    exit;
}