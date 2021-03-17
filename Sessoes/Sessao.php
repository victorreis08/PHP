<?php
require_once("Sessao-inicio.php");


$_SESSION["nome"]  = "Victor";

echo $_SESSION["nome"];

//session_unset($_SESSION["nome"]);//limpa as variaveis


//session_destroy();//destroi as variaveis
?>

