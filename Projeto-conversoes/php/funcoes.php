<?php

//funcções converter
function converterKG($campo, $entrada, $converter) {

    //kg para g
    if ($entrada == 1 && $converter == 2) {
        $conversao = $campo * 1000;

        //formatação para padrão brasileiro
        $formatarResultado = number_format($conversao, 2, ',', '.');
        $formatarCampo = number_format($campo, 2, ',', '.');

        echo $formatarCampo . "kg é igual a " . $formatarResultado . "g";
        //kg para mg
    } else if ($entrada == 1 && $converter == 3) {
        $conversao = $campo * 1000000;

        //formatação para padrão brasileiro
        $formatarResultado = number_format($conversao, 2, ',', '.');
        $formatarCampo = number_format($campo, 2, ',', '.');

        echo $formatarCampo . "kg é igual a " . $formatarResultado . "mg";

        //kg para dag
    } else if ($entrada == 1 && $converter == 4) {
        $conversao = $campo * 100;

        //formatação para padrão brasileiro
        $formatarResultado = number_format($conversao, 2, ',', '.');
        $formatarCampo = number_format($campo, 2, ',', '.');

        echo $formatarCampo . "kg é igual a " . $formatarResultado . "dag";

        //kg para hg
    } else if ($entrada == 1 && $converter == 5) {

        $conversao = $campo * 10000;

        //formatação para padrão brasileiro
        $formatarResultado = number_format($conversao, 2, ',', '.');
        $formatarCampo = number_format($campo, 2, ',', '.');

        echo $formatarCampo . "kg é igual a " . $formatarResultado . "hg";

        //kg para cg
    } else if ($entrada == 1 && $converter == 6) {
        $conversao = $campo * 1000000;

        //formatação para padrão brasileiro
        $formatarResultado = number_format($conversao, 2, ',', '.');
        $formatarCampo = number_format($campo, 2, ',', '.');

        echo $formatarCampo . "kg é igual a " . $formatarResultado . "cg";
    }
}

function converterG($campo, $entrada, $converter) {

    //g para kg
    if ($entrada == 2 && $converter == 1) {
        $conversao = $campo / 1000;

        //formatação para padrão brasileiro
        $formatarResultado = number_format($conversao, 3, ',', '.');
        $formatarCampo = number_format($campo, 2, ',', '.');

        echo $formatarCampo . "g é igual a " . $formatarResultado . "kg";

        //g para mg  
    } else if ($entrada == 2 && $converter == 3) {
        $conversao = $campo * 1000;

        //formatação para padrão brasileiro
        $formatarResultado = number_format($conversao, 2, ',', '.');
        $formatarCampo = number_format($campo, 2, ',', '.');

        echo $formatarCampo . "g é igual a " . $formatarResultado . "mg";

        //g para dag
    } else if ($entrada == 2 && $converter == 4) {
        $conversao = $campo / 10;

        //formatação para padrão brasileiro
        $formatarResultado = number_format($conversao, 1, ',', '.');
        $formatarCampo = number_format($campo, 2, ',', '.');

        echo $formatarCampo . "g é igual a " . $formatarResultado . "dag";

        //g para hg
    } else if ($entrada == 2 && $converter == 5) {
        $conversao = $campo * 10;

        //formatação para padrão brasileiro
        $formatarResultado = number_format($conversao, 2, ',', '.');
        $formatarCampo = number_format($campo, 2, ',', '.');

        echo $formatarCampo . "g é igual a " . $formatarResultado . "hg";

        //g para cg
    } else if ($entrada == 2 && $converter == 6) {
        $conversao = $campo * 100;

        //formatação para padrão brasileiro
        $formatarResultado = number_format($conversao, 2, ',', '.');
        $formatarCampo = number_format($campo, 2, ',', '.');

        echo $formatarCampo . "g é igual a " . $formatarResultado . "cg";
    }
}

function converterMG($campo, $entrada, $converter) {

    //MG para kg
    if ($entrada == 3 && $converter == 1) {
        $conversao = $campo / 1000000;

        //formatação para padrão brasileiro
        $formatarResultado = number_format($conversao, 6, ',', '.');
        $formatarCampo = number_format($campo, 2, ',', '.');

        echo $formatarCampo . "g é igual a " . $formatarResultado . "kg";

        //mg para g  
    } else if ($entrada == 3 && $converter == 2) {
        $conversao = $campo / 100;

        //formatação para padrão brasileiro
        $formatarResultado = number_format($conversao, 2, ',', '.');
        $formatarCampo = number_format($campo, 2, ',', '.');

        echo $formatarCampo . "g é igual a " . $formatarResultado . "mg";

        //mg para dag
    } else if ($entrada == 3 && $converter == 4) {
        $conversao = $campo / 1000;

        //formatação para padrão brasileiro
        $formatarResultado = number_format($conversao, 2, ',', '.');
        $formatarCampo = number_format($campo, 2, ',', '.');

        echo $formatarCampo . "g é igual a " . $formatarResultado . "dag";

        //mg para hg
    } else if ($entrada == 3 && $converter == 5) {
        $conversao = $campo / 100;

        //formatação para padrão brasileiro
        $formatarResultado = number_format($conversao, 2, ',', '.');
        $formatarCampo = number_format($campo, 2, ',', '.');

        echo $formatarCampo . "g é igual a " . $formatarResultado . "hg";

        //mg para cg
    } else if ($entrada == 3 && $converter == 6) {
        $conversao = $campo / 10;

        //formatação para padrão brasileiro
        $formatarResultado = number_format($conversao, 2, ',', '.');
        $formatarCampo = number_format($campo, 2, ',', '.');

        echo $formatarCampo . "g é igual a " . $formatarResultado . "cg";
    }
}

function converterDAG($campo, $entrada, $converter) {
    //dag para kg
    if ($entrada == 4 && $converter == 1) {
        $conversao = $campo / 100;

        $formatarResultado = number_format($conversao, 2, ',', '.');
        $formatarCampo = number_format($campo, 2, ',', '.');

        echo $formatarCampo . "dag é igual a " . $formatarResultado . "kg";


        //dag para g
    } else if ($entrada == 4 && $converter == 2) {
        $conversao = $campo * 10;

        $formatarResultado = number_format($conversao, 2, ',', '.');
        $formatarCampo = number_format($campo, 2, ',', '.');

        echo $formatarCampo . "dag é igual a " . $formatarResultado . "g";

        //dag para mg
    } else if ($entrada == 4 && $converter == 3) {
        $conversao = $campo * 10000;

        $formatarResultado = number_format($conversao, 2, ',', '.');
        $formatarCampo = number_format($campo, 2, ',', '.');

        echo $formatarCampo . "dag é igual a " . $formatarResultado . "mg";

        //dag para hg
    } else if ($entrada == 4 && $converter == 5) {
        $conversao = $campo * 100;

        $formatarResultado = number_format($conversao, 2, ',', '.');
        $formatarCampo = number_format($campo, 2, ',', '.');

        echo $formatarCampo . "dag é igual a " . $formatarResultado . "hg";

        //dag para cg
    } else if ($entrada == 4 && $converter == 6) {
        $conversao = $campo * 1000;

        $formatarResultado = number_format($conversao, 2, ',', '.');
        $formatarCampo = number_format($campo, 2, ',', '.');

        echo $formatarCampo . "dag é igual a " . $formatarResultado . "cg";
    }
}

function converterHG($campo, $entrada, $converter) {

    //hg para kg
    if ($entrada == 5 && $converter == 1) {
        $conversao = $campo / 10000;

        $formatarResultado = number_format($conversao, 5, ',', '.');
        $formatarCampo = number_format($campo, 2, ',', '.');

        echo $formatarCampo . "hg é igual a " . $formatarResultado . "kg";

        //hg para g   
    } else if ($entrada == 5 && $converter == 2) {
        $conversao = $campo / 100;

        $formatarResultado = number_format($conversao, 2, ',', '.');
        $formatarCampo = number_format($campo, 2, ',', '.');

        echo $formatarCampo . "hg é igual a " . $formatarResultado . "g";

        //hg para mg
    } else if ($entrada == 5 && $converter == 3) {
        $conversao = $campo * 100;

        $formatarResultado = number_format($conversao, 2, ',', '.');
        $formatarCampo = number_format($campo, 2, ',', '.');

        echo $formatarCampo . "hg é igual a " . $formatarResultado . "mg";


        //hg para dag
    } else if ($entrada == 5 && $converter == 4) {
        $conversao = $campo / 100;

        $formatarResultado = number_format($conversao, 2, ',', '.');
        $formatarCampo = number_format($campo, 2, ',', '.');

        echo $formatarCampo . "hg é igual a " . $formatarResultado . "g";


        //hg para cg
    } else if ($entrada == 5 && $converter == 6) {
        $conversao = $campo * 10;

        $formatarResultado = number_format($conversao, 2, ',', '.');
        $formatarCampo = number_format($campo, 2, ',', '.');

        echo $formatarCampo . "hg é igual a " . $formatarResultado . "cg";
    }
}

function converterCG($campo, $entrada, $converter) {
    //cg para kg
    if ($entrada == 6 && $converter == 1) {
        $conversao = $campo / 100000;

        $formatarResultado = number_format($conversao, 5, ',', '.');
        $formatarCampo = number_format($campo, 2, ',', '.');

        echo $formatarCampo . "cg é igual a " . $formatarResultado . "kg";
        //cg para g
    } else if ($entrada == 6 && $converter == 2) {
        $conversao = $campo / 100;

        $formatarResultado = number_format($conversao, 2, ',', '.');
        $formatarCampo = number_format($campo, 2, ',', '.');

        echo $formatarCampo . "cg é igual a " . $formatarResultado . "g";

        //cg para mg   
    } else if ($entrada == 6 && $converter == 3) {
        $conversao = $campo * 10;

        $formatarResultado = number_format($conversao, 2, ',', '.');
        $formatarCampo = number_format($campo, 2, ',', '.');

        echo $formatarCampo . "cg é igual a " . $formatarResultado . "mg";

        //cg para dag
    } else if ($entrada == 6 && $converter == 4) {
        $conversao = $campo / 1000;

        $formatarResultado = number_format($conversao, 3, ',', '.');
        $formatarCampo = number_format($campo, 2, ',', '.');

        echo $formatarCampo . "cg é igual a " . $formatarResultado . "dag";

        //cg para hg  
    } else if ($entrada == 6 && $converter == 5) {
        $conversao = $campo / 10;

        $formatarResultado = number_format($conversao, 2, ',', '.');
        $formatarCampo = number_format($campo, 2, ',', '.');

        echo $formatarCampo . "cg é igual a " . $formatarResultado . "hg";
    }
}

//funcções area
function areaQuadrado($valor, $medida) {
    $area = $valor * $valor;
    $area .= $medida;
    echo $area . "<sup>2</sup>";
}

function areaTriangulo($base, $altura) {
    $area = $base * $altura / 2;

    echo $area;
}

function areaCirculo($raio) {
    $area = pow($raio, 2);

    $area = 3.14 * $area;

    echo $area;
}

//Funções Lei de Ohm

function leideohmVolt($corrente, $resistencia) {
    $volt = $corrente * $resistencia;

    echo $volt."V";
}

function leideohmCorrente($tensao, $resistencia) {
    $corrente = $tensao / $resistencia;
    
    echo $corrente."A";
}

function leideohmResistencia($tensao, $corrente) {
    $resistencia = $tensao / $corrente;

    echo $resistencia."&#8486;";
}
?>

