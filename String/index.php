<?php


echo '<h1>Varievel com aspas duplas</h1>';
$nome = "Victor";


$nome2 = 'Reis';

//var_dump($nome,$nome2);


echo "ABC $nome";

echo '<h1>Funções para alterar o texto</h1>';

$nome = "joão rangel";

$nome = strtoupper($nome);

echo $nome;

echo "<br/>";

$nome = strtolower($nome);

echo $nome;

echo "<br/>";

$nome = ucwords($nome);

echo $nome;

echo "<br/>";

$palabra = "isdfnasid ifaoindfas iasdfoaisn fifnf aas";

$palabra = ucfirst($palabra);

echo $palabra;


echo '<h1>Função str_replace para trocar letras</h1>';

$empresa = "Empresa";

echo $empresa;

$empresa = str_replace("a", "b", $empresa);

echo '<br/>';

echo $empresa;


echo '<h1>Função strpos para localizar a posição da palavra</h1>';

$frase = "A repetição é mãe da retenção";

$palavra = "mãe";
//antes da palavra
$q = strpos($frase, $palavra);


$texto = substr($frase, 0, $q);

var_dump($texto);

$texto2 = substr($frase,$q + strlen($palavra), strlen($frase));

echo '<br/>';

var_dump($texto2)



?>
