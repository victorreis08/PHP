<?php
require_once "header.php";
?>

<main>
    <section class="container-fluid banner-pagina">
        <h1 class="titulo-banner">Elétrica</h1>
    </section>

    <section class="container secao-textos">
        <div class="row linha-texto">
            <div class="col-lg-7">
                <h2 class="titulo-pagina">O Que é Tensão elétrica (V)</h2>
                <p class="texto-pagina">Tensão elétrica, também conhecida mais
                    popularmente como voltagem é a grandeza que mede a diferença de
                    potencial elétrico entre dois pontos (DDP).
                </p>
                <p class="texto-pagina">Unidade de medida (V) = Volts. 
                    Em homenagem a Alessandro Volta, criador da Pilha Voltaica.</p>
                <div>
                    <img class="img-fluid" src="img/tomada-1.jpg">
                </div>
            </div>

            <!--Públicidade-->
            <div class="col-lg-5">

            </div>
        </div>

        <div class="row linha-texto">
            <div class="col-lg-7">
                <h2 class="titulo-pagina">O Que é Corrente (A)</h2>
                <p class="texto-pagina">A corrente elétrica é o fluxo de elétrons
                    em um condutor quando submetido a uma tensão.</p>
                <p class="texto-pagina">Unidade de medida (A) = Ampére.
                    Em homenagem a André-Marie Ampère, físico francês, estudou as
                    propriedades do eletromagnetismo.
                </p>
                <h3 class="subtitulo-pagina">Corrente Alternada (CA)</h3>
                <p class="texto-pagina">A corrente alternada, altera seu sentido
                    de circulação dentro do circuito.
                </p>
                <p class="texto-pagina">Como mostra a imagem abaixo, a corrente
                    varia sua intensidade para um maximo positivo (+) até o
                    maximo negativo (-), dentro de um intervalo de tempo.
                </p>
                <div>
                    <img class="img-fluid" src="img/corrente-alternada.JPG">

                </div>
                <p class="texto-pagina">Os principais dispositivos que utilizam 
                    corrente alternada são os eletrodomésticos.
                </p>

                <h3 class="subtitulo-pagina">Corrente Contínua (CC)</h3>
                <p class="texto-pagina">A corrente contínua é a corrente que 
                    quando percorre um circuito não altera seu sentido. Sendo assim
                    a corrente contínua possui as polaridades positiva (+) e negativa (-).
                </p>
                <p class="texto-pagina">Na imagem abaixo, tem um exemplo de como
                    funciona a corrente contínua, e como ela mantem uma constância:</p>
                <div>
                    <img class="img-fluid" src="img/corrente-continua.JPG">
                </div>
                <p class="texto-pagina">Os principais dispositivos que utilizam 
                    corrente contínua são: Fontes, pilhas, baterias, entre outros.
                </p>

            </div>
            <!--Públicidade-->
            <div class="col-lg-5">

            </div>
        </div>
        <div class="row linha-texto">
            <div class="col-lg-7">
                <h2 class="titulo-pagina">O Que é Resistência (&#8486;)</h2>
                <p class="texto-pagina">A Resistência é todo material que tem 
                    como característica, se opor à passagem de corrente elétrica.</p>
                <p class="texto-pagina">Unidade de medida (&#8486;) = Ohm.
                    Em homenagem Georg Simon Ohm, físico e matemático alemão,
                    definiu o conceito de resistência elétrica.
                </p>
                <div>
                    <img class="img-fluid" src="img/resistor.jpg">
                    <p>Exemplo de Resistor</p>
                </div>
            </div>
            <!--Públicidade-->
            <div class="col-lg-5">

            </div>
        </div>
        <div class="row linha-texto">
            <div class="col-lg-7">
                <h2 class="titulo-pagina">Lei de Ohm</h2>
                <p class="texto-pagina">Lei de Ohm, em homenagem ao seu criador,
                    George Simon Ohm um físico alemão, permite calcular as grandes 
                    grandezas físicas como a tensão, corrente e resistência. 
                </p>
                <p class="texto-pagina">Aqui vamos falar apenas da primeira 
                    Lei de Ohm, abaixo temos as formulas para cada cálculo:</p>

                <p class="texto-pagina">
                    U – Tensão ou potencial elétrico (V)
                </p>
                <p class="texto-pagina">
                     R – resistência elétrica (&#8486;)
                </p>
                <p class="texto-pagina">
                       I – corrente elétrica (A)
                </p>
                <h3 class="subtitulo-pagina">Descobrir o valor da tensão</h3>
                <p class="text-pagina">
                    V = R . I
                </p>
                <h3 class="subtitulo-pagina">Descobrir o valor da corrente</h3>
                <p class="text-pagina">
                    I = V / R
                </p>
                
                 <h3 class="subtitulo-pagina">Descobrir o valor da resistência</h3>
                <p class="text-pagina">
                    R = V / I
                </p>
                <p class="texto-pagina">
                    Abaixo temos uma calculadora de Lei de Ohm.
                </p>
            </div>
            <!--Públicidade-->
            <div class="col-lg-5">

            </div>
        </div>

    </section>

    <section class="container secao-calculadora">
        <h2 class="titulo-site">Calculadora de Lei de Ohm</h2>

        <div class="row form">
            <div class="col-lg-4">
                <h3 class="titulo-eletrica">Volts (V)</h3>
                <div>
                    <label>Valor da Corrente: 
                        <input type="number" name="campo-corrente-volt" class="form-control campo-eletrica" id="campo-corrente-volt" placeholder="Digite um valor" maxlength="50">
                    </label>
                </div>
                <div>
                    <label>Valor da Resitência:
                        <input type="number" name="campo-resistencia-volt" class="form-control campo-eletrica" id="campo-resistencia-volt" placeholder="Digite um valor" maxlength="50">
                    </label>
                </div>
                <div class="linha-botao">
                    <button class="btn btn-primary btn-calculo" type="submit" onclick="resultVolts()">Calcular Volts</button>
                </div>
                <div class="linha-resultado">
                    <h2 class="titulo-resultado">Resultado:</h2>
                    <h3 id="retorno-volts" class="titulo-retorno">Nenhum valor adicionado.</h3>
                </div>
            </div>
            <div class="col-lg-4">
                <h3 class="titulo-eletrica">Corrente (A)</h3>
                <div>
                    <label>Valor da Tensão: 
                        <input type="number" name="campo-tensao-corrente "class="form-control campo-eletrica" id="campo-tensao-corrente" placeholder="Digite um valor" maxlength="50">
                    </label>
                </div>
                <div>
                    <label>Valor da Resistência:
                        <input type="number" name="campo-resistencia-corrente" class="form-control campo-eletrica" id="campo-resistencia-corrente" placeholder="Digite um valor" maxlength="50">
                    </label>
                </div>
                <div class="linha-botao">
                    <button class="btn btn-primary btn-calculo" type="submit" onclick="resultCorrente()">Calcular Corrente</button>
                </div>
                <div class="linha-resultado">
                    <h2 class="titulo-resultado">Resultado:</h2>
                    <h3 id="retorno-corrente" class="titulo-retorno">Nenhum valor adicionado.</h3>
                </div>
            </div>
            <div class="col-lg-4">
                <h3 class="titulo-eletrica">Resistência (&#8486;)</h3>

                <div>
                    <label>Valor da Tensão: 
                        <input type="number" name="campo-tensao" class="form-control campo-eletrica" id="campo-tensao-resistencia" placeholder="Digite um valor" maxlength="50">
                    </label>
                </div>
                <div>
                    <label>Valor da Corrente:
                        <input type="number" name="campo-corrente" class="form-control campo-eletrica" id="campo-corrente-resistencia" placeholder="Digite um valor" maxlength="50">
                    </label>
                </div>
                <div class="linha-botao">
                    <button class="btn btn-primary btn-calculo" type="submit" onclick="resultResistencia()">Calcular Resitência</button>
                </div>
                <div class="linha-resultado">
                    <h2 class="titulo-resultado">Resultado:</h2>
                    <h3 id="retorno-resistencia" class="titulo-retorno">Nenhum valor adicionado.</h3>
                </div>
            </div>

        </div>

    </section>
</main>

<?php
require_once "footer.php";
?>

