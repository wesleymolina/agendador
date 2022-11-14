<?php
session_start();
require "conexao/conexao.php";

$email = $_POST['email'];
$senha = $_POST['senha'];
/*if(empty($email) || empty($senha)){ 
    $_SESSION['erro'] = "Preencha os campos Email e Senha correto Por Favor.";
    header('Location: index.php');
    exit;
}
*/
$query = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
$result = mysqli_query($conexao, $query);
$dados = mysqli_fetch_assoc($result);
$row = mysqli_num_rows($result);


if
($row == 1) {
    $_SESSION['id_usuario'] = $dados['id'];
    $_SESSION['usuario'] = $email;
    $_SESSION['nome_usuario'] = $dados['nome'];
    //$_SESSION['idOng']= $dados1['codOng'];
    
    echo $_SESSION['id_usuario'] . $email;
    header('location: index2.php'); 
}

else {
    $_SESSION['erro'] = "ERRO: Usuário ou senha inválidos.";
   // header('location: index.php');
   echo 'erro';
}
