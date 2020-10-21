<?php

require_once("config.php");

$sql=new Sql();

/*
$usuarios = $sql->select("SELECT * FROM tb_usuario");
var_dump($usuarios);
echo json_encode($usuarios);
*/

//UM REGISTRO
/*
$root = new Usuario();
$root->loadById(3);
echo $root;
*/

//LISTA
/*
$lista = Usuario::getList();
echo json_encode($lista);
*/


//FILTRO COM LIKE
/*
$filtro = Usuario::search("1");
echo json_encode($filtro);
*/

//LOGIN E SENHA
/*
$usuario = new Usuario();
$usuario->login("login1", "12");
echo $usuario;
*/

//INSERT
/*
$aluno = new Usuario("aluno", "123456");
//$aluno->setLogin("aluno");
//$aluno->setSenha("12345");
$aluno->insert();
echo $aluno;
*/

//UPDATE
/*$usuario = new Usuario();
$usuario->loadById(27);
$usuario->update("professor", "78901");
echo $usuario;*/

//DELETE
$usuario = new Usuario();
$usuario->loadById(26);
$usuario->delete();
echo $usuario;

?>