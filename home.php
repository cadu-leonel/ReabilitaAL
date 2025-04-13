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

  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="#"><span>⚕️Reabilita</span> Alagoas</a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="index.php" class="active">Home</a></li>

          <li class="dropdown"><a href="#"><span>Sobre</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="sobre.php">Sobre o Projeto</a></li>
              <li><a href="equipe.php">Quem somos </a></li>
            </ul>
          </li>

          <li><a href="servicos.php">Serviços</a></li>
          <li><a href="blog.php">Blog</a></li>
          <li><a href="contato.php">Contato</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
        
      </nav>
      <div class="header-social-links d-flex">
        
      </div>

    </div>
  </header>

  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.png);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Sobre a <span>Reabilitação </span></h2>
              <p class="justificar">A reabilitação é um processo multifacetado que visa restaurar ou melhorar
                a saúde, funcionalidade e qualidade de vida de indivíduos que enfrentam desafios de saúde física, mental ou emocional. Esse
                processo abrange uma variedade de áreas, desde a recuperação após lesões ou cirurgias até o suporte para
                pessoas com condições crônicas, deficiências ou distúrbios mentais.</p>
              <div class=" text-center"><a href="" class="btn-get-started">Leia Mais</a>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.png);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Reabilitação</h2>
              <p class="justificar">Um dos principais objetivos da reabilitação é capacitar os indivíduos a
                alcançar o máximo de independência possível, considerando suas condições de saúde. Isso pode envolver a restauração da
                mobilidade, a melhoria da força muscular, a promoção da saúde mental e emocional, além do
                desenvolvimento de habilidades adaptativas.</p>
              <div class="text-center"><a href="" class="btn-get-started">Leia Mais</a></div>
            </div>
          </div>
        </div>

        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpeg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Reabilitação Física</h2>
              <p class="justificar">Na reabilitação física, profissionais de saúde, como fisioterapeutas e terapeutas
                ocupacionais, desempenham um papel fundamental. Eles projetam programas de exercícios personalizados, utilizam
                técnicas de terapia manual e proporcionam treinamento para auxiliar na recuperação de funções motoras
                comprometidas. Pacientes que passaram por cirurgias ortopédicas, acidentes vasculares cerebrais, lesões
                esportivas ou outras condições podem se beneficiar significativamente desse tipo de reabilitação.</p>
              <div class="text-center"><a href="" class="btn-get-started">Leia Mais</a></div>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
  </section>

  <main id="main">

    <section id="about-us" class="about-us">
      <div class="container" data-aos="fade-up">

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right">
            <div id="map"></div>
            <script>
              navigator.geolocation.getCurrentPosition((position) => {
                let {
                  latitude,
                  longitude
                } = position.coords;

                var map = L.map('map').setView([latitude, longitude], 14);

                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                  maxZoom: 19,
                  minZoom: 1,
                  attribution: '©ReabilitaAL'
                }).addTo(map);

                L.marker([latitude, longitude]).addTo(map);

                var circle = L.circle([latitude, longitude], {
                  color: 'red',
                  fillColor: '#f03',
                  fillOpacity: 0.5,
                  radius: 1000
                }).addTo(map);

              });
            </script>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
            <p class="justificar">
              É importante destacar que a reabilitação é um processo contínuo e personalizado. Cada indivíduo enfrenta
              desafios únicos, e os planos de reabilitação devem ser adaptados para atender às necessidades
              específicas de cada pessoa. A abordagem holística, considerando aspectos físicos, emocionais e sociais, é
              fundamental para promover resultados bem-sucedidos na jornada de reabilitação.
            </p>
            <p> Nesse sentido, nosso sistema quer oferecer:
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Informações relativas à documentação </li>
              <li><i class="ri-check-double-line"></i> Georreferenciamento </li>
              <li><i class="ri-check-double-line"></i> Possibilidade de contato e feedback com os usuários </li>
            </ul>

          </div>
        </div>

      </div>
    </section>

    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Todos</li>
              <li data-filter=".filter-maceio">Maceió</li>
              <li data-filter=".filter-arapiraca">Arapiraca</li>
              <li data-filter=".filter-outros">Outros</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up">
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

          // Consulta para obter os dados dos centros de reabilitação
          $sql = "SELECT 
          centros_reabilitacao.nome AS centro_nome,
          centros_reabilitacao.id AS id,
          centros_reabilitacao.endereco AS centro_endereco, 
          tipos.nome AS tipo_nome, 
          imagens.caminho AS imagem_caminho
          FROM centros_reabilitacao
            INNER JOIN 
            tipos ON centros_reabilitacao.tipo_id = tipos.id
            LEFT JOIN 
            imagens ON centros_reabilitacao.id = imagens.centro_id
          WHERE centros_reabilitacao.municipio_id = 1;";
          $result = $conn->query($sql);

          // Verifica se há resultados
          if ($result->num_rows > 0) {
            // Loop pelos resultados e exibição do HTML
            while ($row = $result->fetch_assoc()) {
          ?>
              <div class="col-lg-4 col-md-6 portfolio-item filter-maceio">
                <img src="<?php echo htmlspecialchars($row['imagem_caminho']) ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4 class="centralizar"><?php echo htmlspecialchars($row['centro_nome']) ?></h4>
                  <p class="centralizar"><?php echo htmlspecialchars($row['tipo_nome']) ?></p>
                  <p class="centralizar"><i class="bx bx-map-pin"></i> <?php echo htmlspecialchars($row['centro_endereco']) ?></p>
                  <a href="detalhes.php?id=<?php echo $row['id']; ?>" class="details-link" title="Mais informações"><i class="bx bx-info-circle"></i></a>
                </div>
              </div>
          <?php
            }
          } else {
            echo "Nenhum centro de reabilitação encontrado.";
          }

          // Fecha a conexão com o banco de dados
          $conn->close();
          ?>
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

          // Consulta para obter os dados dos centros de reabilitação
          $sql = "SELECT 
          centros_reabilitacao.nome AS centro_nome,
          centros_reabilitacao.id AS id,
          centros_reabilitacao.endereco AS centro_endereco,
          tipos.nome AS tipo_nome, 
          imagens.caminho AS imagem_caminho
          FROM centros_reabilitacao
            INNER JOIN 
            tipos ON centros_reabilitacao.tipo_id = tipos.id
            LEFT JOIN 
            imagens ON centros_reabilitacao.id = imagens.centro_id
          WHERE centros_reabilitacao.municipio_id = 2;";
          $result = $conn->query($sql);

          // Verifica se há resultados
          if ($result->num_rows > 0) {
            // Loop pelos resultados e exibição do HTML
            while ($row = $result->fetch_assoc()) {
          ?>
              <div class="col-lg-4 col-md-6 portfolio-item filter-arapiraca">
                <img src="<?php echo htmlspecialchars($row['imagem_caminho']) ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4 class="centralizar"><?php echo htmlspecialchars($row['centro_nome']); ?></h4>
                  <p class="centralizar"><?php echo htmlspecialchars($row['tipo_nome']) ?></p>
                  <p class="centralizar"><i class="bx bx-map-pin"></i> <?php echo htmlspecialchars($row['centro_endereco']) ?></p>
                  <a href="detalhes.php?id=<?php echo $row['id']; ?>" class="details-link" title="Mais informações"><i class="bx bx-info-circle"></i></a>
                </div>
              </div>
          <?php
            }
          } else {
            echo "Nenhum centro de reabilitação encontrado.";
          }

          // Fecha a conexão com o banco de dados
          $conn->close();
          ?>

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

          // Consulta para obter os dados dos centros de reabilitação
          $sql = "SELECT 
          centros_reabilitacao.nome AS centro_nome,
          centros_reabilitacao.id AS id,
          centros_reabilitacao.endereco AS centro_endereco,
          tipos.nome AS tipo_nome, 
          imagens.caminho AS imagem_caminho
          FROM centros_reabilitacao
            INNER JOIN 
            tipos ON centros_reabilitacao.tipo_id = tipos.id
            LEFT JOIN 
            imagens ON centros_reabilitacao.id = imagens.centro_id
          WHERE centros_reabilitacao.municipio_id >= 3;";
          $result = $conn->query($sql);

          // Verifica se há resultados
          if ($result->num_rows > 0) {
            // Loop pelos resultados e exibição do HTML
            while ($row = $result->fetch_assoc()) {
          ?>
              <div class="col-lg-4 col-md-6 portfolio-item filter-outros">
                <img src="<?php echo htmlspecialchars($row['imagem_caminho']) ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4 class="centralizar"><?php echo htmlspecialchars($row['centro_nome']); ?></h4>
                  <p class="centralizar"><?php echo htmlspecialchars($row['tipo_nome']) ?></p>
                  <p class="centralizar"><i class="bx bx-map-pin"></i> <?php echo htmlspecialchars($row['centro_endereco']) ?></p>
                  <a href="detalhes.php?id=<?php echo $row['id']; ?>" class="details-link" title="Mais informações"><i class="bx bx-info-circle"></i></a>
                </div>
              </div>
          <?php
            }
          } else {
            echo "Nenhum centro de reabilitação encontrado.";
          }
          $conn->close(); // Fecha a conexão com o banco de dados
          ?>
        </div>

      </div>
    </section>

    <section id="clients" class="clients">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Apoiadores </h2>
        </div>
        <div class="row marcador align-items-center">
          <div class="col mx-auto text-center">
            <img class="img-responsive img-fluid" src="assets/img/clients/ufal.png">
            <img class="img-responsive img-fluid" src="assets/img/clients/cnpq-conselho-nacional-de-desenvolvimento-cientifico-e-tecnologico.png">
            <img class="img-responsive img-fluid" src="assets/img/clients/sesau.jpg">
          </div>
        </div>
    </section>

  </main>

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
              <strong>E-mail:</strong> reabilita_al@gmail.com <br>
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