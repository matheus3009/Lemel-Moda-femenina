<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lojas Lemel</title>
    <link rel="stylesheet" href="slick/slick.css">
    <link rel="stylesheet" href="slick/slick-theme.css">
    <link rel="stylesheet" href="css/estilo.css">

</head>

<body>
    <header>
        <div class="container">
            <nav>
                <a href=""><img src="imagens/menu.png" alt=""></a>
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

            <h1><a href="index.html"><img src="imagens/logo-lemel.png" alt="logo"></a>
            </h1>

            <nav class="icones">
                <form action="resultados.html"><input type="search" id="site-pesquisa" name="q" />
                    <button>Search</button>
                </form>

                <a href=".html"><img src="imagens/usuario.png" alt=""></a>
                <a href="sacola.html"><img src="imagens/sacola.png" alt=""></a>
            </nav>
        </div>
    </header>
    <main>
        <section class="exemplo">
            <div class="slider">
                <!-- precisa adicionar links a imagem e sliders -->
                <div>
                    <img src="" alt="imagens slider">
                </div>

                <div>
                    <img src="" alt="imagens slider">
                </div>

                <div>
                    <img src="" alt="imagens slider">
                </div>

                <div>
                    <img src="" alt="imagens slider">
                </div>

            </div>
        </section>

        <hr>

        <h3>categorias</h3>
        <section>
            <div class="slider-cat">
                <!-- slider -->
                <div>
                    <a href="">
                        <img src="" alt="foto cat">
                    </a>
                    <p>texto por vir</p>
                </div>

                <div>
                    <a href="">
                        <img src="" alt="foto cat">
                    </a>
                    <p>texto por vir</p>
                </div>

                <div>
                    <a href="">
                        <img src="" alt="foto cat">
                    </a>
                    <p>texto por vir</p>
                </div>

                <div>
                    <a href="">
                        <img src="" alt="foto cat">
                    </a>
                    <p>texto por vir</p>
                </div>

                <div>
                    <a href="">
                        <img src="" alt="foto cat">
                    </a>
                    <p>texto por vir</p>
                </div>

            </div>
        </section>

        <hr>

        <h2>Lançamentos</h2>

        <div>
            <a href="">ver mais</a>
        </div>

        <section>
            <div class="slider-lan">

                <div class="produtos-img">
                
                    <a href="">
                        <img class="img-pro" src="imagens/lemel/334515675_645669600655109_139508241733260701_n.jpg" alt="foto Produtos">
                    </a>
                 
                    <div class="produtos-text">
                         <p>produto sla oq</p>
                         <span>escrita</span>
                    </div>
                </div>
            
                <div class="produtos-img">
                    <a href="">
                        <img class="img-pro" src="imagens/lemel/334515675_645669600655109_139508241733260701_n.jpg" alt="foto Produtos">
                    </a>
                    <p>texto por vir</p>
                </div>
                <div class="produtos-img">
                    <a href="">
                        <img class="img-pro" src="imagens/lemel/334515675_645669600655109_139508241733260701_n.jpg" alt="foto Produtos">
                    </a>
                    <p>texto por vir</p>
                </div>
                <div>
                    <a href="">
                        <img src="" alt="foto Produtos">
                    </a>
                    <p>texto por vir</p>
                </div>
            </div>
        </section>
        <hr>
        <h2>Popular</h2>

        <div>
            <a href="">ver mais</a>
        </div>

        <section>
            <div class="slider-pop">
                <div>
                    <a href="">
                        <img src="" alt="foto Produtos">
                    </a>
                    <span>textoo por vir</span>
                </div>
                <div>
                    <a href="">
                        <img src="" alt="foto Produtos">
                    </a>
                    <p>texto por vir</p>
                </div>
                <div>
                    <a href="">
                        <img src="" alt="foto Produtos">
                    </a>
                    <p>texto por vir</p>
                </div>
                <div>
                    <a href="">
                        <img src="" alt="foto Produtos">
                    </a>
                    <p>texto por vir</p>
                </div>
            </div>
        </section>
        <hr>

        <div>
            <h2>localização</h2>

            <!-- coisas por vir -->
        </div>

    </main>

    <footer>
        <div>
            <h3>Contato</h3>

            <a href="">Atendimento</a>
            <a href="">Onde encontrar</a>
            <a href="">Chat Online</a>
        </div>
        <div>
            <h3>FAQ</h3>
            <a href="">Frete & Entrega</a>
            <a href="">Garantia</a>
            <a href="">Forma de Pagamento</a>
            <a href="">Troca & Devolução</a>
            <a href="">Segurança</a>
            <a href="">Termos e Politica</a>
        </div>
        <div>
            <h3>Siga</h3>

            <a href="">instagram</a>
        </div>
        <div>
            <h3>Minha conta</h3>

            <a href="">Meus dados</a>
            <a href="">Meus pedidos</a>
            <a href="">Minhas trocas</a>
            <a href="">Vale compras</a>
        </div>
        <!-- diversos links por vir -->
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="slick/slick.min.js"></script>

    <script>
        $(document).ready(function () {
            $('.slider').slick({
                autoplay: true
            });
        });
    </script>

    <script>
        $(document).ready(function () {
            $('.slider-cat').slick({
                arrow: true,
                Infinite: true,
                slideToShow: 3,
                slideToScroll: 3
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $('.slider-lan').slick({
                Infinite: true,
                slideToShow: 3,
                slideToScroll: 3

            });
        });
    </script>

<script>
    $(document).ready(function () {
        $('.slider-pop').slick({
            arrow: true,
            Infinite: true,
            slideToShow: 3,
            slideToScroll: 3
            
        });
    });
</script>
</body>

</html>