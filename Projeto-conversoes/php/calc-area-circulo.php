<?php
require_once "funcoes.php";

$raio = $_GET["raio"];

if($raio == ""){
    echo "O campo raio está vazio";
    return;
}else{
    areaCirculo($raio);
}
?>
