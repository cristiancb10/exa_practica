<?php
require_once "../models/Cliente.php";

$cliente = new Cliente();

$clientes = $cliente->mostrar();

require_once "../views/cliente_index.php";

exit();


