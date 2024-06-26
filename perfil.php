<?php 
require_once "inc/cabecalho.php";
require "inc/funcoes-sessao.php";
require "inc/funcoes-usuarios.php";

// 1) Carregue as funções de usuários
// 2) Pegue o ID do usuário através da SESSÃO
// 3) Chame a função lerUmUsuario e guarde o que ela retorna (array de dados)
// 4) Programe uma condicional(if) para detectar se o formulário de atualização foi acionado.
//    4.1) Capture os dados digitados no formulário (nome, e-mail)
//    4.2) Capture o tipo do usuário através da SESSÃO
//    4.3) Faça a programação condicional necessária para a senha (é o mesmo código usado em usuario-atualiza.php)
//    4.4) Fora da condicional da senha, chame a função atualizarUsuario e passe os dados pra ela
//    4.5) Redirecione para a página index.php (a que está dentro de admin)
// 5) DESAFIO: faça com que, ao mudar o nome do usuário, automaticamente apareça o novo nome na index.php



/* $perfil = lerUmUsuario($conexao, $idUsuario);

if (isset($_POST['atualizar'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $tipoUsuario = $_SESSION['tipo'];

    if (empty($_POST['senha'])) {
        // Manter a mesma senha (copiamos ela para uma variavel)
        $senha = $perfil['senha'];
    } else {
        // Caso contrário, pegaremos a senha nova digitada e a CODIFICAREMOS ANTES de mandar/salvar no banco.
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    }

    atualizarUsuario($conexao, $idUsuario, $nome, $email, $senha, $tipoUsuario);
    header("Location: index.php");
    exit;
} */
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        img{
            height: 200px;
        }
    </style>
    
</head>
<body>

    <main>
        <h2>Perfil</h2>
        <div class="pernome">
        <img src="user.png" alt="">
        <div class="nomeper">
        <p>nome do usuario</p>
    </div>
    </div>

    <div class="linkper">
        <a href="">Dados Pessoais</a><br>
        <a href="">Alterar dados</a><br>
        <a href="">Registro de compras</a><br>
        <a href="Index.html">Sair</a><br>
        </div> 

    </main>


<?php
require_once "inc/rodape.php"
?>