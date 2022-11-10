

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
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

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

      <h1 class="logo me-auto"><a href="https://www.thewaysistemas.com.br/"> <img src="assets/img/logoT.png" alt="Logo"></a></h1>
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
            <h1>UMA SOFTHOUSE QUE AGREGA VALORES À SUA EMPRESA</h1>
            <h2>Alguns contam história, outros ouvem história, nós fazemos história</h2>
            <div class="d-flex justify-content-center justify-content-lg-start">
                <a href="#about" class="btn-get-started scrollto">Começar</a>
                <a href="#" class="glightbox btn-watch-video"><i
            class="bi bi-play-circle"></i><span>Assista o video</span></a>
            </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
            <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
    </div>
</div>

</section>
<!-- End Hero -->

<main id="main">






<!-- ======= Contact Section ======= -->
<section id="contato" class="contato">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Fale comigo!</h2>
            <p>Preencha o formulário abaixo.</p>
        </div>

        <div class="row">

 

            <div class="col-12 mt-5 mt-lg-0 d-flex align-items-stretch">
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" role="form" class="php-email-form">
                  
                <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Seu Nome</label>
                                <input type="text" name="nome" class="form-control" id="name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Seu E-mail</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name">Assunto</label>
                            <input type="text" class="form-control" name="assunto" id="subject" required>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Telefone</label>
                                <input type="text" class="form-control" name="telefone" id="subject" required>
                            </div>

                            <div class="form-group col-md-6">
                            <label for="name">Empresa</label>
                            <input type="text" class="form-control" name="empresa" id="subject" required>
                        </div>


                        </div>

                      
                        <div class="form-group">
                            <label for="name">Mensagem</label>
                            <textarea class="form-control" name="msg" rows="5" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Carregando</div>
                            <div class="error-message">Erro ao enviar. Tente Novamente</div>
                            <div class="sent-message">Sua Mensagem foi enviada. Obrigado!</div>
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