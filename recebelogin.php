<?php
include ("conectar.php");
//verifica se teve conexão
if ($conn)
{
// session_start inicia a sessão
session_start();
$login = $_POST['login'];
$senha = $_POST['senha'];
if(!empty($login) and !empty($senha))
{
    $db = mysqli_select_db($conn, "erstryla");
    $sql = "SELECT * FROM tb_adm WHERE nome_usuario='$login' AND senha_usuario='$senha'";
    $contador = mysqli_query($conn,$sql) or die("não foi possível executar o comando Sql");
    if(mysqli_num_rows($contador) > 0)
    {
    //Pega os valores do formulário e armazenam na sessão ativa...
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;
    //Redireciona para a página de entrada do sistema
    header("Location:menu.php");
    }
    else
    {
    echo "Senha ou Login Inválido";
    }
}
else
{
echo "Login e Senha são obrigatórios";
}

}
else
{echo "não houve conexão com o banco";}




?>