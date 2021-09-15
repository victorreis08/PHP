<?php require_once "header.php"; ?>
<main>
    <section class="slides container-fluid">
        <div class="conteudo-slide">
            <h2 class="titulo-slide">Bem-Vindo</h2>
            <p class="texto-slide">Veja a nossa lista de cálculos</p>
            <a href="#calculo" class="btn btn-primary btn-slide">Veja Mais</a>
        </div>
    </section>
    <section class="container conteudo">
        <div class="row" id="calculo">
            <div class="col-12">
                <h2 class="titulo-site">Cálculos</h2>
            </div>
        </div>
        <div class="row lista">
            <div class="col-12">
                <div class="card-group">
                    <div class="card card-1 text-center">
                        <i class="fas fa-weight estilo-icone"></i>
                        <div class="card-body">
                            <h5 class="card-title titulo-card">Conversão de Massas</h5>
                            <p class="card-text texto-card">Conversão de massas: kg, g, dag, mg, cg, hg. </p>
                            <a href="conversao-de-massas.php" class="btn btn-primary btn-card">Veja Mais</a>
                        </div>
                    </div>
                    <div class="card card-2 text-center">
                        <i class="fas fa-circle-notch estilo-icone"></i>
                        <div class="card-body">
                            <h5 class="card-title titulo-card">Área</h5>
                            <p class="card-text texto-card">Cálculo de área do quadrado, triângulo e círculo. </p>
                            <a href="area.php" class="btn btn-primary btn-card">Veja Mais</a>
                        </div>
                    </div>
                    <div class="card card-3 text-center">
                        <i class="fas fa-bolt estilo-icone"></i>
                        <div class="card-body">
                            <h5 class="card-title titulo-card">Elétrica</h5>
                            <p class="card-text texto-card">Lei de Ohn básica, Volts, Corrente e Resistência.</p>
                            <a href="eletrica.php" class="btn btn-primary btn-card">Veja Mais</a>
                        </div>
                    </div>
                </div>      
            </div>
        </div>
    </section>

    <section class="container conteudo conteudo-separado">
        <div class="row" id="quem-somos">
            <div class="col-lg-12">
                <h2 class="titulo-site">123 Matemática</h2>
                <p class="texto-pagina text-center margem-extra">A 123 Matmática é um site com conteúdo
                    100% focado em matemática, com propósito de tirar dúvidas e 
                    resolver problemas matemáticos.
                </p>
                <p class="texto-pagina text-center">
                    Os alunos, professores e curiosos
                    que tenham alguma dúvida podem utilizar o conteúdo a vontade.
                </p>
                <p class="texto-pagina text-center">O conteúdo é atualizado constantemente.</p>
            </div>
        </div>
    </section>
</main>
<?php require_once "footer.php"; ?>

