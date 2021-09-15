<?php

require_once "funcoes.php";


//campos
$campo = trim($_GET["valor"]);
$entrada = trim($_GET["entrada"]);
$converter = $_GET["converter"];

//verificações de erros
if ($campo == "") {
    echo "O campo valor está vazio, preencha com algum número";
    return;
} else if ($entrada == $converter) {
    echo "O campo entrada não pode ser igual ao campo conversão";
    return;
}
//remover espaços
trim($campo);
//substituir campo virgula pelo ponto
$campo = str_replace(",", ".", $campo);

//cases 
switch ($entrada) {
    //kg
    case 1:
        converterKG($campo, $entrada, $converter);
        break;
    //g
    case 2:
        converterG($campo, $entrada, $converter);
        break;
    //mg
    case 3:
        converterMG($campo, $entrada, $converter);
        break;
    //dag
    case 4:
        converterDAG($campo, $entrada, $converter);
        break;
    //hg
    case 5:
        converterHG($campo, $entrada, $converter);
        break;
    //cg
    case 6:
        converterCG($campo, $entrada, $converter);
        break;
}


?>