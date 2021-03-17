<?php



//session_id("m35j8a5ls00933bns3fckip1jg");

require_once("Sessao-inicio.php");

//criar novo id de sessão
session_regenerate_id();

echo session_id();


var_dump($_SESSION);
?>

