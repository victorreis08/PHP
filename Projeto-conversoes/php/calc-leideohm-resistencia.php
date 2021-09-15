<?php
require_once "funcoes.php";

$tensao = $_GET["tensao"];
$corrente = $_GET["corrente"];

if($tensao == ""){
    echo "Campo tensão vazio, coloque algum valor";
    
    return;
    
}else if($corrente == ""){
    echo "Campo corrente vazio, coloque algum valor";
    
    return;
}else{
   leideohmResistencia($tensao, $corrente);
}

?>

