<?php

require_once("Sessao-inicio.php");

echo session_save_path(); //mostra o caminho do diretório onde é guardado a sessao

echo "<br/>";

var_dump(session_status()); //retorna o status da sessão


//session_destroy();
echo "<br/>";


switch (session_status()) {
    case PHP_SESSION_DISABLED;
        echo " as sessões estivere desabilitadas";
        break;

    case PHP_SESSION_NONE;
        echo " as sessões estivere habilitadas, mas nenhuma existe";
        break;

    case PHP_SESSION_ACTIVE;
        echo " as sessões estivere habilitadas, e uma existe";
        break;
}
?>
