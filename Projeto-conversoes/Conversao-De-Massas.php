<?php
require_once "header.php";
?>

<main>
    <section class="container-fluid banner-pagina">
        <h1 class="titulo-banner">Conversão de Massas</h1>
    </section>
    <section class="container secao-textos">
        <div class="row linha-texto">
            <div class="col-lg-7">
                <h2 class="titulo-pagina">Unidades de medida de massa</h2>
                <p class="texto-pagina">As únidades de medida, são: quilograma (kg), hectograma (hg),
                    decagrama (dag), grama (g), decigrama (dg), centigrama (cg), miligrama (mg).</p>
                <p class="texto-pagina">As tabelas a seguir, mostra os múltiplos e submúltiplos das 
                    unidades de massa (a base da tabela está utilizando a medida grama):</p>
            </div>
             <!--Públicidade-->
            <div class="col-lg-5">

            </div>
        </div>

        <div class="row linha-texto">
            <div class="col-lg-7">

                <table class="table">
                    <caption>Mútiplos</caption>
                    <thead class="thead-dark">
                        <tr>

                            <th scope="col">Quilograma (kg)</th>
                            <th scope="col">Hectograma (hg)</th>
                            <th scope="col">Decagrama (dag)</th>
                            <th scope="col">Grama (g)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <td>1000g</td>
                            <td>100g</td>
                            <td>10g</td>
                            <td>1g</td>

                        </tr>

                    </tbody>
                </table>
                <table class="table">
                    <caption>Submútiplos</caption>
                    <thead class="thead-light">
                        <tr>

                            <th scope="col">Decigrama (dg)</th>
                            <th scope="col">Centigrama (cg)</th>
                            <th scope="col">Miligrama (mg)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <td>0,1g</td>
                            <td>0,01</td>
                            <td>0,01</td>


                        </tr>

                    </tbody>
                </table>
            </div>
             <!--Públicidade-->
            <div class="col-lg-5">

            </div>

        </div>

        <div class="row linha-texto">
            <div class="col-lg-7">
                <h2 class="titulo-pagina">Como é feito a conversão de unidades?</h2>
                <p class="texto-pagina">O sistema de conversão é bem simples, as 
                    conversões entre os mútiplos e submutiplos é feito dividindo 
                    ou multiplicando.</p>
                <p class="texto-pagina">A tabela a seguir mostra como é feita a conversão:</p>

                <div class="tabela-conversao">
                    <img alt="formula do cálculo" class="img-tabela-conversao" src="img/tabela-conversao-massa-min.jpg">

                </div>
            </div>
             <!--Públicidade-->
            <div class="col-lg-5">

            </div>

        </div>
    </section>

    <section class="container secao-calculadora">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="titulo-site">Calculadora de conversão de massas</h2>

                <div class="form-converter">

                    <div class="linha-campo">
                        <label>Valor: 
                            <input type="number" name="campo-texto" class="form-control campo-texto" id="campo-texto" placeholder="Digite o valor a ser convertido" maxlength="50">
                        </label>
                    </div>
                    <div class="linha-campo">
                        <label>De:
                            <select name="campo-entrada" id="campo-entrada"  class="form-control slc-campo">
                                <option value="1">quilograma(kg)</option>
                                <option value="2">grama(g)</option>
                                <option value="3">miligrama(mg)</option>
                                <option value="4">decagrama(dag)</option>
                                <option value="5">decigrama(hg)</option>
                                <option value="6">centigrama(cg)</option>

                            </select>

                        </label>
                    </div>
                    <div class="linha-campo"> 

                        <label>Para:
                            <select name="campo-converter" id="campo-converter" class="form-control slc-campo">
                                <option value="1">quilograma(kg)</option>
                                <option value="2">grama(g)</option>
                                <option value="3">miligrama(mg)</option>
                                <option value="4">decagrama(dag)</option>
                                <option value="5">decigrama(hg)</option>
                                <option value="6">centigrama(cg)</option>

                            </select>
                        </label>

                    </div>


                    <div class="linha-botao">
                        <button class="btn btn-primary btn-calculo" type="submit" onclick="resultConversao()">Converter</button>
                    </div>

                    <div class="linha-resultado">
                        <h2 class="titulo-resultado">Resultado:</h2>
                        <h3 id="retorno" class="titulo-retorno">Nenhum valor adicionado.</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
<?php
require_once "footer.php";
?>