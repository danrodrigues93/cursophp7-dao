<?php

require_once("config.php");

$usuario = new Usuario();

$usuario->loadbyId(4);

$usuario->update("professor", "@123");

echo $usuario;
/*//Criando um novo usuario
$aluno = new Usuario("aluno", "4lun0");

$aluno->insert();

echo $aluno;
*/

//$usuario = new Usuario();
//$usuario->login("user", "12345");//fazer login

//echo $usuario

/*//carrega uma lista de usuarios buscando pelo login
$search = Usuario::search("jo");

echo json_encode($search);
*/

/*//carrega lista de usuarios
$lista = Usuario::getList();

echo json_encode($lista);
*/

/*//carrega um usuario
$root = new Usuario();

$root->loadbyId(3);

echo $root;
*/

/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/

?>