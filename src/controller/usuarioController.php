<?php
require_once("src/model/usuarios.php");
$user=new usuarios();
$usuarios=$user->get_usuarios();
require_once("src/view/usuarios.php");
?>