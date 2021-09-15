<?php
require_once "funcoes.php";

$tensao = $_GET["tensaoCorrente"];
$resistencia = $_GET["resistenciaCorrente"];


if ($tensao == "") {
    echo "Campo tensão vazio, coloque algum valor";
    
    return;
} else if ($resistencia == "") {
    echo "Campo resistência vazio, coloque algum valor";

    return;
}else{
    leideohmCorrente($tensao, $resistencia);
}
?>
