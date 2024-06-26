<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include 'includes/head.php'; ?>
    <link rel="stylesheet" href="css/layoutquadrinho.css">
    <title>Jeremias - Pele</title>
</head>

<body>

    <header>
        <?php include 'includes/header.php'; ?>
    </header>


    <div class="container text-center corpo mt-3">

        <main>
            <div class="direita">
                <div class="title">
                    <h1>Jeremias - Pele</h1>
                    <hr>
                </div>
                <div class="row">
                    <div class="col img">
                        <img src="img/Jefferson_costa/jegermias.jpg" alt="Jeremias - Pele">
                    </div>
                </div>
                <div class="row">
                    <div class="col img">
                        <table>
                            <tr>
                                <th colspan="2">Jeremias - Pele</th>
                            </tr>

                            <tr>
                                <td>Autor:</td>
                                <td>Jefferson Costa</td>
                            </tr>
                            <tr>
                                <td>publicado em:</td>
                                <td>2018</td>
                            </tr>
                            <tr>
                                <td colspan="2">Editora Graphic MSP</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <article>

                <div class="row sinopse">
                    <div class="title2">
                        <h1>Jeremias - Pele</h1>
                        <hr>
                    </div>
                    <h3>Sinopse:</h3>
                    <p class="fs-4">
                        Numa reinterpretação ousada, porém necessária, como enaltece Mauricio de Sousa, em seu prefácio,
                        o roteirista Rafael Calça e o desenhista Jefferson Costa dão vida a uma história forte, dura,
                        emocionante, na qual Jeremias lidará pela primeira vez com o preconceito por causa da cor da sua
                        pele. A história é recheada de dor, superação, aprendizado e preparação para a vida.</p>
                        <p class="fs-6 text-muted"><small>Jeremias - Pele, .[S. l.], Disponível
                        em: https://panini.com.br/jeremias-pele-graphic-msp-capa-dura-amshc001r3. Acesso:  17 jun. 2024.</small></p>
                </div>
            </article>
        </main>

        <aside>
            <div class="row">
                <h1>Veja também:</h1>
            </div>
            <div class="row carrosel">
                <div id="carouselExampleIndicators" class="carousel slide carousel-fade">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item d-flex justify-content-center active">
                            <!-- INCLUIR IMAGEM DA OBRA -->
                            <img src="img/Jefferson_costa/atempestade.jpg"
                                class="d-flex justify-content-center  carrouselart" alt="Obra 1">
                            <div class="carousel-caption d-none d-md-block">

                            </div>
                        </div>
                        <div class="carousel-item d-flex justify-content-center">
                            <!-- INCLUIR IMAGEM DA OBRA -->
                            <img src="img/Jefferson_costa/ladanzarina.jpg"
                                class="d-flex justify-content-center  carrouselart" alt="Obra 2">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon visual" aria-hidden="true"></span>
                        <span class="visually visual"><!--Anterior--></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon visual" aria-hidden="true"></span>
                        <span class="visually"><!--Proximo--></span>
                    </button>
                </div>
            </div>
            <div class="row imagensSpread">
                <div class="col">
                    <figure>
                        <a href="quadrinhoBase_tempestade.php">
                            <img src="img/Jefferson_costa/atempestade.jpg" alt="A tempestade">

                        </a>
                    </figure>
                    <figcaption>A tempestade</figcaption>
                </div>
                <div class="col">
                    <figure>
                        <a href="quadrinhoBase_danzarina.php">
                            <img src="img/Jefferson_costa/ladanzarina.jpg" alt="La Dansarina">

                        </a>
                    </figure>
                    <figcaption>La Dansarina</figcaption>
                </div>

            </div>
        </aside>





    </div>

    <footer>
        <?php include 'includes/footer.php'; ?>
    </footer>

</body>

</html>