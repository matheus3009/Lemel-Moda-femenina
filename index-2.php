<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<title>Lojas Lemel</title>
<link rel="stylesheet" href="slick/slick.css">
<link rel="stylesheet" href="slick/slick-theme.css">

<body>
    <main>
        <h1>Lojas lemel</h1>
        <!-- slider topo da pagina = inicial -->
        <section>
            <div class="slider-topo">
                <div><img src="" alt="">imagens-lemel</div>
                <div><img src="" alt="">imagens-lemel</div>
                <div><img src="" alt="">imagens-lemel</div>
                <div><img src="" alt="">imagens-lemel</div>
            </div>
        </section>

        <hr>

        <h2>Categorias</h2>
        <!-- imagens/links de categoria -->
        <section>
            <div>
                <div>
                    <a href="">
                        <img src="" alt="categoria">
                    </a>
                    <p>cat-text</p>
                </div>

                <div>
                    <a href="">
                        <img src="" alt="categoria">
                    </a>
                    <p>cat-text</p>
                </div>

                <div>
                    <a href="">
                        <img src="" alt="categoria">
                    </a>
                    <p>cat-text</p>
                </div>

                <div>
                    <a href="">
                        <img src="" alt="categoria">
                    </a>
                    <p>cat-text</p>
                </div>
            </div>
        </section>

        <hr>

        <h2>Lançamentos</h2>
        <!-- lançamento slider -->

        <section>
            <!-- conteudo lançamentos -->
        <div class="slider-conteudo">
            <div>
                <div>
                    <img src="" alt="lançamentos">
                    <p>slider-lançamentos</p>
                </div>
            </div>

            <div>
                <div>
                    <img src="" alt="lançamentos">
                    <p>slider-lançamentos</p>
                </div>
            </div>

            <div>
                <div>
                    <img src="" alt="lançamentos">
                    <p>slider-lançamentos</p>
                </div>
            </div>

            <div>
                <div>
                    <img src="" alt="lançamentos">
                    <p>slider-lançamentos</p>
                </div>
            </div>
        </div>
        </section>

        <hr><!-- OBS: lançamentos e ofertas compartilham o mesmo slider -->

        <h2>Ofertas</h2>
        <!-- slider ofertas -->
        <section>
            <!-- conteudo - ofertas -->

            <div class="slider-conteudo">
                <div>
                    <img src="" alt="ofertas">
                    <p>ofertas - slider</p>
                </div>

                <div>
                    <img src="" alt="ofertas">
                    <p>ofertas - slider</p>
                </div>

                <div>
                    <img src="" alt="ofertas">
                    <p>ofertas - slider</p>
                </div>

                <div>
                    <img src="" alt="ofertas">
                    <p>ofertas - slider</p>
                </div>
            </div>
        </section>
    </main>
    <footer>

    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="slick/slick.min.js"></script>

    <script>
        $('.slider-topo').slick({
            autoplay: true,
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            adaptiveHeight: true
        });
    </script>

    <script>
        $('.slider-conteudo').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    </script>
</body>

</html>