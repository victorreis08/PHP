<?php

//tenta rodar mesmo com arquivo errado ou inexistente
//include 'funcoes.php';

//obriga a existencia do arquivo e que esteja correto
//require "funcoes.php";

//traga somente uma vez
require_once "funcoes.php";

$resultado =  soma(10, 20);

echo $resultado;


?>

