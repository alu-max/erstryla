<?php
//Inicializa uma sessão
session_start();
// Verificando se existe uma sessão aberta
if((!isset ($_SESSION['login'])) || (!isset ($_SESSION['senha']))){
//A função unset() irá destruir a variável especificada
    session_unset();
    session_destroy();
// redireciona para pagina de login
header("Location:adm.php");
exit();
}
?>