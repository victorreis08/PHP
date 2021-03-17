<?php
$qualASuaIdade = 10;


$idadeCrianca =12;
$idadeMaior = 18;
$idadeMelhor = 65;

if($qualASuaIdade < $idadeCrianca){
    
    echo "É uma criança";
    
}else if($qualASuaIdade < $idadeMelhor){
    echo "É um adulto";
}else{
    echo "Idoso";
}



//operador ternário

      //if                        //então                //else
echo ($qualASuaIdade < $idadeMaior)? "Menor de idade":"Maior de Idade";

?>
