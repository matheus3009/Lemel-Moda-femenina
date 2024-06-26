<?php

require_once"inc/funcoes-usuarios.php";

//verificando se o usuario pode acessar essa pagina

// Defina a variável $tipo antes de usá-la
$tipo = isset($_POST['tipo']) ? $_POST['tipo'] : null; // ou qualquer valor padrão apropriado

// Agora use a variável $tipo
// Certifique-se de que a variável está corretamente atribuída antes de usá-la

//Detectando se o botão inserir foi acionar
 if(isset($_POST['inserir'])){
	//Capturar os dados digitais
	$nome = htmlspecialchars($_POST['nome']);
	$email = htmlspecialchars($_POST['email']);
	//$tipo = htmlspecialchars($_POST['tipo']);

	// Capturando a senha e a condificando
	$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

	//Chamando a função para de inserir usuários e passando os dados
	inserirUsuario($conexao, $nome, $email, $tipo, $senha);

	// Redirecionando para a lista de usuarios
	header("location:perfil.html");
}
?>

<style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        h2{
            padding-bottom: 5%;
            
        }

        h2,
        h3,
        h4,
        main {
            text-align: center;
        }

        header {
            background-color: #bf8869;
            height: 12vh;
            display: flex;
            justify-content: space-between;
            align-items: center;

        }

        main {
            margin-top: 5%;
            margin-bottom: 50%;
        }

        .com {
            color: black;
            font-weight: bold;
            display: inline-block;
            width: 50%;
            padding: 1%;
            border: solid 1px;
        }

        .caixa {
            width: 50%;
        }

        #exemplo-flaxbox {
            background-color: #26120B;
            display: flex;
            flex-wrap: wrap;
            color: white;
            justify-content: space-evenly;
            align-items: center;
        }

        footer {
            height: 30px;
            margin: 0;
            left: 0;
        }

        img {
            width: 20%;
        }

        .pernome {
            display: flex;
            align-items: center;
            text-align: center;

        }

        .nomeper {
            margin-left: 10%;
        }

        .linkper {
            left: 0%;
            margin-top: 5%;
        }

        .links-menu {
            list-style: none;
            display: none;
        }

        .container {
            display: flex;
            justify-content: space-between;
        }

        .fg{
            width: 5%;
        }

    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1><a href="index.html"><img src="imagens/logo-lemel.png" alt="logo"></a></h1>
            <nav>
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
        <form action="resultados.html"><input type="search" id="site-pesquisa" name="q" /><button>Search</button></form>
        <h2><a href=".html"><img src="" alt="">Login</a></h2>
        <h2><a href="sacola.html"><img src="" alt="">sacola</a></h2>
    </header>
    <main>
        <h2>Cadastro</h2>
        <h3>Informe seu E-mail</h3>
        <br>

        <form autocomplete="off" class="mx-auto w-75" action="" method="post" id="form-inserir" name="form-inserir">

<div class="mb-3">
    <label class="form-label" for="nome">Nome:</label>
    <input class="form-control" type="text" id="nome" name="nome" required>
</div>

<div class="mb-3">
    <label class="form-label" for="email">E-mail:</label>
    <input class="form-control" type="email" id="email" name="email" required>
</div>

<div class="mb-3">
    <label class="form-label" for="senha">Senha:</label>
    <input class="form-control" type="password" id="senha" name="senha" required>
</div>

<button class="btn btn-primary" id="inserir" name="inserir"><i class="bi bi-save"></i> Inserir</button>


        <h4>ou</h4>
        <h3>Entre com</h3>
        <p class="com"> <img class="fg" src="/imagens/facebook.png" alt=""> Entra com Facebook</p>
        <p class="com"> <img class="fg" src="/imagens/google.png" alt=""> Entra com Google</p>
    </main>
<?php 
require_once "rodape.php"
?>