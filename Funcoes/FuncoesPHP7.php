<?php

//todos os parametros serão inteiros
function soma(int ...$valores){
    
    //somar todos os parametros
    return array_sum($valores);
    
}

echo soma(2,2);
echo "<br/>";
echo  soma(30,30);
echo "<br/>";
echo soma(1.5,3.2);
echo "<br/>";

echo "<h1>Exemplo 2</h1>";

function converter(int ...$valores): string{
    
    //somar todos os parametros
    return array_sum($valores);
    
}

var_dump(converter(2,2));
echo "<br/>";
var_dump(converter(30,30));
echo "<br/>";
var_dump(converter(1.5,3.2));
echo "<br/>";
?>
