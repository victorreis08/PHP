<?php
require_once "funcoes.php";

$base = trim($_GET["base"]);
$altura = trim($_GET["altura"]);


if($base == ""){
    echo "Campo base vazio, coloque algum valor";
    
    return;
    
}else if($altura == ""){
    echo "Campo altura vazio, coloque algum valor";
    
    return;
}else{
    areaTriangulo($base, $altura);
}




?>