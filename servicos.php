<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Reabilita Alagoas - Home </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="assets/img/reabilitacao.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin="" />

  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">

  <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>

  <style>
    #map {
      height: 100%;
    }
  </style>



</head>

<body>


  <body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="index.php"><span>⚕️Reabilita</span> Alagoas</a></h1>

        <nav id="navbar" class="navbar order-last order-lg-0">
          <ul>
            <li><a href="index.php">Home</a></li>

            <li class="dropdown"><a href="#"><span>Sobre</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="sobre.php">Sobre o Projeto</a></li>
                <li><a href="equipe.php">Quem somos </a></li>
              </ul>
            </li>

            <li><a href="servicos.php" class="active">Serviços</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="contato.php">Contato</a></li>

          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
      </div>
    </header>

    <main id="main">

      <section id="contact" class="contact">
        <div class="container">

          <div class="row mt-5 justify-content-center" data-aos="fade-up">
            <div class="col-lg-10">
              <h4 class="centralizar"> 🗺️Formulário de Geolocalização </h4>
              <form action="resultados.php" method="GET">
              <div class=" row">
                <div class="col-md-10 form-group">
                  <label for="name">Nome</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="col-md-2 form-group mt-3 mt-md-0">
                  <label for="idade">Idade</label>
                  <input type="number" class="form-control" name="idade" id="idade" required>
                </div>
            </div>
            <div class="form-group">
              <label for="cep">CEP</label>
              <input type="text" class="form-control" id="cep" placeholder="Digite o CEP" required>
            </div>

            <!-- Campo Endereço - Rua -->
            <div class="form-group">
              <label for="rua">Rua</label>
              <input type="text" class="form-control" id="rua" placeholder="Digite o nome da rua" required readonly>
            </div>

            <!-- Campo Endereço - Bairro -->
            <div class="form-group">
              <label for="bairro">Bairro</label>
              <input type="text" class="form-control" id="bairro" placeholder="Digite o bairro" required readonly>
            </div>

            <!-- Campo Endereço - Cidade -->
            <div class="form-group">
              <label for="cidade">Cidade</label>
              <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Digite a cidade" required readonly>
            </div>

            <!-- Campo Endereço - Estado -->
            <div class="form-group">
              <label for="estado">Estado</label>
              <input type="text" class="form-control" id="estado" placeholder="Digite o estado" style="margin-bottom: 10px;" required readonly>
            </div>
            <div class="form-group col-md-4"><select class="form-control" name="deficiencia" id="deficiencia" required>
                <option value="">Tipo de Deficência </option>
                <option value="Física">Física</option>
                <option value="Visual">Visual</option>
                <option value="Auditiva">Auditiva</option>
                <option value="Intelectual">Intelectual</option>
                <option value="Outra">Outra</option>
              </select></div>
            <div class="my-3">

              <div class="text-center"><button id="btnget" class="button-envio">Enviar</button></div>
              </form>
            </div>

          </div>

        </div>
      </section><!-- End Contact Section -->
      <script src="assets/js/validar-cep.js"></script>

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