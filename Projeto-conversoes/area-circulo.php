<?php require_once "header.php"; ?>

<main class="conteudo">
    <div class="voltar"> 
        <a href="index.php">Página Inicial</a>
    </div>

    <div class="form-converter">
        <h1>Área do Círculo</h1>

        <label>Raio: 
            <input type="number" name="campo-raio" class="campo-texto" id="campo-raio" placeholder="Digite um valor" maxlength="50">
        </label>
        <p>Valor de PI considerado é de 3,14</p>
        <div class="sessao-botao">
            <button class="btn-enviar" type="submit" onclick="resultCirculo()">Calcular Área</button>
        </div>
    </div>


    <div class="resultado">
        <h2>Resultado:</h2>
        <h3 id="retorno">Nenhum valor adicionado.</h3>
    </div>
</main>

<?php require_once "footer.php"; ?>

