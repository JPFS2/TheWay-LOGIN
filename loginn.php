<?php
session_start();
?>
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

            <h1 class="logo me-auto"><a href="https://www.thewaysistemas.com.br/"> <img src="assets/img/logoT.png"
                        alt="Logo"></a></h1>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="getstarted scrollto" href="index.php">Home</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header> <!-- End Header -->

    <!-- ======= Login ======= -->
    <section id="cta" class="cta">
        <div class="d-flex justify-content-center py-3">
            <div class="section-title align-items py-4">
                

                <form action="model/login.php" method="POST">
                    <h2 class="text-light">Login</h2>
                    <div class="field col-md-14 row py-1">
                        <div class="control">
                            <input name="usuario" name="text" type="text" id="inputEmail" class="form-control" placeholder="Usuário" required=""
                                autofocus="">
                        </div>
                    </div>

                    <div class="field row py-1">
                        <div class="control">
                            <input name="senha" class="form-control" type="password" placeholder="Senha"
                                required="">
                        </div>
                    </div>
                    <button type="submit" class="cta-btn align-middle is-block is-link is-large is-fullwidth">Entrar</button>
                </form>
                <?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                <div class="notification is-danger">
                    <p>Usuário ou senha inválidos.</p>
                </div>
                <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>
            </div>
        </div>
    </section>

    </main>

    <footer id="footer">

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>The Way Sistemas</span></strong>. Todos os direitos reservados
      </div>
      <div class="credits">
      </div>
    </div>
  </footer>

  <div id="preloader"></div>
  

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://platform.illow.io/banner.js?siteId=abd07287-2ab4-4316-ac54-6b2574cff624"></script>
</body>

</html>