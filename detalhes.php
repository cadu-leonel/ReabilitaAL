<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Reabilita Alagoas - Associação Pestalozzi de Arapiraca </title>
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

  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="#"><span>⚕️Reabilita</span> Alagoas</a></h1>

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
  <?php
          // Configurações de conexão com o banco de dados
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "reabilita_al";
          // Conexão com o banco de dados
          $conn = new mysqli($servername, $username, $password, $dbname);

          // Verifica se houve erro na conexão
          if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
          }
          if (isset($_GET['id']) && is_numeric($_GET['id'])) {
            $id = intval($_GET['id']);
        
          // Consulta para obter os dados dos centros de reabilitação
          $sql = "SELECT 
                  cr.id AS centro_id,
                  cr.nome AS centro_nome, 
                  t.nome AS tipo_nome, 
                  o.nome AS organizacao_nome, 
                  md.nome AS modelo_nome, 
                  m.nome AS municipio_nome, 
                  cr.endereco AS centro_endereco, 
                  cr.contato AS centro_contato, 
                  cr.email AS centro_email, 
                  cr.redes_sociais AS centro_redes_sociais, 
                  cr.horario AS centro_horario, 
                  cr.historia AS centro_historia,
                  i.caminho AS imagem_caminho,
                  cr.mapa AS centro_mapa
                FROM 
                centros_reabilitacao cr
                INNER JOIN 
                tipos t ON cr.tipo_id = t.id
                INNER JOIN 
                organizacoes o ON cr.organizacao_id = o.id
                INNER JOIN 
                modelos md ON cr.modelo_id = md.id
                INNER JOIN 
                municipios m ON cr.municipio_id = m.id
                LEFT JOIN 
                imagens i ON cr.id = i.centro_id
                WHERE cr.id = $id";
          
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
              $centro = $result->fetch_assoc();
          } else {
              echo "Centro de reabilitação não encontrado.";
              exit;
          }
      } else {
          echo "ID inválido";
          exit;
      }
      $conn->close();
      ?>
          
          ?>
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><?php echo htmlspecialchars($centro['centro_nome']) ?></h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li><a href="portfolio.php">Centros de Reabilitação</a></li>
            <li><?php echo htmlspecialchars($centro['centro_nome']) ?> </li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="<?php echo htmlspecialchars($centro['imagem_caminho']) ?>" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/pestalozzi-2.jpg" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Informações</h3>
              <ul>
                <li><strong>Tipo de CER:</strong> <?php echo htmlspecialchars($centro['tipo_nome']) ?>
                </li>
                <li><strong>Organização:</strong> <?php echo htmlspecialchars($centro['organizacao_nome']) ?></li>
                <li><strong>Modelo:</strong> <?php echo htmlspecialchars($centro['modelo_nome']) ?> </li>
                <li><strong>Endereço:</strong> <?php echo htmlspecialchars($centro['centro_endereco']) ?></li>
                <li><strong>Contato:</strong> <?php echo htmlspecialchars($centro['centro_contato']) ?> </li>
                <li><strong>Horário de funcionamento:</strong> <?php echo htmlspecialchars($centro['centro_contato']) ?> </li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h4 class="centralizar">Um pouco da história</h4>
              <p style="text-align: justify">
              <?php echo htmlspecialchars($centro['centro_historia']) ?>
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->
    <div class="map-section">
      <iframe style="border:0; width: 100%; height: 500px;" src="<?php echo htmlspecialchars($centro['centro_mapa'])?>" frameborder="0" allowfullscreen></iframe>
    </div>
  </main><!-- End #main -->

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