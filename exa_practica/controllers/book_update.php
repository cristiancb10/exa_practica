<?php
require_once "../models/Usuario.php";
require_once "../models/Book.php";

if($_SERVER["REQUEST_METHOD"] == "GET"){
    
    $user = $_GET["ci"];
    $usuarios = new Usuario();
    $lista = $usuarios->selectUsuario($user);

    $book = $_GET["id"];
    $books = new Book();
    $libros = $books->selectLibro($book);

    if($libros != null &&  $lista != null){
        include_once "../views/book_update.php";
        exit;
    }else{
        include_once "../404.php";
        exit;
    }
}
elseif($_SERVER["REQUEST_METHOD"] == "POST"){

    $user = $_POST["ci"];
    $usuarios = new Usuario();
    $lista = $usuarios->selectUsuario($user);

    $id = $_POST["id"];
    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $editorial = $_POST["editorial"];
    $ano = $_POST["ano"];
    $cantidad = $_POST["cantidad"];

    $books = new Book();
    $libros = $books->updateLibro($id, $titulo, $autor, $editorial, $ano, $cantidad);

    if($libros <  0 || $lista != null){

        header("Location: book_index.php?ci=$user");
        exit;
    }
    else{
        header("Location: ../404.php");
        exit;
    }

}