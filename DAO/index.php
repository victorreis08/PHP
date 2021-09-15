<?php

require_once("config.php");


/*
 *teste de conexão e fazendo uma seleção no banco de dados
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/


/*carrega um usuário
$root = new Usuario();

$root->loadById(6);

echo $root;*/

/*carrega uma lista de usuários 

$lista = usuario::getList();

foreach ($lista as $row){
    echo "<p>".$row['login']."</p>";
}*/

/*pesquisa
$search = Usuario::search("jo");

foreach ($search as $row){
    echo "<p>".$row['login']."</p>";
}*/

/*
 * Login
$login = new Usuario();

$login->login("victor", "12345");

echo $login;*/

/*cadastro

$aluno = new Usuario("Aluno", "Senha");

$aluno->insert();

echo $aluno;
*/

/*update
$usuario = new Usuario();

$usuario->loadById(7);

$usuario->update("Bla", "1234");

echo $usuario;*/


/*delete

$usuario = New Usuario();

$usuario->loadById(7);

$usuario->delete();


echo $usuario;*/





?>

