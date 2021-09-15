<?php require_once "header.php"; ?>
<main class="conteudo">

    <div class="voltar"> 
        <a href="index.php">Página Inicial</a>
    </div>

    <div class="form-converter">
        <h1>Área do quadrado</h1>

        <label>Valor: 
            <input type="number" name="campo-texto" class="campo-texto" id="campo-texto" placeholder="Digite um valor" maxlength="50">
        </label>

        <label>Medida:
            <select name="campo-medida" id="campo-medida" class="slc-campo">
                <option value="cm">cm</option>
                <option value="m">m</option>
            </select>
        </label>
        <div class="sessao-botao">
            <button class="btn-enviar" type="submit" onclick="resultQuadrado()">Calcular Área</button>
        </div>
    </div>
    <div class="resultado">
        <h2>Resultado:</h2>
        <h3 id="retorno">Nenhum valor adicionado.</h3>
    </div>

</main>

<?php require_once "footer.php"; ?>

