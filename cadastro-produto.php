<?php
require_once "inc/cabecalho.php";
require_once "inc/funcoes-produto.php";

//verificando se o usuario pode acessar essa pagina


//Detectando se o botão inserir foi acionar
if (isset($_POST['inserir'])) {
    $titulo = htmlspecialchars($_POST['titulo']);
    $descricao = htmlspecialchars($_POST['descricao']);
    $preco = htmlspecialchars($_POST['preco']);

    /* Obtendo o id do usuário que esta logado e inserindo a noticia. Portanto, a notícia será associada ao usuário devido ao uso de chave estrageira e relacionamento no banco. */
    $usuarioId = 3;
    /* Captura dados de arquivos enviados */
    $imagem = $_FILES['imagem'];

    /* Fazendo upload da imagem para o servidor */
    upload($imagem);

    /* Enviar os dados para o banco de dados */
    inserirProduto($conexao, $titulo, $descricao, $imagem['name'], $preco, $usuarioId);

    header("location:index.php");
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
    require_once "inc/rodape.php"
    ?>