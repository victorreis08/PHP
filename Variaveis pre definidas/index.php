<?php
    //GET pega o valor da url ?a=123
    $nome = (int)$_GET["a"];
    
    //var_dump($nome);
    
    
    //PEGAR IP USUARIO
    $ip = $_SERVER["REMOTE_ADDR"];
    
    
    //nome do arquivo
    $name = $_SERVER["SCRIPT_NAME"];
    
    echo $ip;
    
    echo $name;
?>
