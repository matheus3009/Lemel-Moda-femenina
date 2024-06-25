<?php 

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

$idUsuario = $_SESSION['id'];

$perfil = lerUmUsuario($conexao, $idUsuario);

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
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/perfil.css">
    <title>Login</title>
    
</head>
<body>
    <header>
        <div class="container">
            
            <h1><a href="index.html"><img src="imagens/logo-lemel.png" alt="logo"></a>
                </h1>
            <nav >
                        <h2><a href="">Menu &equiv;</a></h2>
                        <ul class="links-menu">
                            <li><a href="">Inicio</a></li>
                            <li><a href="">Produtos</a></li>
                            <li><a href="">Minha conta</a></li>
                            <li><a href="">Favoritos</a></li>
                            <li><a href="">Sacolas</a></li>
                            <li><a href="">Quem somos</a></li>
                            <li><a href="">Suporte</a></li>
                        </ul>
                    </nav>

                    

                  
        </div>

        <form action="resultados.html"><input type="search" id="site-pesquisa" name="q" />
            <button>Search</button>
        </form>
        <h2><a href=".html"><img src="" alt="">Login</a></h2>

                    <h2><a href="sacola.html"><img src="" alt="">sacola</a></h2>

    </header>

    <main>
        <h2>Perfil</h2>
        <div class="pernome">
        <img src="user.png" alt="">
        <div class="nomeper">
        <p>Nome do usuário</p>
        <p>Nome da conta</p>
    </div>
    </div>

    <div class="linkper">
        <a href="">Dados Pessoais</a><br>
        <a href="">Alterar dados</a><br>
        <a href="">Registro de compras</a><br>
        <a href="Index.html">Sair</a><br>
        </div> 

    </main>

	<footer>
<div id="exemplo-flaxbox">
	<div class="caixa">
		<h2>Contato</h2>
        <ul>
            <li>Atentimento</li>
            <li>Onde encontrar</li>
            <li>Chat Online</li>
            <li>SEE ON MAP</li>
        </ul>
	</div>



	<div class="caixa">
		<h2>Siga</h2>
        <ul>
            <li><a href="https://www.instagram.com/lemelmodaeacessorios?igsh=MTlzemhvcGx2cGM3Zw==">@lemelmodaeacessorios</a></li>
            <li>SEE ON MAP</li>
	</div>



	<div class="caixa">
		<img src="imagens/mini-microsoft.jpg" alt="">
		<h2>FAQ</h2>
		<ul>
            <li>Frete & entrega</li>
            <li>Garantia</li>
            <li>Forma de pagamento</li>
            <li>Troca & devolução</li>
            <li>Segurança</li>
            <li>Termos & condições</li>
        </ul>
	</div>

    <div class="caixa">
		<h2>Minha conta</h2>
        <ul>
            <li>Meus dados</li>
            <li>Meus pedidos</li>
            <li>Minhas trocas</li>
            <li>Vale compras</li>
        </ul>
	</div>

</div>
</footer>

</body>
</html>