<?php
// inicia a sessão
session_start();
// carrega todos os dados da sessão ativa
$_SESSION = array();
// destroi a sessão aberta
session_destroy();
// direciona para a pagina de login
header("Location:adm.php");
?>