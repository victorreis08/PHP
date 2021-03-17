<?php

require_once 'Main.php';

$cadastro = new Funcionario();

$nome = $_POST["campo-nome"];
$cargo = $_POST["campo-cargo"];
$senha = $_POST["campo-senha"];


$cadastro->cadastrar($nome, $cargo, $senha);

//echo $cadastro->getNome();

header('Location: ../login.php');

?>

