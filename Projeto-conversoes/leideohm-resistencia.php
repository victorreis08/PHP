<?php require_once "header.php"; ?>
<main class="conteudo">

    <div class="voltar"> 
        <a href="index.php">Página Inicial</a>
    </div>

    <div class="form-converter">
        <h1>Reistência</h1>

        <label>Valor da tensão: 
            <input type="number" name="campo-tensao" class="campo-texto" id="campo-tensao" placeholder="Digite um valor" maxlength="50">
        </label>

        <label>Valor da Corrente:
            <input type="number" name="campo-corrente" class="campo-texto" id="campo-corrente" placeholder="Digite um valor" maxlength="50">
        </label>
        <div class="sessao-botao">
            <button class="btn-enviar" type="submit" onclick="resultResistencia()">Calcular Resistência</button>
        </div>
    </div>
    <div class="resultado">
        <h2>Resultado:</h2>
        <h3 id="retorno">Nenhum valor adicionado.</h3>
    </div>

</main>

<?php require_once "footer.php"; ?>

