<?php

require_once "inc/funcoes-produto.php";

//verificando se o usuario pode acessar essa pagina


//Detectando se o botão inserir foi acionar
if (isset($_POST['inserir'])) {
    $titulo = htmlspecialchars($_POST['titulo']);
    $descricao = htmlspecialchars($_POST['descricao']);
    $preco = htmlspecialchars($_POST['preco']);

    /* Obtendo o id do usuário que esta logado e inserindo a noticia. Portanto, a notícia será associada ao usuário devido ao uso de chave estrageira e relacionamento no banco. */


    /* Captura dados de arquivos enviados */
    $imagem = $_FILES['imagem'];

    /* Fazendo upload da imagem para o servidor */
    upload($imagem);

    /* Enviar os dados para o banco de dados */
    inserirProduto($conexao, $titulo, $descricao, $imagem['nome'], $preco, $usuarioId);

    header("location:index.php");
}
?>

<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    h2 {
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

    .fg {
        width: 5%;
    }

    div {
        align-items: center;
        text-align: center;

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
        <h2>Cadastrar produto</h2>

        <form enctype="multipart/form-data" autocomplete="off" class="mx-auto w-75" action="" method="post" id="form-inserir" name="form-inserir">    

        <div class="mb-3">
            <label class="form-label" for="titulo">Nome do produto:</label>
            <input class="form-control" type="text" id="titulo" name="titulo" required>
        </div>

        <div class="mb-3">
            <label class="form-label" for="descricao">descrição:</label>
            <input class="form-control" type="text" id="descricao" name="descricao" required>
        </div>

        <div class="mb-3">
            <label class="form-label" for="imagem" class="form-label">Selecione uma imagem:</label>
            <input required class="form-control" type="file" id="imagem" name="imagem" accept="image/png, image/jpeg, image/gif, image/svg+xml">
        </div>

        <div class="mb-3">
            <label class="form-label" for="preco">preço</label>
            <input class="form-control" type="text" id="preco" name="preco" required>
        </div>

        <button class="btn btn-primary" id="inserir" name="inserir"><i class="bi bi-save"></i> Inserir</button>

        </form>

    </main>
    <?php
    require_once "rodape.html"
    ?>