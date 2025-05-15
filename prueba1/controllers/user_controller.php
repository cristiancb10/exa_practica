<?php
require_once '../models/User.php';

$user = new User();
$listaUsers = $user->userAll();

include_once '../views/user_index.php';
exit;

