<?php
require_once "../models/Book.php";
require_once "../models/Usuario.php";

if($_SERVER["REQUEST_METHOD"] == "GET"){

    $user_ci = $_GET["ci"];
    $usuarios = new Usuario();
    $lista = $usuarios->selectUsuario($user_ci);

    $libro = $_GET["id"];
    $book = new Book();
    $books = $book->selectLibro($libro);
    
    if($books != null &&  $lista != null){
        include_once "../views/book_delete.php";
        exit;
    }else{
        include_once "../404.php";
        exit;
    }
}elseif($_SERVER["REQUEST_METHOD"] == "POST"){

    $user_ci = $_POST["ci"];
    $usuarios = new Usuario();
    $lista = $usuarios->selectUsuario($user_ci);

    $libro = $_POST["id"];
    $book = new Book();
    
    $books = $book->eliminar($libro);

    header ("Location: ../controllers/book_index.php?ci=$user_ci");
}