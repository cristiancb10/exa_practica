<?php
require_once "../models/Book.php";

if($_SERVER["REQUEST_METHOD"] == "GET"){
    
    $user = $_GET["ci"];
    $book = new Book();


}
elseif($_SERVER["REQUEST_METTHOD"] == "POST"){

}