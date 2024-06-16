<?php
$con = mysqli_connect('localhost', 'root', '', 'recificidades');
 
if (!$con) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtém os dados do formulário
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email =$_POST['email'];
    $senha = $_POST['senha'];
    $endereco = $_POST['endereco'];
    $cidade =$_POST['cidade'];

   
    // Código SQL para inserir os dados no banco de dados
    $sql = "INSERT INTO usuarios (nome, cpf, email, senha, endereço, cidade)
            VALUES ('$nome', '$cpf', '$email', '$senha', '$endereco', '$cidade')";

    // Executa a consulta SQL
    if (mysqli_query($con, $sql)) {
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "Erro ao inserir os dados: " . mysqli_error($con);
    }
}

// Fecha a conexão com o banco de dados
mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recifidades</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    
    <!-- CSS IMPORT'S -->
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/buttons.css">

    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/history.css">
    <link rel="stylesheet" href="../css/apresentation.css">
    
    <link rel="stylesheet" href="../css/population.css">
    <link rel="stylesheet" href="../css/tourism.css">
    <link rel="stylesheet" href="../css/carousel.css">

    <link rel="stylesheet" href="../css/culture.css">
    
    <link rel="stylesheet" href="../css/banner-finalizacao.css">
    <link rel="stylesheet" href="../css/reciclube.css">
    <link rel="stylesheet" href="../css/reciclube-beneficios.css">
    <link rel="stylesheet" href="../css/form.css">

    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    

    <!-- bootstrap import -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew  +OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9 reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</head>
<body>
    <main>
        <!-- HEADER SECTION -->
        <header class="header-banner" id="inicio">   

            <!-- BARRA DE NAVEGACAO -->
            <nav class="nav-bar">
                <ul class="nav-links">
                    
                    <li>
                        <a href="index.html">Inicio</a>
                    </li> 
                    <img src="../assets/icons/brilhinho.png" alt="Icone de Brilho"> 
                    
                    <li>
                        <a href="#history">Historia</a>
                    </li>
                    <img src="../assets/icons/brilhinho.png" alt="Icone de Brilho">
                    
                    <li>
                        <a href="#tourism">Turismo</a> 
                    </li>
                    <img src="../assets/icons/brilhinho.png" alt="Icone de Brilho"> 
                    
                    <li>
                        <a href="#culture">Cultura</a>
                    </li>
                    <img src="../assets/icons/brilhinho.png" alt="Icone de Brilho"> 
                    
                    <li><a href="#reciclube">Reciclube</a></li>
                </ul>
            </nav>

            <!-- BANNER INICIAL DA PAG -->
            <section class="section-banner">

                <div class="text-box">
                    <div class="title">
                        <h1>CONHEÇA A <br> MAIOR CIDADE <br> EM LINHA RETA <br> DO MUNDO</h1> 
                        <h5>Fonte Oficial: Meu prefeito</h5>
                    </div>
                </div>

                <div class="background">
                    <div class="predios">
                        <img src="../assets/img/header-banner/rua da aurora-grande.png" alt="prediosbackground" width="2100px">
                    </div>

                    <div class="pista">
                        <img src="../assets/img/header-banner/pista-grande.png" alt="pistafundo" width="2100px">
                    </div>
                </div>
            </section>
        </header>

       
        <!-- SECTION DE APRESENTACAO DO SITE -->
        <section class="section-apresentation">
            <div class="box-content">
                <h3>Iai boy! De boa? </h3>
                <p>
                    Somos uma equipe de desenvolvedores que como todo cidadão Recifense, tem muito orgulho de ter nascido na capital do nosso pais Pernambuco!
                </p>
                <p> 
                    Se tu e um recifense orgulhoso ou um turista curioso e queres saber um pouquinho mais sobre a melhor cultura do nordeste e do Brasil, te chega que foi pra isso que criamos esse site aqui. Perde tempo nao, tabacudo!     
                </p>
            </div>

            <div class="figure-apresentation">

                <div class="boyzinhos">
                    <img class="boyzinho um" src="../assets/img/stickers/passinho-verde.png" alt="" width="300px">
                    <img class="boyzinho dois" src="../assets/img/stickers/passinho-rosa.png" alt="" width="300px">
                </div>
                <img class="pista-unica" src="../assets/img/header-banner/pista-unica-grande.png" alt="" width="2100px">
            </div>
        </section>

         <!--BOTÃO VOLTAR PRO TOPO-->
         <div class="arrowTop">
            <a href="#">
                <img src="../assets/icons/setaTopo.png" alt="seta-topo">
            </a>
        </div>
        <!-- SECTION HISTORIA -->
        <section id="history" class="section-history">
            <header>
                <div class="head-sections head-history">
                    <img class="icon-brilho" src="../assets/icons/brilhinho.png" alt="Icone de Brilho"> 
                    <h2>HISTORIA</h2> 
                    <img class="icon-brilho" src="../assets/icons/brilhinho.png" alt="Icone de Brilho"> 
                </div>

                <!-- banner da secao -->
                <div class="banner-history">
                    <div class="text">
                        <h3>Bora começar do começo?</h3> 
                        <span>Desde Duarte Coelho até João Campos</span> 
                    </div>

                    <div class="figures">
                        <img src="../assets/img/stickers/duarte-coelho.png" alt="duarte coelho"> 
                        
                        <img src="../assets/img/stickers/joao-campos.png" alt="joao campos"> 
                    </div>
                </div>
            </header>   

            <div class="timeline">

                <h2 class="timeline__item timeline__item--year">1637</h2>

                <div class="timeline__item">
                    <h3 class="timeline__title">Invasão Holandesa</h3>
                    <p>O crescimento da cidade de Recife ocorreu de fato a partir da invasão holandesa na cidade. O domínio holandês do território recifense durou entre 1637 e 1654.</p>
                </div>

                <h2 class="timeline__item timeline__item--year">1710</h2>

                <div class="timeline__item">
                    <h3 class="timeline__title">Guerra dos Mascates</h3>
                    <p class="timeline__blurb">O desenvolvimento do Recife foi visto com desconfiança pelos olindenses, em grande parte formada por senhores de engenho em dificuldades econômicas. O conflito de interesses políticos e econômicos entre a nobreza açucareira pernambucana e os novos burgueses deu origem à Guerra dos Mascates</p>
                </div>

                <h2 class="timeline__item timeline__item--year">1817</h2>

                <div class="timeline__item">
                    <h3 class="timeline__title">Revolução Pernambucana</h3>
                    <p class="data-description">Em 6 de março de 1817 eclodiu no Recife a chamada Revolução Pernambucana, também conhecida como "Revolução dos Padres". Dentre as suas causas, destacam-se a influência das ideias iluministas propagadas pelas sociedades maçônicas</p>
                </div>

                <h2 class="timeline__item timeline__item--year">1840</h2>

                <div class="timeline__item">
                    <h3 class="timeline__title">Transição do trabalho escravo para o trabalho livre</h3>
                    <p class="data-description">Na década de 1840, grandes mudanças ocorriam na sociedade e na economia de Pernambuco. como por exemplo: a transição do trabalho escravo para o trabalho livre.</p>
                </div>

                <h2 class="timeline__item timeline__item--year">1848</h2>

                <div class="timeline__item">
                    <h3 class="timeline__title">Revolução Praieira</h3>
                    <p class="data-description">Em 7 de novembro de 1848, tinha início em Recife, a Revolução Praieira (1848-1850) também chamada de Insurreição Praieira ou simplesmente Praieira.</p>
                </div>

                <h2 class="timeline__item timeline__item--year">1910</h2>

                <div class="timeline__item">
                    <h3 class="timeline__title">Paris Pernambucana</h3>
                    <p class="timeline__blurb">Nos anos 1910, a cidade pretendia tornar-se moderna, tal como Paris, através da reforma do porto e construção de largas avenidas, sem preocupação com a preservação dos edifícios históricos, muitos dos quais completamente demolidos.</p>
                </div>

                <h2 class="timeline__item timeline__item--year">1950</h2>
                <div class="timeline__item">
                    <h3 class="timeline__title">Do interior para a Cidade</h3>
                    <p class="timeline__blurb">Na década de 1950, o Recife ganhou seu contorno urbano atual, com o crescimento populacional ocasionado pela migração de pessoas do interior nordestino e a extinção dos mocambos, obrigando a população pobre a viver nos morros.</p>
                </div>

                <div class="timeline__item">
                    <h3 class="timeline__title">Application Engineer</h3>
                <p class="timeline__blurb">Started web design/dev job at company 2.</p>
                </div>

                <h2 class="timeline__item timeline__item--year">2012</h2>

                <div class="timeline__item">
                    <h3 class="timeline__title">First Child</h3>
                <p class="timeline__blurb">Spouse and I welcomed our first daughter.</p>
                </div>

                <h2 class="timeline__item timeline__item--year">2015</h2>

                <div class="timeline__item">
                    <h3 class="timeline__title">Second Child</h3>
                <p class="timeline__blurb">Spouse and I welcomed our second daughter.</p>
                </div>

                <h2 class="timeline__item timeline__item--year">2016</h2>

                <div class="timeline__item">
                    <h3 class="timeline__title">Lead Application Engineer</h3>
                <p class="timeline__blurb">Promotion to mid-level role.</p>
                </div>

                <h2 class="timeline__item timeline__item--year">2018</h2>

                <div class="timeline__item">
                    <h3 class="timeline__title">Aerial/Circus Arts</h3>
                <p class="timeline__blurb">Started taking classes to learn aerial silks, hoop, and hammock.</p>
                </div>

                <h2 class="timeline__item timeline__item--year">2019</h2>

            </div>
            <!-- linha do tempo -->
            <section class="timeline">
                <!-- colocar o png da escultura de brenannd-->
                <div class="png-brenannd">
                    <img src="../assets/img/stickers/escultura-brennand.png" alt="" width="100px">
                </div>
            </section>
        </section>

        <!-- SECTION POPULATION-->
        <section id="population">
            <header class="head-sections">
                <div class="head-sections head-population">
                    <img class="icon-brilho" src="../assets/icons/brilhinho.png" alt="Icone de Brilho"> 
                    <h2>POPULACAO</h2> 
                    <img class="icon-brilho" src="../assets/icons/brilhinho.png" alt="Icone de Brilho"> 
                </div>
            </header>

            <!-- table container -->
            <div class="container">
                <table>
                    <thead>
                        <tr>
                            <th>Ranking</th>
                            <th>Bairro</th>
                            <th>Habitantes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">#1</th>
                            <td>Boa Viagem</td>
                            <td>122.922</td>
                        </tr>
                        <tr>
                            <th scope="row">#2</th>
                            <td>Várzea</td>
                            <td>70.453</td>
                        </tr>
                        <tr>
                            <th scope="row">#3</th>
                            <td>Cohab</td>
                            <td>67.283</td>
                        </tr>
                        <tr>
                            <th scope="row">#4</th>
                            <td>Iputinga</td>
                            <td>42.200</td>
                        </tr>
                        <tr>
                            <th scope="row">#5</th>
                            <td>Ibura</td>
                            <td>50.617</td>
                        </tr>
                        <tr>
                            <th scope="row">#6</th>
                            <td>Imbiribeira</td>
                            <td>48.512</td>
                        </tr>
                        <tr>
                            <th scope="row">#7</th>
                            <td>Água Fria</td>
                            <td>43.529</td>
                        </tr>
                        <tr>
                            <th scope="row">#8</th>
                            <td>Cordeiro</td>
                            <td>41.164</td>
                        </tr>
                        <tr>
                            <th scope="row">#9</th>
                            <td>Afogados</td>
                            <td>36.265</td>
                        </tr>
                        <tr>
                            <th scope="row">#10</th>
                            <td>Nova Descoberta</td>
                            <td>34.212</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </section>
        
        <!-- SECTION TURISMO -->
        <section id="tourism" class="section-tourism">
            <header class="header-tourism">
                <div class="head-sections head-tourism">
                    <img class="icon-brilho" src="../assets/icons/brilhinho.png" alt="Icone de Brilho"> 
                    <h2> TURISMO POR AQUI </h2> 
                    <img class="icon-brilho" src="../assets/icons/brilhinho.png" alt="Icone de Brilho"> 
                </div>
                
                <span>Bora conhecer os lugares mais famosos de Hellcife!</span> 

                <img class="busao-brt front" src="../assets/img/stickers/busao-frente.png" alt="brtfrente"> 
            </header>

            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                  <!-- Slides -->
                  <div class="swiper-slide"><img src="../assets/img/lugares/paco-alfandega.png" alt="pacoalfandega"></div>
                  <div class="swiper-slide"><img src="../assets/img/lugares/cinema-saoluiz.png" alt="cinemasaoluiz"></div>
                  <div class="swiper-slide">  <img src="../assets/img/lugares/paco-dofrevo.png" alt="pacodofrevo"></div>
                  <div class="swiper-slide"><img src="../assets/img/lugares/parque-jaqueira.png" alt="parquedajaqueira"></div>
                  <div class="swiper-slide"><img src="../assets/img/lugares/cais-doporto.png" alt="caisdoporto"></div>
                  <div class="swiper-slide"> <img src="../assets/img/lugares/ricardo-brennand.png" alt="institutoricardobrennand"></div>
                  <div class="swiper-slide"> <img src="../assets/img/lugares/praia-bv.png" alt="praiadeboaviagem"></div>
                  ...
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
              
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
              
                <!-- If we need scrollbar -->
                <div class="swiper-scrollbar"></div>
              </div>

           <!-- <div class="swiper-wrapper">
                <div class="card-places">
                    <div class="swiper-slide"><img src="assets\img\lugares\teatro-santaisabel.png" alt="teatrosantaisabel"></div>
                    <div class="swiper-slide"><img src="assets\img\lugares\paco-alfandega.png" alt="pacoalfandega"></div>
                    <div class="swiper-slide"><img src="assets\img\lugares\paco-dofrevo.png" alt="pacodofrevo"></div>
                    <div class="swiper-slide"><img src="assets\img\lugares\cinema-saoluiz.png" alt="cinemasaoluiz"></div>
                    <div class="swiper-slide"><img src="assets\img\lugares\parque-jaqueira.png" alt="parquedajaqueira"></div>
                    <div class="swiper-slide"><img src="assets\img\lugares\cais-doporto.png" alt="caisdoporto"></div>
                    <div class="swiper-slide"><img src="assets\img\lugares\ricardo-brennand.png" alt="institutoricardobrennand"></div>
                    <div class="swiper-slide"><img src="assets\img\lugares\praia-bv.png" alt="praiadeboaviagem"></div>
                    </div>
                    ...
                    <div class="swiper-pagination"></div>
                    
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    
                    <div class="swiper-scrollbar"></div>
                    </div>-->
                    
            
                    
                    <img class="busao-brt back" src="../assets\img\stickers\busao-costa.png" alt="brtcosta"> 
                    
                    <!-- CARROSSEL ASSOMBRADO -->
                    <div id="myCarousel" class="carousel slide container" data-bs-ride="carousel">
                        <div class="carousel-inner w-100">
                    <div class="carousel-item active">
                        <div class="col-md-3">
                            <div class="card card-body">
                                <img class="img-fluid" src="https://via.placeholder.com/640x360?text=1">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <div class="card card-body">
                                <img class="img-fluid" src="https://via.placeholder.com/640x360?text=2">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <div class="card card-body">
                                <img class="img-fluid" src="https://via.placeholder.com/640x360?text=3">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <div class="card card-body">
                                <img class="img-fluid" src="https://via.placeholder.com/640x360?text=4">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <div class="card card-body">
                                <img class="img-fluid" src="https://via.placeholder.com/640x360?text=5">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <div class="card card-body">
                                <img class="img-fluid" src="https://via.placeholder.com/640x360?text=6">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <div class="card card-body">
                                <img class="img-fluid" src="https://via.placeholder.com/640x360?text=7">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <div class="card card-body">
                                <img class="img-fluid" src="https://via.placeholder.com/640x360?text=8">
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <!-- SECTION CULTURA -->  
        <section id="culture" class="section-culture">
            
            <!-- header da secao -->
            <header class="header-culture">

                <img src="../assets/img/stickers/la-ursa.png" alt="Png La Ursa"> 

                <div class="head-sections head-culture">
                    <img class="icon-brilho" src="../assets/icons/brilhinho.png" alt="Icone de Brilho"> 

                    <h2>NOSSA CULTURA</h2> 
                    
                    <img class="icon-brilho" src="../assets/icons/brilhinho.png" alt="Icone de Brilho"> 
                </div>

                <img src="../assets/img/stickers/caboclo-delanca.png" alt="Png Caboclo de Lança"> 
            </header>

            <!-- secao de artistas -->
            <section class="section-artists">
                <!-- subtitulo da secao -->
                <div class="section-subtitle">
                    <img src="../assets/icons/brilhinho.png" alt="Icone de Brilho">
                    <h5>Artistas Locais</h5>
                    <img src="../assets/icons/brilhinho.png" alt="Icone de Brilho">
                </div>
                <!-- card dos artistas -->
                <div class="cards-artistas">
                    <div class="artista lenine">
                        <img class="foto-artista" src="../assets/img/artistas/lenine.png" alt="capaLenine">
                        <img class="disco" src="../assets/img/artistas/vinil.png" alt="vinil">
                    </div>
                    <div class="artista reginaldo-rose">
                        <img class="foto-artista" src="../assets/img/artistas/reginaldo-rossi.png" alt="capaRossi">
                        <img class="disco" src="../assets/img/artistas/vinil.png" alt="vinil">
                    </div>
                    <div class="artista alceu-valenca">
                        <img class="foto-artista" src="../assets/img/artistas/alceu-valenca.png" alt="capaAlceu">
                        <img class="disco" src="../assets/img/artistas/vinil.png" alt="vinil">
                    </div>
                    <div class="artista luiz-gonzaga">
                        <img class="foto-artista" src="../assets/img/artistas/luiz-gonzaga.png" alt="capaGonzaga">
                        <img class="disco" src="../assets/img/artistas/vinil.png" alt="vinil">
                    </div>
                    <div class="artista chico-science">
                        <img class="foto-artista" src="../assets/img/artistas/chico-science.png" alt="capaChico">
                        <img class="disco" src="../assets/img/artistas/vinil.png" alt="vinil">
                    </div>
                    <div class="artista rafaela-santos">
                        <img class="foto-artista" src="../assets/img/artistas/rafaela-santos.png" alt="capaRafaela">
                        <img class="disco" src="../assets/img/artistas/vinil.png" alt="vinil">
                    </div>
                    <div class="artista joao-gomes">
                        <img class="foto-artista" src="../assets/img/artistas/joao-gomes.png" alt="capaJoaoGomes">
                        <img class="disco" src="../assets/img/artistas/vinil.png" alt="vinil">
                    </div>
                    <div class="artista priscila-senna">
                        <img class="foto-artista" src="../assets/img/artistas/priscila-senna.png" alt="capaSenna">
                        <img class="disco" src="../assets/img/artistas/vinil.png" alt="vinil">
                    </div>
                    <div class="artista conde-so-brega">
                        <img class="foto-artista" src="../assets/img/artistas/conde-sobrega.png" alt="capaConde">
                        <img class="disco" src="../assets/img/artistas/vinil.png" alt="vinil">
                    </div>
                </div>
            </section>

            <!-- secao dos ritmos -->
            <section class="section-ritmos">
                <!-- subtitulo da secao -->
                <div class="section-subtitle">
                    <img src="../assets/icons/brilhinho.png" alt="Icone de Brilho">
                    <h5>Ritmos Populares</h5>
                    <img src="../assets/icons/brilhinho.png" alt="Icone de Brilho">
                </div>
                <!-- cards dos ritmos -->
                <div class="cards-ritmos">
                    <div class="card-ritmo card-frevo">
                        <iframe width="350" height="315" src="https://www.youtube.com/embed/66cAD7-9tXY?si=dv0xwG59iPolwuy7" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <span>Frevo</span>
                        <p>O Frevo é o típico ritmo pernambucano, considerado pela UNESCO um Patrimônio Cultural Imaterial da Humanidade. É aquele ritmo animado que tanto esperamos pra dançar no carnaval, com suas cores vibrantes e passos em ritmo acelerado, o Frevo é contagiante e, como o próprio nome sugere, "ferve" nas ruas e arrasta milhares de foliões por onde passa.</p>
                    </div>

                    <div class="card-ritmo card-brega-funk">
                        <iframe width="350" height="315" src="https://www.youtube.com/embed/n79Okdb4VIQ?si=9TrneofwhF3DqeRH" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <span>Brega Funk</span>
                        <p>O brega funk é a união do brega com o funk, que surgiu em 2011, em Recife, Pernambuco, após uma tentativa de deixar um brega romântico, mais rápido e alegre. Depois disso, o ritmo estourou, e virou sucesso no Brasil todo, mas sempre ressaltando o cotidiano das comunidades recifenses.</p>
                    </div>

                    <div class="card-ritmo card-manguebeat">
                        <iframe width="350" height="315" src="https://www.youtube.com/embed/_G63uF288T4?si=uHzQxju02sKhJZFJ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <span>Manguebeat</span>
                        <p>O manguebeat é um movimento cultural, uma forma de protesto que os idealizadores do movimento encontraram, para de certa forma “reviver Recife”, que na época passava por crises econômicas e culturais. O ritmo em si, é uma junção de diversos misturava elementos da cultura regional de Pernambuco, como o maracatu rural, rock, hip-hop e música eletrônica. O nome Manguebeat, também é a união da palavra mangue, ecossistema típico da costa do Nordeste brasileiro e da cidade de Recife, com a palavra beat, do inglês, que significa batida, mas que também faz referência aos bits, utilizados na informática.</p>
                    </div>

                    <div class="card-ritmo card-maracatu">
                        <iframe width="350" height="315" src="https://www.youtube.com/embed/PEsG45YRYwY?si=CRvhBTU-N8fLfgYa" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <span>Maracatu</span>
                        <p>O maracatu é uma manifestação cultural pernambucano, composto por músicas, danças e outro elementos herdados da cultura africana, que surgiu como uma forma de resistência à opressão dos colonizadores, por parte dos escravos. Após o fim da escravidão no Brasil no final do século XIX, o maracatu começou a ser inserido de forma gradual como parte das comemorações carnavalescas da cidade de Recife. Além disso, no Recife, o dia 1º de agosto, é o Dia Municipal do Maracatu de Baque Virado.</p>
                    </div>

                    <div class="card-ritmo card-forro">
                        <iframe width="350" height="315" src="https://www.youtube.com/embed/bjBx8aOJuq0?si=1dj7LYn4qz7figiq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <span>Forró</span>
                        <p>O forró é aquele som e dança animada que nasceu no nordeste do Brasil e conquistou o país inteiro. Originou-se nas festas juninas, com influências de vários ritmos, como indígena, africano e europeu. Na música, a sanfona, o triângulo e a zabumba dão o tom alegre, enquanto as letras falam da vida e das tradições nordestinas.</p>
                    </div>

                    <div class="card-ritmo card-caboclinho">
                        <iframe width="350" height="315" src="https://www.youtube.com/embed/M8I2l-sJyvQ?si=A5eu2gfEHwnhuxGc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <span>Caboclinho</span>
                        <p>Os caboclinhos são grupos populares de representação da cultura indígena, que se apresentam principalmente durante o Carnaval, geralmente em filas duplas e sempre portando suas preacas (instrumento em forma de arco e flecha). Os artistas se vestem de índios e saem pelas ruas, animando multidões, exibindo danças, músicas e muita alegria.</p>
                    </div>

                    <div class="card-ritmo card-ciranda">
                        <iframe width="350" height="315" src="https://www.youtube.com/embed/EEWUx6_rwRY?si=w8MFwLLI_J0nvhng" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <span>Ciranda</span>
                        <p>A ciranda é um ritmo cultural pernambucano, dançado e cantado em rodas, aberto para quem quiser participar, é uma forma de celebrar, um ritmo fácil que conta muito sobre Pernambuco. Tradicionalmente, no centro da roda posiciona-se o mestre, o contramestre e os músicos, os paços não são definitivos, resumindo é só chegar e dançar. Uma das cirandeiras mais conhecidas do país, Lia de Itamaracá, foi considerada em 2005, patrimônio vivo de Pernambuco.</p>
                    </div>

                    <div class="card-ritmo card-brega">
                        <iframe width="350" height="315" src="https://www.youtube.com/embed/8Xe8gApDRgU?si=dPloicwwNSdCv-Kc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <span>Brega</span>
                        <p>O brega, é um ritmo romântico, ramificado na Jovem Guarda, mas sem os elementos do rock. O nome “brega” surge como uma maneira pejorativa para se referir aos artistas desse ritmo, devido suas músicas “cafonas”, mas que ganhou força em Pernambuco, principalmente por causa do rei do brega Reginaldo Rossi. Hoje o ritmo toca no Brasil todo, e tem até um dia especial só pra ele, “O Dia Municipal da Música Brega”, que é comemorado em 14 de fevereiro. instituído no calendário oficial de eventos da cidade do Recife.</p>
                    </div>
                </div>
            </section>

            <!-- secao de culinaria -->
            <section class="culinaria">
                <div class="section-subtitle">
                    <img src="../assets/icons/brilhinho.png" alt="Icone de Brilho">
                    <h5>Culinária</h5>
                    <img src="../assets/icons/brilhinho.png" alt="Icone de Brilho">
                </div>
                <div class="gallery">
                    <div class="img-gallery">
                        <a href="https://panelinha.com.br/receita/cuscuz-milho" target="_blank">
                            <img src="../assets/img/comidas/cuscuz.png" alt="Foto culinaria cuscuz">
                        </a>
                    </div>

                    <div class="img-gallery">
                        <a href="https://www.tudogostoso.com.br/receita/15246-bolo-de-rolo-de-recife.html" target="_blank">
                            <img src="../assets/img/comidas/bolo-rolo.png" alt="Foto culinaria bolo de rolo">
                        </a>
                    </div>

                    <div class="img-gallery">
                        <a href="https://www.tudogostoso.com.br/receita/4928-tapioca.html" target="_blank">
                            <img src="../assets/img/comidas/tapioca.png" alt="Foto culinaria tapioca">   
                        </a>                 
                    </div>
                        
                    <div class="img-gallery">
                        <a href="https://www.tudogostoso.com.br/receita/52835-buchada-deliciosa.html" target="_blank">
                            <img src="../assets/img/comidas/bolao-depeixe.png" alt="Foto culinaria buxada">
                        </a>
                    </div>

                    <div class="img-gallery">
                        <a href="https://www.tudogostoso.com.br/receita/1444-cartola.html" target="_blank">
                            <img src="../assets/img/comidas/doce-cartola.png" alt="Foto culinaria doce-cartola">                    
                        </a>
                    </div>

                    <div class="img-gallery">
                        <a href="https://www.tudogostoso.com.br/receita/16617-arrumadinho.html" target="_blank">
                            <img src="../assets/img/comidas/arrumadinho.png" alt="Foto culinaria arrumadinho">      
                        </a>     
                    </div>

                    <div class="img-gallery">
                        <a href="https://www.tudogostoso.com.br/receita/1106-camarao-na-moranga.html" target="_blank">
                            <img src="../assets/img/comidas/jerimum-moranga.jpg" alt="Foto culinaria camarao moranga">                    
                        </a>
                    </div>

                    <div class="img-gallery">
                        <a href="https://www.tudogostoso.com.br/receita/2753-cocada.html" target="_blank">
                            <img src="../assets/img/comidas/cocada.png" alt="Foto culinaria cocada">
                        </a>
                    </div>

                    <div class="img-gallery">
                        <a href="https://www.tudogostoso.com.br/receita/2620-bolo-souza-leao.html" target="_blank">
                            <img src="../assets/img/comidas/bolo-souza-leao.jpg" alt="Foto culinaria bolo souza leao">
                        </a>
                    </div>

                    <div class="img-gallery">
                        <a href="https://www.tudogostoso.com.br/receita/35-pamonha-doce.html" target="_blank">
                            <img src="../assets/img/comidas/pamonha.png" alt="Foto culinaria pamonha">
                        </a>
                    </div>
                </div>
            </section>
        </section>

        <!-- banner de separacao -->
        <div class="banner-finalizacao">
            <h6>Iai meu chegado, gostasse do conteúdo? </h6>
            <span>Então te liga que encontramos um jeitinho pra tu aproveitar cada pedacinho de Recife da melhor forma!</span>
        </div>

        <!-- SECTION RECICLUBE -->
        <section id="reciclube" class="reciclube">
            <header class="header reciclube">
                <img src="../assets/img/stickers/tubarao.png" alt="Png do Tubarao" width="200px"> 

                <div class="title reciclube">
                    <img src="../assets/icons/brilhinho.png" alt="Icone de Brilho"> 

                    <h2>RECICLUBE</h2> 
                    
                    <img src="../assets/icons/brilhinho.png" alt="Icone de Brilho"> 
                </div>

                <img src="../assets/img/stickers/lausa.png" alt="Png La Ursa" width="200px"> 
            </header>

            <!-- descricao do que eh o reciclube-->
            <div class="text-description">
                <h3>
                    E isso mesmo Marinelson! <br>
                    Criamos o <strong> PRIMEIRO e UNICO </strong> clube de assinaturas exclusivamente <strong> RECIFENSE! </strong> 
                </h3>
                <span>e sabe o melhor?? senta que la vem bomba! 👀</span>
            </div>

            <!-- SECTION PRECO -->
            <section class="section-preco">
                <h3>Nossa Assinatura MENSAL custa apenas </h3>

                <div class="preco-relative">
                    <img class="centavos" src="../assets/img/stickers/centavos.png" alt="" width="400px" >
                    <img class="ballon-rs" src="../assets/img/stickers/rs.png" alt="" width="80px">
                    <span class="span-preco">0,99</span>
                </div>
                <span>E menine, pra tu ve! Ta mais barato que a poca sal e doce no metro!</span>
            </section>

            <!-- SECTION BENEFICIOS -->
            <section class="section-beneficios">
                <header class="header-beneficios">
                    <img src="../assets/img/stickers/tubarao.png" alt="Png do Tubarao" width="100px"> 

                    <div class="title beneficios">
                        <img src="../assets/icons/brilhinho.png" alt="Icone de Brilho" width="30px"> 

                        <h2>BENEFICIOS</h2> 
                        
                        <img src="../assets/icons/brilhinho.png" alt="Icone de Brilho" width="30px"> 
                    </div>

                    <img src="../assets/img/stickers/tubarao.png" alt="Png do Tubarao" width="100px"> 
                </header>

                <div class="beneficios">

                    <div id="featuresSection" class="container">
                        <div class="row">
                            <div class="col-12 col-md-6 mt-3">
                                <div class="d-flex flex-row">
                                    <img src="https://assets.ccbp.in/frontend/responsive-website/awsome-features-1-img.png" alt="" />
                                    <div>
                                        <h2>Roles</h2>
                                        <p>Divulgação de Eventos e Festivais que vao rolar em Recife</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mt-3">
                                <div class="d-flex flex-row">
                                    <img src="https://assets.ccbp.in/frontend/responsive-website/awsome-features-2-img.png" alt="" />
                                    <div>
                                        <h2>Descontos</h2>
                                        <p>Pague mais barato em lojas, barzinhos e restaurantes parceiros!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mt-3">
                                <div class="d-flex flex-row">
                                    <img src="https://assets.ccbp.in/frontend/responsive-website/awsome-features-3-img.png" alt="" />
                                    <div>
                                        <h2>Jornal Digital</h2>
                                        <p>Noticias e fofocas Recifenses em primeira mao</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mt-3">
                                <div class="d-flex flex-row">
                                    <img src="https://assets.ccbp.in/frontend/responsive-website/awsome-features-4-img.png" alt="" />
                                    <div>
                                        <h2>Gameficacao</h2>
                                        <p>Acumule pontos e concorra a brindes exclusivos da nossa cultura pernambucana</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- botao pra levar pro form -->
                <!-- <button class="button-form">Simbora!</button> -->
                <button class="button-54" role="button">Simbora!</button>

            </section>
            
            <!-- SECTION COM O FORMULARIO-->
            <section class="section-formulario">
                <div class="title">
                    <img src="../assets/icons/brilhinho.png" alt="Icone de Brilho" width="30px"> 
                    
                    <h2>QUERO ASSINAR!</h2> 
                
                    <img src="../assets/icons/brilhinho.png" alt="Icone de Brilho" width="30px"> 
                </div>
                
                <!-- formulario de assinatura -->

                <form action="" class="formulario" method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputName">Nome</label>
                            <input type="text" id="inputName" class="form-control" name="nome" placeholder="Lenin" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputSurname">CPF</label>
                            <input type="text" class="form-control" id="inputSurname" name="cpf" placeholder="Abdie" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="leninabdie@email.com" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Senha</label>
                            <input type="password" class="form-control" id="inputPassword4" name="senha" placeholder="123@abc" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputAddress">Endereço</label>
                        <input type="text" class="form-control" id="inputAddress" name="endereco" placeholder="Av Vinicius de Morais, 25" required>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Cidade</label>
                            <input type="text" class="form-control" name="cidade" id="inputCity" required>
                        </div>
                    </div>

                    <span>Voce e Pernambucano/a?</span>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                          Sim
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
                        <label class="form-check-label" for="flexRadioDefault2">
                          Nao
                        </label>
                      </div>

                    <button type="submit" class="button-54" role="button">Ir para o pagamento!</button>

                </form>
            </section>
        </section>

        <!-- FOOTER -->
        <footer>
            <header class="footer">
                <h2 class="footer title">Valeu pela visita, visse?</h2>
                <span class="footer">Volte sempre pra esse site e pra Recife!</span>
            </header>

            <div class="center-content">
                <img src="../assets/img/stickers/lausa.png" alt="La ursa" class="laursa-footer">
                <a href="#inicio"><button class="button-54" role="button">Voltar pro Topo</button></a>
            </div>

            
                <!-- ----- CRIAR BOTAO DE VOLTAR PRO TOPO -------- -->

            
            <div class="section-creattors">
                <hr>
                <span class="span-footer">Design, Conteúdo e Desenvolvimento por</span>

                <div class="creattors">
                    <div class="name vitorya">
                        <h4>Vitórya Medeiros</h4>

                        <div class="icons-footer">
                            <a href="https://github.com/vitoryamedeiros" target="_blank">
                                <img src="../assets/icons/github.png" alt="Github Logo">
                            </a>
                            <a href="https://www.linkedin.com/in/vitoryamedeiros/" target="_blank">
                                <img src="../assets/icons/linkedin.png" alt="Linkedin Logo">
                        </div>
                        </a>
                    </div>

                    <div class="name guilherme">
                        <h4>José Guilherme</h4>

                        <div class="icons-footer">
                            <a href="https://github.com/guixjs" target="_blank">
                                <img src="../assets/icons/github.png" alt="Github Logo">
                            </a>
                            <a href="https://www.linkedin.com/in/guilherme-felix-7195b32ba/" target="_blank">
                                <img src="../assets/icons/linkedin.png" alt="Linkedin Logo">
                            </a>
                        </div>
                    </div> 

                    <div class="name izaa">
                        <h4>Izaadora Laís</h4>

                        <div class="icons-footer">
                            <a href="" target="_blank">
                                <img src="../assets/icons/github.png" alt="Github Logo">
                            </a>
                            <a href="https://www.linkedin.com/in/izaadora-laís-cunha-neves-7206742a8/" target="_blank">
                                <img src="../assets/icons/linkedin.png" alt="Linkedin Logo">
                            </a>
                        </div>
                    </div>

                    <div class="name miguel">
                        <h4>Miguel Eudio</h4>

                        <div class="icons-footer">
                            <a href="https://github.com/MiguelEudio" target="_blank">
                                <img src="../assets/icons/github.png" alt="Github Logo">
                            </a>
                            <a href="https://www.linkedin.com/in/miguel-batista-76344022b/" target="_blank">
                                <img src="../assets/icons/linkedin.png" alt="Linkedin Logo">
                            </a>
                        </div>
                    </div>         

                    <div class="name anabea">
                        <h4>Ana Beatriz</h4>

                        <div class="icons-footer">
                            <a href="https://github.com/anabeatrizssouza" target="_blank">
                                <img src="../assets/icons/github.png" alt="Github Logo">
                            </a>
                            <a href="https://www.linkedin.com/in/ana-beatriz-silva-souza-80bbb2301/" target="_blank">
                                <img src="../assets/icons/linkedin.png" alt="Linkedin Logo">
                            </a>
                        </div>
                    </div>    
                </div>             
            </div> 
        </footer>
        
        <div class="direitos">
            <span>TODOS OS DIREITOS RESERVADOS</span>
        </div>
    </main>


    <!--====JAVASCRIPT IMPORTS=====-->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="../js/carrosselCards.js"></script>
</body>
</html>
