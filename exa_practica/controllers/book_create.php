<?php
require_once "../models/Book.php";
require_once "../models/Usuario.php";

if($_SERVER["REQUEST_METHOD"] == "GET")
{
    $user_ci = $_GET["ci"];
    $usuarios = new Usuario();
    $lista = $usuarios->selectUsuario($user_ci);

    if($lista != null){
        include_once "../views/book_create.php";
    }
    else
    {
        header("Location: ../404.php");
    }    
}
elseif($_SERVER["REQUEST_METHOD"] == "POST"){
    $ci = $_POST["ci"];
    $usuarios = new Usuario();
    $lista = $usuarios->selectUsuario($ci);

    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $editorial = $_POST["editorial"];
    $ano = $_POST["ano"];
    $cantidad = $_POST["cantidad"];

    $book = new Book();  
    $books = $book->crear($ci, $titulo, $autor, $editorial, $ano, $cantidad);

    if($books != null)
    {
        header("Location: book_index.php?ci=$ci");
    }
    else{
        header("Location: ../404.php");
    }
}