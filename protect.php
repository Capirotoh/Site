<?php

if(!isset($_SESSION)){
    session_start();
}

else if(!isset($session['id'])){
    die("Você não pode acessar esta página porque não está logado.<p><a href=\"index.php\">Entrar</a></p>");
}
?>