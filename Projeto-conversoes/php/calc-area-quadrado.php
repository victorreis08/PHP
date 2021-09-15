<?php
    require_once "funcoes.php";
    
    $campo = trim($_GET["valor"]);
    $medida = $_GET["medida"];
    
    if($campo == ""){
        echo "Campo valor vazio";
        
        return;
    }else{
        areaQuadrado($campo,$medida);
    }
?>

