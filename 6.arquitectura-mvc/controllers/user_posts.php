<?php

/*if($_SERVER['REQUEST_METHOD']== "GET"){
    require_once "../models/Post.php";
    $user_id = $_GET["id"];

    $post = new Post();
    $posts = $post->userPosts($user_id);

    if($posts){
        include_once "../views/post_list.php";
        exit;
    }else{
        include_once "../views/404.php";
        exit;
    }
}*/
if($_SERVER['REQUEST_METHOD']== "GET"){
    require_once "../models/Post.php";
    require_once "../models/User.php"; // <-- Agregado

    $user_id = $_GET["id"];

    $post = new Post();
    $posts = $post->userPosts($user_id);

    $userModel = new User(); // <-- Agregado
    $user = $userModel->getFirst($user_id); // <-- Agregado

    if($posts || $user){ // <-- Aseguramos que haya info
        include_once "../views/post_list.php";
        exit;
    }else{
        include_once "../views/404.php";
        exit;
    }
}