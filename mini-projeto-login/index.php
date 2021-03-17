<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
    </head>

    <body>
        <main class="sessao-formulario">

            <div class="bloco-formulario">
                <form class="form-cadastro" action="php/cadastro-funcionario.php" method="POST">
                    <div class="campos">
                        <label class="label-form" for="campo-nome">Nome:</label>
                        <input type="text" name="campo-nome" id="campo-nome" class="campo-form">

                        <label class="label-form" for="campo-cargo">Cargo:</label>
                        <select name="campo-cargo" id="campo-cargo" class="campo-form-select">
                            <option value="adm">Administrador</option>
                            <option value="cmu">Comum</option>
                        </select>
                        <label class="label-form" for="campo-senha">Senha:</label>
                        <input type="password" name="campo-senha" id="campo-senha" class="campo-form">

                        <input type="submit" name="btn-enviar" id="btn-enviar" class="btn-enviar">
                    </div>
                </form>
            </div>
        </main>
    </body>

</html>

