<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Página | Inicial</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
	<!-- CSS here -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
	<link rel="stylesheet" href="assets/css/animate.min.css">
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="assets/css/themify-icons.css">
	<link rel="stylesheet" href="assets/css/slick.css">
	<link rel="stylesheet" href="assets/css/nice-select.css">
	<link rel="stylesheet" href="assets/css/style.css">
    <?php
        session_start();
        include_once "conexao_local.php";
        if((!isset($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true)){
            session_unset();
        }else{
            $logado = $_SESSION['nome'];
        }
    ?>
</head>
<body>
    <!--? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header">
                <div class="header-bottom header-sticky">
                    <!-- Logo -->
                    <div class="logo d-none d-lg-block">
                        <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
                    </div>
                    <div class="container">
                        <div class="menu-wrapper">
                            <!-- Logo -->
                            <div class="logo logo2 d-block d-lg-none">
                                <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                            <!-- Main-menu -->
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">                                                                
                                        <li><a href="#" style="color: blue;">Início</a></li>
                                        <li><a href="livros.php">Livros</a></li>
                                        <li><a href="escritores.php">Escritores</a></li>
                                        <li><a href="premiados.php">Premiados</a></li>
                                        <li><a href="sobre.php">Sobre</a></li>
                                        <?php
                                            //session_start();
                                            //include_once "conexao_local.php";
                                            if((!isset($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true)){
                                                echo '<li class="d-block d-lg-none"><a href="login.html">Acesso a conta</a></li>';
                                            }else{
                                                //$logado = $_SESSION['nome'];
                                                echo '<li class="d-block d-lg-none"><a href="interesse.php">Lista de Desejo</a></li>
                                                      <li class="d-block d-lg-none"><a href="excluirconta.php">Excluir conta</a></li>
                                                      <li class="d-block d-lg-none"><a href="desconectar.php">Desconectar</a></li>';
                                            }
                                        ?>
                                    </ul>
                                </nav>
                            </div>
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-right">
                                    <div class="main-menu d-none d-lg-block">
                                        <?php
                                            //session_start();
                                            //include_once "conexao_local.php";
                                            if((!isset($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true)){
                                                echo '  <ul>    
                                                            <li><a href="login.html"><i class="ti-user"></i> Entrar</a></li>
                                                            <li><a href="criar.html"><i class="ti-lock"></i> Registrar</a></li>
                                                        </ul>';
                                            }else{
                                                //$logado = $_SESSION['nome'];
                                                echo '  <ul>
                                                            <div class="dropdown" style="cursor: pointer;">
                                                                <li class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti-user"></i> '.$logado.'</li>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                    <a class="dropdown-item" href="interesse.php">Lista de Desejo</a>
                                                                    <a class="dropdown-item" href="excluirconta.php">Excluir conta</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="desconectar.php">Desconectar</a>
                                                                </div>
                                                            </div>
                                                        </ul>';
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        <!--? slider Area Start-->
        <div class="slider-area ">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-7 col-md-8">
                                <div class="hero__caption">
                                    <span data-animation="fadeInLeft" data-delay=".2s">Livros</span>
                                    <h1 data-animation="fadeInLeft" data-delay=".4s">O Novo Jeito De Conhecer Novos Livros!</h1>
                                   
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-5">
                                <div class="hero-man d-none d-lg-block f-right" data-animation="jello" data-delay=".4s">
                                    <img src="assets/img/hero/livro.png" height="400" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!-- -->
        <!-- Vertically centered modal -->


        <!--? Categories Area Start -->
        <div class="categories-area section-padding30">
            <div class="container">
                <div class="row justify-content-sm-center">
                    <div class="cl-xl-7 col-lg-8 col-md-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-70">
                            <span>Avaliações</span>
                            <h2>Livros Com Melhores Avaliações</h2>
                        </div> 
                    </div>
                </div>
                <div class="row">

                    <!-- BOTAR O PHP AQUI PRA FAZER UM LOOP COM OS LIVROS MAIS AVALIADOS-->
                    <?php 
                        include_once "conexao_local.php";
                        $conecta = mysqli_connect($nome_servidor, $nome_usuario, $senhaBanco, $nome_banco);
                        $livros = mysqli_query($conecta, "SELECT * FROM avaliacao as av inner join livros as l on av.livros_id = l.id group by av.livros_id order by l.titulo desc");
                        $i=0;
                        //Loop de todos os livros
                        while($exibe = mysqli_fetch_assoc($livros)){
                            $avaliacao[$i] = $exibe["avaliacao"];
                            $titulo[$i] = $exibe["titulo"];
                            $autor[$i] = $exibe["autor"];
                            $data[$i] = $exibe["ano"];
                            $livros_id[$i] = $exibe["id"];
                            $img_id[$i] = $exibe["imagem"];
                            $descricao[$i] = $exibe["descricao"];

                            echo ' <div class="modal" id="'.$img_id[$i].'" tabindex="-1">
                                      <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title">'.$titulo[$i].'</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <p>'.$descricao[$i].'</p>
                                          </div>
                                          
                                        </div>
                                      </div>
                                    </div>';

                            echo '<div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                    <div class="single-cat mb-15">
                                        <div class="cat-icon">
                                            <span class="flaticon-education"></span>
                                        </div>
                                        <div class="cat-cap">
                                            <h5><a class="texto-riiii">'.$titulo[$i].'</a></h5>
                                            <p class="texto-riiii">'.$autor[$i].' - 2014</p>
                                        
                                            <a href="#" class="read-more1" data-toggle="modal" data-target="#'.$img_id[$i].'">Sinopse</a>
                                        </div>
                                    </div>
                                </div>';
                            $i++;
                        }
                    ?>

                </div>
                <!-- Section Button -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="browse-btn2 text-center mt-50">
                            <a href="livros.php" class="btn">Procurar mais livros</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Categories Area End -->
        
        <!--? Popular Course Start -->
        <div class="popular-course section-padding30">
            <div class="container">
                <div class="row justify-content-sm-center">
                    <div class="cl-xl-7 col-lg-8 col-md-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-70">
                            <span>Os livros mais populares da semana</span>
                            <h2>Livros Populares</h2>
                        </div> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-6">
                        <!-- Single course -->
                        <div class="single-course mb-15">
                            <div class="course-img">
                                <img src="assets/img/gallery/selecao.jpg" height="300" alt="">
                            </div>
                            <div class="course-caption">
                                <div class="course-cap-top">
                                    <h4><a href="#" data-toggle="modal" data-target="#Modal6">A seleção</a></h4>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-6">
                        <!-- Single course -->
                        <div class="single-course mb-15">
                            <div class="course-img">
                                <img src="assets/img/gallery/prometida.jpg" height="300" alt="">
                            </div>
                            <div class="course-caption">
                                <div class="course-cap-top">
                                    <h4><a href="#" data-toggle="modal" data-target="#Modal7">A Prometida</a></h4>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-6">
                        <!-- Single course -->
                        <div class="single-course mb-15">
                            <div class="course-img">
                                <img src="assets/img/gallery/rainha.jpg" height="300" alt="">
                            </div>
                            <div class="course-caption">
                                <div class="course-cap-top">
                                    <h4><a href="#" data-toggle="modal" data-target="#Modal8">A Rainha Vermelha</a></h4>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
        <!-- Popular Course End -->
        <!--? Team Ara Start -->
        <div class="team-area pt-160 pb-160 section-bg" data-background="assets/img/gallery/section_bg02.png">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="cl-xl-7 col-lg-8 col-md-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle2 text-center mb-70">
                            <h2>Melhores Escritores</h2>
                        </div> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="assets/img/gallery/machado.png" height="163" alt="">
                                <!-- Blog Social -->
                              
                            </div>
                            <div class="team-caption">
                                <h3><a href="instructor.html">Machado de Assis</a></h3>
                                <p>Escritor Nacional</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="assets/img/gallery/will.jpg" height="163" alt="">
                                <!-- Blog Social -->
                              
                            </div>
                            <div class="team-caption">
                                <h3><a href="instructor.html">William Shakespeare</a></h3>
                                <p>Escritor Internacional</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="assets/img/gallery/curry.jpg" height="163" alt="">
                                <!-- Blog Social -->
                              
                            </div>
                            <div class="team-caption">
                                <h3><a href="instructor.html">Augusto Cury</a></h3>
                                <p>Escritor Internacional</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="assets/img/gallery/nicho.png" height="163" alt="">
                                <!-- Blog Social -->
                              
                            </div>
                            <div class="team-caption">
                                <h3><a href="instructor.html">Nicholas Sparks</a></h3>
                                <p>Escritor Internacional</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Section Button -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="browse-btn2 text-center mt-70">
                            <a href="escritores.php" class="btn white-btn">Ver Todos os Escritores</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team Ara End -->
       
        <!--? Testimonial Start -->
        <div class="testimonial-area fix section-bg" data-background="assets/img/gallery/section_bg03.png">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-9 col-md-9">
                        <div class="h1-testimonial-active">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial pt-65">
                                <!-- Testimonial tittle -->
                                <div class="testimonial-icon mb-45">
                                    <img src="assets/img/gallery/pequeno.jpg" height="125" class="ani-btn " alt="">
                                </div>
                                    <!-- Testimonial Content -->
                                <div class="testimonial-caption text-center">
                                    <p>É bem mais difícil julgar a si mesmo que julgar os outros. Se consegues fazer um bom julgamento de ti,
                                    és um verdadeiro sábio.</p>
                                    <!-- Rattion -->
                                    <div class="testimonial-ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="rattiong-caption">
                                        <span>Antoine de Saint-Exupéry<span> - Pequeno Príncipe</span> </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial pt-65">
                                <!-- Testimonial tittle -->
                                <div class="testimonial-icon mb-45">
                                    <img src="assets/img/gallery/melhor.jpg" height="125" class="ani-btn " alt="">
                                </div>
                                    <!-- Testimonial Content -->
                                <div class="testimonial-caption text-center">
                                    <p>O amor é a força mais poderosa do universo e quando duas pessoas se amam, nem a distância nem o tempo podem separá-las. </p>
                                    <!-- Rattion -->
                                    <div class="testimonial-ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>  
                                    <div class="rattiong-caption">
                                        <span>Nicholas Sparks<span> - O Melhor de Mim</span> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- INICIO MODAL -->
        <div class="modal" id="Modal" tabindex="-1">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Sapiens</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Somos a única espécie que acredita em coisas que não existem na natureza, como Estados, dinheiro e direitos humanos. Partindo dessa ideia, Yuval Noah Harari, doutor em história pela Universidade de Oxford, aborda em Sapiens a história da humanidade sob uma perspectiva inovadora.</p>
              </div>
              
            </div>
          </div>
        </div>

        <div class="modal" id="Modal1" tabindex="-1">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">It - A Coisa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>O mais profundo e tenebroso medo. Naquele verão, eles enfrentaram pela primeira vez a Coisa, um ser sobrenatural e maligno que deixou terríveis marcas de sangue em Derry. ... Em "It - A Coisa", clássico de Stephen King em nova edição, os amigos irão até o fim, mesmo que isso signifique ultrapassar os próprios limites.</p>
              </div>
              
            </div>
          </div>
        </div>


        <div class="modal" id="Modal2" tabindex="-1">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Game of Thrones</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p> Quando Eddard Stark, lorde do castelo de Winterfell, aceita a prestigiada posição de Mão do Rei oferecida pelo velho amigo, o rei Robert Baratheon, não desconfia que sua vida está prestes a ruir em sucessivas tragédias</p>
              </div>
              
            </div>
          </div>
        </div>

        <div class="modal" id="Modal3" tabindex="-1">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Harry Potter</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Harry Potter vive com os tios Dursley, onde é mal tratado até completar seus 11 anos. É com essa idade que o jovem bruxo começa a receber cartas da escola de Hogwarts. ... Harry é apresentado ao mundo dos bruxos e descobre que é muito famoso por ter sobrevivido ao ataque de Voldemort.</p>
              </div>
              
            </div>
          </div>
        </div>

        <div class="modal" id="Modal4" tabindex="-1">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">A Garota Do Lago</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Summit Lake, uma pequena cidade entre montanhas, é esse tipo de lugar, bucólico e com encantadoras casas dispostas à beira de um longo trecho de água intocada. Duas semanas atrás, a estudante de direito Becca Eckersley foi brutalmente assassinada em uma dessas casas.</p>
              </div>
              
            </div>
          </div>
        </div>

        <div class="modal" id="Modal5" tabindex="-1">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Terra De Histórias</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Os irmãos gêmeos Alex e Conner estão vivendo os piores dias de suas vidas. Para tentar alegrá-los, no aniversário de 12 anos, a avó os presenteia com o antigo livro de histórias que o pai costumava ler para eles, quando crianças, antes de dormir. E a magia volta a tomar conta da vida dos dois - de verdade!</p>
              </div>
              
            </div>
          </div>
        </div>

        <div class="modal" id="Modal6" tabindex="-1">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">A seleção</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Para trinta e cinco garotas, a Seleção é a chance de uma vida. É a oportunidade de ser alçada a um mundo de vestidos deslumbrantes e joias valiosas. De morar em um palácio, conquistar o coração do belo príncipe Maxon e um dia ser a rainha.</p>
              </div>
              
            </div>
          </div>
        </div>

        <div class="modal" id="Modal7" tabindex="-1">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">A Prometida</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>A Seleção está de volta com um novo universo apaixonante! Quando o rei Jameson se declara para a Lady Hollis Brite, ela fica radiante. Afinal, a jovem cresceu no castelo de Keresken, competindo com as outras damas da nobreza pela atenção do rei, e agora finalmente poderá provar seu valor.</p>
              </div>
              
            </div>
          </div>
        </div>

        <div class="modal" id="Modal8" tabindex="-1">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">A Rainha Vermelha</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>O mundo de Mare Barrow é dividido pelo sangue: vermelho ou prateado. Mare e sua família são vermelhos: plebeus, humildes, destinados a servir uma elite prateada cujos poderes sobrenaturais os tornam quase deuses.</p>
              </div>
              
            </div>
          </div>
        </div>
        
        <!-- FIM MODAL -->

    </main>
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    
    <!-- counter , waypoint -->
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    
    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
    
    </body>
</html>