<?php

echo "<h1>Exemplo 1</h1>";

function test($callback) {
    //processo lento
    $callback();
}

test(function() {
    echo "terminou";
});


echo "<h1>Exemplo 2</h1>";

$fn = function($a){
    var_dump($a);
};

$fn("oi");
?>
