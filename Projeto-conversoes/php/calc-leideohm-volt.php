<?php
require_once "funcoes.php";

$resistencia = $_GET["resistenciaVolt"];
$corrente = $_GET["correnteVolt"];


if($corrente == ""){
    echo "Campo corrente vazio, coloque algum valor";
    
    return;
    
}else if($resistencia == ""){
    echo "Campo resistência vazio, coloque algum valor";
    
    return;
}else{
    leideohmVolt($resistencia, $corrente);
}

?>

