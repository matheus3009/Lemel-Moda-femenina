
<?php 
require_once "inc/funcoes-usuarios.php";


if(isset($_POST['inserir'])){
	//Capturar os dados digitais
	$nome = htmlspecialchars($_POST['nome']);
	$email = htmlspecialchars($_POST['email']);
	$tipo = htmlspecialchars($_POST['tipo']);

	// Capturando a senha e a condificando
	$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
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