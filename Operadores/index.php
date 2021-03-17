<?php

/*****operadores de atribuição***/
echo '<h1>Operadores de atribuição</h1>';

//operador = é de atribuição
$nome = "victor";

//operador . concatenação
echo "<p>Meu nome é ".$nome.'</p>';


$valorTotal = 0;

$valorTotal += 10;

$valorTotal -=5;

$valorTotal *= .9;


echo $valorTotal;


/*****operadores de aritméticos***/

$a = 10;
$b = 2;

echo '<h1>Operadores aritiméticos</h1>';

echo $a + $b;

echo '<br/>';

echo $a - $b;

echo '<br/>';


echo $a * $b;

echo '<br/>';


echo $a / $b;

echo '<br/>';

echo $a % $b;


echo '<br/>';

echo $a ** $b;


echo '<h1>Operador de compração</h1>';

$n1 = 10;
$n2 = 12;

$n3 = 10.0;

//maior
var_dump($n1 > $n2);

echo '<br/>';

//menor
var_dump($n1 < $n2);

echo '<br/>';

//operador igualdade de valor
var_dump($n1 == $n3);

echo '<br/>';

//operador igualdade de tipos
var_dump($n1 === $n3);

echo '<br/>';

//diferente valor
var_dump($n1 != $n2);

echo '<br/>';

//diferença tipo
var_dump($n1 !== $n2);



echo '<h2>Spacehip</h2>';

echo '<p>verifica se o valor é menor = -1, igual = 0, maior = 1</p>';

//spaceship

$n1 = 50;
$n2 = 50;

//verifica se o valor é menor = -1, igual = 0, maior = 1
var_dump($n1 <=> $n2);


echo '<h2>Null coalesce</h2>';

echo '<p>Valores nulos</p>';

$a=null;
$b=9;
$c=10;


echo $a ?? $b ?? $c;


echo '<h1>Operador de incremento</h1>';


$a = 10;

$a++;

echo $a;

echo '<br/>';

$b =10;

echo ++$b;

$a--;

echo $a;

echo --$a;



echo '<h1>Precendencia de operador</h1>';

$resultado = (10 + 3) / 2 > 5 && 10 + 5 < 20;


var_dump($resultado);






echo $resultado;
?>

