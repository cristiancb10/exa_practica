<?php
require_once "../models/Book.php";
require_once "../models/Usuario.php";

if($_SERVER["REQUEST_METHOD"] == "GET"){
    
    $user = $_GET["ci"];
    $book = new Book();

    $books = $book->mostrarLibros($user);

    $user_ci = $_GET["ci"];
    $usuarios = new Usuario();
    $lista = $usuarios->selectUsuario($user_ci);

    if(!empty($lista)){
        require_once "../views/book_index.php";
    }
    else{
        header ("Location: ../404.php");
    }
}