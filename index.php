<?php 

require_once("config.php");

//Carrega um usuario
//$root = new Usuario();
//$root->loadById(1);
//echo $root;


//Carregar uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carregar um usuario com login
$usuario = new Usuario();
$usuario->login("root", "111");

echo $usuario;

 ?>