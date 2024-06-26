<?php
require_once "inc/cabecalho.php";
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
   

/*     if(password_verify($senha, $usuario['senha'])){
        echo "senha igual";
    } else {
        echo "senha diferente";
    } */

   /*  die(); */

	/* 2. Verificação de usuario e senha
	Se o usuario/email existe no banco e a senha digitada for igual a do banco...
	*/
	if ($usuario !== null && password_verify($senha, $usuario['senha'])) {
        /* die("aqui"); */
		//Então inicie o processo de login.
		login($usuario['id'], $usuario['nome'], $usuario['tipo']);

		// Redirecione para a index admin
		header("location:perfil.php");

		exit;
	} else {
        die("tem erro login/senha");
		//Senão, senha está errada e não pode entrar no sistema.
		header("location:login.php?dados_incorretos");
		exit;
	}
}
?>

<style>
       
        main {
            text-align: center;
        }

       
        main {
            margin-top: 5%;
            margin-bottom: 50%;
			
        }


    </style>
</head>
<body>

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
require_once "inc/rodape.php";
?>

