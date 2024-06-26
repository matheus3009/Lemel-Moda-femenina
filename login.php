<?php

require_once "inc/funcoes-usuarios.php";
require_once "inc/funcoes-sessao.php"; 

/* Mensagens de feedback */
if (isset($_GET['campos_obrigatorios'])) {
	$mensagem = "Prencha os dados";
}elseif(isset($_GET['dados_incorretos'])){
	$mensagem = "Tente novamente";
}elseif (isset($_GET['saiu'])) {
	$mensagem = "Saiu do sistema";
}elseif (isset($_GET['acesso_negado'])) {
	$mensagem = "Voce deve fazer o login";
}

$email = 'kaiju@8';
$senha = '8';


if (isset($_POST['entrar'])) {
	//Validando os campos (se estão vazios)
	if (empty($_POST['email']) || empty($_POST['senha'])) {
		header("location:login.php?campos_obrigatorios");
		exit;
	}

	// Capturar dados
	$email = mysqli_real_escape_string($conexao, $_POST['email']);
	$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

	/*  1. Buscando no banco de dados, através do email digitado, se existe um usuário cadastrado. */
	$usuario = buscarUsuario($conexao, $email);

	/* 2. Verificação de usuario e senha
	Se o usuario/email existe no banco e a senha digitada for igual a do banco...
	*/
	if ($usuario !== null && password_verify($senha, $usuario['senha'])) {
		//Então inicie o processo de login.
		login($usuario['id'], $usuario['nome'], $usuario['tipo']);

		// Redirecione para a index admin
		header("location:perfil.php");

		exit;
	} else {
		//Senão, senha está errada e não pode entrar no sistema.
		header("location:login.php?dados_incorretos");
		exit;
	}
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

		div input{
			width: 300px;
			height: 25px;
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
<div class="row">
    <div class="bg-white rounded shadow col-12 my-1 py-4">
    <h2 class="text-center fw-light">Login</h2>

        <form action="" method="post" id="form-login" name="form-login" class="mx-auto w-50" autocomplete="off">

				<?php if(isset($mensagem)) { ?>
				<p class="my-2 alert alert-warning text-center">
					<?=$mensagem?>
				</p>  
				<?php } ?>              

				<div class="mb-3">
					<label for="email" class="form-label">E-mail:</label>
					<input class="form-control" type="email" id="email" name="email">
				</div>
				<div class="mb-3">
					<label for="senha" class="form-label">Senha:</label>
					<input class="form-control" type="password" id="senha" name="senha">
				</div>

				<button class="btn btn-primary btn-lg" name="entrar" type="submit">Entrar</button>

			</form>

    </div>
    
    
</div>        
</main>
<?php 
require_once "rodape.html";
?>

