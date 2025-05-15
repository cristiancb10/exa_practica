<?php
require_once "../models/Vendedor.php";

$ci = new Vendedor();

$vendedores= $ci->getAll();

require_once "../views/user_index.php";

exit();