<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Reabilita Alagoas - Blog </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/reabilitacao.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
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
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="#"><span>⚕️Reabilita</span> Alagoas</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="index.php">Home</a></li>

          <li class="dropdown"><a href="#"><span>Sobre</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="sobre.php">Sobre o Projeto</a></li>
              <li><a href="equipe.php">Quem somos </a></li>
            </ul>
          </li>

          <li><a href="servicos.php">Serviços</a></li>
          <li><a href="blog.php">Blog</a></li>
          <li><a href="contato.php" class="active">Contato</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Contato</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Contato</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->

    <section id="contact" class="contact">
      <div class="container">
        <h4 class="centralizar"> 📩 Fale Conosco </h4>
        <div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-10">
            <form id="formulario" action="/" method="POST" type="submit">
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="name">Nome</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label for="email">E-mail</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="subject">Assunto</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group mt-3">
                <label for="message">Mensagem</label>
                <textarea class="form-control" name="message" rows="5" id="message" required></textarea>
              </div>
              <div class="form-group mt-3">
                <label for="file">Anexo</label>
                <input type="file" class="form-control" name="file" id="file">
              </div>
              <div class="my-3">
                <div class="loading" style="display: none;">Loading</div>
                <div class="error-message" style="display: none;"></div>
                <div class="sent-message" style="display: none;">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button id="btnget" class="button-envio">Enviar</button></div>

            </form>
          </div>
        </div>
      </div>
    </section>


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Reabilita Alagoas</h3>
            <p>
              Av. Manoel Severino Barbosa - Bom Sucesso <br>
              Arapiraca, 57309-005<br>
              Alagoas <br><br>
              <strong>Telefone:</strong> +55 82 98182-9223 <br>
              <strong>E-mail:</strong> reabilital@gmail.com <br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4> </h4>
            <ul>

            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Outros Serviços </h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.gov.br/saude/pt-br/assuntos/saude-de-a-a-z/s/saude-da-pessoa-com-deficiencia/cer" target="_blank">Centros de Reabilitação - Brasil </a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.acaoavc.org.br" target="_blank"> AÇÃO AVC</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.gov.br/saude/pt-br/assuntos/novo-pac-saude/centros-especializados-em-reabilitacao" target="_blank">Conhecer os serviços</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Inscreva-se para se manter informado</h4>
            <p>Ao adicionar seu e-mail, você ficar por dentro das principais novidades </p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Inscreva-se">
            </form>
          </div>

        </div>
      </div>

    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Reabilita <strong><span>Alagoas</span></strong>. Todos os direitos reservados
        </div>
        <div class="credits">

        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>