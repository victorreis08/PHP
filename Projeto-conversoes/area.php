<?php require_once "header.php"; ?>

<main>
    <section class="container-fluid banner-pagina">
        <h1 class="titulo-banner">Cálculo de Área</h1>
    </section>

    <section class="container secao-textos">
        <div class="row linha-texto">
            <div class="col-lg-7">
                <h2 class="titulo-pagina">O que é Cálculo de Área</h2>
                <p class="texto-pagina">A área corresponde ao tamanho da 
                    superfície de uma figura, como círculo, quadrado, triângulo,
                    entre outros.
                </p>
            </div>
            <div class="col-lg-5">

            </div>
        </div>
        <div class="row linha-texto">
            <div class="col-lg-7">
                <h2 class="titulo-pagina">Área do Quadrado</h2>
                <p class="texto-pagina">A formula para calcular a área do quadradodo é:</p>
                <p class="texto-pagina"><strong>A = L . L</strong></p>
            </div>
            <div class="col-lg-5">

            </div>
        </div>
        <div class="row linha-texto">
            <div class="col-lg-7">
                <h2 class="titulo-pagina">Área do Triângulo</h2>
                <p class="texto-pagina">A formula para calcular a área do triângulo é:</p>
                <p class="texto-pagina"><strong>A = B . A / 2</strong></p>
            </div>
            <div class="col-lg-5">

            </div>
        </div>
        <div class="row linha-texto">
            <div class="col-lg-7">
                <h2 class="titulo-pagina">Área do Circulo</h2>
                <p class="texto-pagina">A formula para calcular a área do circulo é:</p>
                <p class="texto-pagina"><strong>A = &pi; . r <sup>2</sup></strong></p>
            </div>
            <div class="col-lg-5">

            </div>
        </div> 

    </section>

    <section class="container secao-calculadora">
        <h2 class="titulo-site">Calculadora de Área</h2>
        <div class="row form">
            <div class="col-lg-4">
                <h3 class="titulo-eletrica">Área do Quadrado</h3>

                <div> 
                    <label>Valor: 
                        <input type="number" name="campo-quadrado" class="form-control campo-area" id="campo-quadrado" placeholder="Digite um valor" maxlength="50">
                    </label>
                </div>
                <div>
                    <label>Medida:
                        <select name="campo-medida" id="campo-medida-quadrado" class="form-control campo-area">
                            <option value="cm">cm</option>
                            <option value="m">m</option>
                        </select>
                    </label>
                </div>
                <div class="linha-botao">
                    <button class="btn btn-primary btn-calculo" onclick="resultQuadrado()">Calcular Área</button>
                </div>
                <div class="linha-resultado">
                    <h2 class="titulo-resultado">Resultado:</h2>
                    <h3 id="retorno-quadrado" class="titulo-retorno">Nenhum valor adicionado.</h3>
                </div>
            </div>
            <div class="col-lg-4">
                <h3 class="titulo-eletrica">Área do Triângulo</h3>
                <div class="row">
                    <div class="col-lg-6">
                        <label>Base: 
                            <input type="number" name="campo-base" class="form-control" id="campo-base" placeholder="Digite um valor" maxlength="50">
                        </label>
                    </div>
                    <div class="col-lg-6">
                        <label>Altura: 
                            <input type="number" name="campo-altura" class="form-control" id="campo-altura" placeholder="Digite um valor" maxlength="50">
                        </label>
                    </div>
                </div>
                <div>
                    <label>Medida:
                        <select name="campo-medida" id="campo-medida-triangulo" class="form-control campo-area">
                            <option value="cm">cm</option>
                            <option value="m">m</option>
                        </select>
                    </label>
                </div>
                <div class="linha-botao">
                    <button class="btn btn-primary btn-calculo" type="submit" onclick="resultTriangulo()">Calcular Área</button>
                </div>
                <div class="linha-resultado">
                    <h2 class="titulo-resultado">Resultado:</h2>
                    <h3 id="retorno-triangulo" class="titulo-retorno">Nenhum valor adicionado.</h3>
                </div>
            </div>
            <div class="col-lg-4">
                <h3 class="titulo-eletrica">Área do Circulo</h3>
                <div>
                    <label>Raio: 
                        <input type="number" name="campo-raio" class="form-control campo-area" id="campo-raio" placeholder="Digite um valor" maxlength="50">
                    </label>
                </div>
               <p>Valor de &pi; considerado é de 3,14</p>
                <div class="linha-botao">
                    <button class="btn btn-primary btn-calculo" type="submit" onclick="resultCirculo()">Calcular Área</button>
                </div>
                <div class="linha-resultado">
                    <h2 class="titulo-resultado">Resultado:</h2>
                    <h3 id="retorno-circulo" class="titulo-retorno">Nenhum valor adicionado.</h3>
                </div>
            </div>

    </section>
</main>

<?php require_once "footer.php"; ?>

