<?php


echo "<h1>Passagem de parâmetro por valor</h1>";
$a = 10;

function trocarValor($a){
    
    $a+=50;
    
    return $a;
}

echo trocarValor($a);
echo"<br>";
echo trocarValor($a);
echo"<br>";
echo $a;


echo "<h1>Passagem de parâmetro por Referência</h1>";
$a = 10;

function trocarValor2(&$b){
    
    $b+=50;
    
    return $b;
}


echo trocarValor2($a);
echo"<br>";
echo trocarValor2($a);
echo"<br>";
echo $a;

echo "<h1>Passagem de parâmetro por Referência 02</h1>";


$pessoa = array(
    "nome" => "João",
    "idade" => 30
);

foreach ($pessoa as &$value){
    
    if(gettype($value) === 'integer') $value =10;
    
    echo $value. "<br/>";
}

print_r($pessoa);
?>

