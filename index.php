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
//$usuario = new Usuario();
//$usuario->login("root", "111");
//echo $usuario;

/*
criando um novo usuario
$aluno = new Usuario("aluno2", "senha2");
$aluno->insert();
echo $aluno;
*/

/*
//alterar usuario
$usuario = new Usuario();
$usuario->loadById(2);
$usuario->update("professor", "99999");
echo $usuario;
*/

//delete usuarios
$usuario = new Usuario();

$usuario->loadById(3);

$usuario->delete();

echo $usuario;

 ?>