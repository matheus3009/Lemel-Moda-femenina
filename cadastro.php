<?php
require_once"cabecalho.php"
?>

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
        <div>
            <form action="perfil.html" method="GET">
                
                <label for="nome"></label>
                <input required placeholder="Digite seu nome" type="nome" name="nome" id="nome">
                <button type="submit">Confirmar</button>
            </form>
            
        </div>
<br>
           <div>
            <form action="perfil.html" method="GET">
                
                <label for="email"></label>
                <input required placeholder="Digite seu email" type="email" name="email" id="email">
                <button type="submit">Confirmar</button>
            </form>
            
        </div>
        <br>
        <div class="mb-3">
				<label class="form-label" for="senha"></label>
				<input 
                placeholder="Digite sua senha"
                class="form-control" type="password" id="senha" name="senha" required>
                <button type="submit">Confirmar</button>
			</div>
            <div>
    <form action="perfil.html" method="GET">
        <label for="nome"></label>
        <input required placeholder="Digite seu nome" type="text" name="nome" id="nome">
        <button type="submit">Confirmar</button>
    </form>
</div>
<br>
<div>
    <form action="perfil.html" method="GET">
        <label for="email"></label>
        <input required placeholder="Digite seu email" type="email" name="email" id="email">
        <button type="submit">Confirmar</button>
    </form>
</div>
<br>
<div class="mb-3">
    <form action="perfil.html" method="GET">
        <label class="form-label" for="senha"></label>
        <input placeholder="Digite sua senha" class="form-control" type="password" id="senha" name="senha" required>
        <button type="submit">Confirmar</button>
    </form>
</div>
<br>
<div>
    <form action="perfil.html" method="GET">
        <label for="celular"></label>
        <input required placeholder="Digite seu celular" type="tel" name="celular" id="celular" pattern="\(\d{2}\) \d{5}-\d{4}" title="Formato: (99) 99999-9999">
        <button type="submit">Confirmar</button>
    </form>
</div>
<br>
<div>
    <form action="perfil.html" method="GET">
        <label for="telefone"></label>
        <input required placeholder="Digite seu telefone" type="tel" name="telefone" id="telefone" pattern="\(\d{2}\) \d{4}-\d{4}" title="Formato: (99) 9999-9999">
        <button type="submit">Confirmar</button>
    </form>
</div>
<br>
<div>
    <form action="perfil.html" method="GET">
        <label for="rua"></label>
        <input required placeholder="Digite sua rua" type="text" name="rua" id="rua">
        <button type="submit">Confirmar</button>
    </form>
</div>
<br>
<div>
    <form action="perfil.html" method="GET">
        <label for="numero"></label>
        <input required placeholder="Digite o número da casa" type="number" name="numero" id="numero">
        <button type="submit">Confirmar</button>
    </form>
</div>
<br>
<div>
    <form action="perfil.html" method="GET">
        <label for="cep"></label>
        <input required placeholder="Digite seu CEP" type="text" name="cep" id="cep" pattern="\d{5}-\d{3}" title="Formato: 99999-999">
        <button type="submit">Confirmar</button>
    </form>
</div>
<br>
<div>
    <form action="perfil.html" method="GET">
        <label for="cpf"></label>
        <input required placeholder="Digite seu CPF" type="text" name="cpf" id="cpf" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" title="Formato: 999.999.999-99">
        <button type="submit">Confirmar</button>
    </form>
</div>


        <h4>ou</h4>
        <h3>Entre com</h3>
        <p class="com"> <img class="fg" src="/imagens/facebook.png" alt=""> Entra com Facebook</p>
        <p class="com"> <img class="fg" src="/imagens/google.png" alt=""> Entra com Google</p>
    </main>
    <footer>
        <div id="exemplo-flaxbox">
            <div class="caixa">
                <h2>Contato</h2>
                <ul>
                    <li>Atendimento</li>
                    <li>Onde encontrar</li>
                    <li>Chat Online</li>
                    <li>SEE ON MAP</li>
                </ul>
            </div>
            <div class="caixa">
                <h2>Siga</h2>
                <ul>
                    <li><a
                            href="https://www.instagram.com/lemelmodaeacessorios?ig_shid=MTlzemhvcGx2cGM3Zw==">@lemelmodaeacessorios</a>
                    </li>
                    <li>SEE ON MAP</li>
                </ul>
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