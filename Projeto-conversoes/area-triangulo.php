<?php require_once "header.php"; ?>

<main class="conteudo">
    <div class="voltar"> 
        <a href="index.php">Página Inicial</a>
    </div>

    <div class="form-converter">
        <h1>Área do triangulo</h1>
        <div class="col-6">
            <label>Base: 
                <input type="number" name="campo-base" class="campo-texto" id="campo-base" placeholder="Digite um valor" maxlength="50">
            </label>
        </div>
        <div class="col-6">
            <label>Altura: 
                <input type="number" name="campo-altura" class="campo-texto" id="campo-altura" placeholder="Digite um valor" maxlength="50">
            </label>
        </div>
        

        <div class="sessao-botao">
            <button class="btn-enviar" type="submit" onclick="resultTriangulo()">Calcular Área</button>
        </div>
    </div>
    
    
    <div class="resultado">
        <h2>Resultado:</h2>
        <h3 id="retorno">Nenhum valor adicionado.</h3>
    </div>
</main>

<?php require_once "footer.php"; ?>

