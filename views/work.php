<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>The Way Sistemas</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/icon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.html"> <img src="assets/img/logoT.png" alt="Logo"></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="getstarted scrollto" href="index.php">Home</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h1>Empresa lider em satisfação</h1>
                    <h2>Venha fazer parte do nosso quadro de funcionários</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="#about" class="btn-get-started scrollto">Começar</a>
                        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Assista o video</span></a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section>
  

    <main id="main">
        
        <!-- ======= Contact Section ======= -->
        <section id="contato" class="contato">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Trabalhe Conosco</h2>
                    <p>Preencha o formulário abaixo para o processo seletivo</p>
                </div>

                <div class="row">

                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Localização:</h4>
                                <p>Rua leão xiii,437 - salesianos, Juazeiro do Norte</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>E-mail:</h4>
                                <p>Contato@thewaysitemas.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Tell:</h4>
                                <p>+55 88 9.9917-1813</p>
                            </div>

                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d989.5629329696725!2d-39.32303237077275!3d-7.212098469180289!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7a18208708b027f%3A0x2102a6deb556e677!2sR.%20Le%C3%A3o%20XIII%2C%20425%20-%20Salesianos%2C%20Juazeiro%20do%20Norte%20-%20CE%2C%2063050-168!5e0!3m2!1spt-BR!2sbr!4v1621035661425!5m2!1spt-BR!2sbr" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen=""></iframe>
                        </div>

                    </div>
                    <style>
                        /* Esconde o input */
                        input[type='file'] {
                            display: none
                        }

                        /* Aparência que terá o seletor de arquivo */
                        #ups {
                            background: #31a9e1;
                            border-radius: 5px;
                            color: #fff;
                            cursor: pointer;
                            margin: 10px;
                            padding: 9px 20px
                        }

                        #ups:hover {

                            color: #fff;
                            background-color: #3498db;


                        }
                    </style>
                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form method="POST" class="php-email-form" enctype="multipart/form-data">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="name">Seu Nome</label>
                                    <input type="text" name="nome" class="form-control" id="name" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="name">Seu E-mail</label>
                                    <input type="email" class="form-control" name="email" id="email" required>
                                </div>
                            </div>


                            <div class="row">

                                <div class="form-group col-md-6 ">
                                    <label for="name">Posicionamento</label>
                                    <select class="form-control" id="subject" name="posicao" required>
                                        <option value="Nenhum">Nenhum</option>
                                        <option value="Front">Frontend</option>
                                        <option value="Back">Backend</option>
                                        <option value="FullStack">Full Stack</option>

                                    </select>
                                </div>




                                <div class="form-group col-md-6 ">
                                    <label for="name">cargo:</label>
                                    <select class="form-control" id="subject" name="cargo" required>
                                        <option value="Desenvolvedor">Desenvolvedor</option>
                                        <option value="Suporte">Suporte</option>
                                        <option value="Vendedor">Vendedor</option>
                                        <option value="Analista">Analista</option>
                                        <option value="Estagiário">Estagiário</option>
                                    </select>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="name">Celular</label>
                                        <input type="text" class="form-control" name="telefone" id="subject" required>
                                    </div>
                                </div>

                                <div class="col-6 mt-4 form-group">
                                    <label id="ups" for='selecao-arquivo'>Selecionar arquivo &#187;</label>
                                    <input id='selecao-arquivo' name="arquivo" type='file'>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name">Breve Descrição</label>
                                <textarea class="form-control" name="msg" rows="5" required></textarea>
                            </div>
                 
                            <div class="text-center"><button name="btnEnviar" value="enviar" type="submit">Enviar</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Contact Section -->

    </main>
    <!-- End #main -->