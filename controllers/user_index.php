<?php
require_once "../models/Connection.php";
require_once "../models/Usuario.php";

$usuario = new Usuario();
$lista = $usuario->mostrarLista();

require_once "../views/user_index.php";
exit;