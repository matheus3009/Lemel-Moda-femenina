<?php

require_once "inc/cabecalho.php";
require_once "inc/funcoes-usuarios.php";

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
	header("location:perfil.php");
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
require_once "inc/rodape.php"
?>