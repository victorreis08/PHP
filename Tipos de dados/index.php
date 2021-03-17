<?php

    //string
    $nome = "Victor";
    $sobrenome = "Reis";
    
    $nomeCompleto = $nome ." ". $sobrenome;
    
    echo $nomeCompleto;
    
    $site = 'www.google.com.br';
    
    //inteiro
    $ano = 2021;
    //float
    $salario = 5000.99;
    //bolean
    $bolean = false;
    
    
    //array
    $frutas = array("Abacaxi", "Laranja", "Manga");
    
    //echo $frutas[2];
    
    
    //objeto
    $nascimento = new DateTime(); 
    
    //var_dump($nascimento);
    
    
   //arquivos 
    $arquivo = fopen("index.php", "r");
    
    //var_dump($arquivo);
    
    //variavel valor nulo, ausência de valor
    $nulo = null;
?>