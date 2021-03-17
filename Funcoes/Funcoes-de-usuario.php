<?php
function ola(){
    return "Olá mundo";
}


//echo ola();

$frase = ola();
echo strlen($frase);


echo "<h1>Exemplo 02</h1>";



function salario(){
    
    return 946.00;
    
}

echo "José recebeu 3 salários " .(salario()*3);
?>
