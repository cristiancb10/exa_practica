<?php
require_once "../models/Cliente.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $cliente = new Cliente();
    
    $crearC = $cliente ->insertar();

    


}



