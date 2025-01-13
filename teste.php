<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <title>Document</title>
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

</head>

<body>


    <form id="formulario" action="/" method="POST" type="submit">
        <select id="eassociado" name="eassociado">
            <option disabled selected value> -- Selecione uma opção -- </option>
            <option>ABRAPP</option>
            <option>ABAAI</option>
            <option>IBGC</option>
            <option>ABRACAM</option>
            <option>ABBC</option>
            <option>Associados Ancord</option>
            <option>Não Associados</option>
        </select>

        <select name="ingresso" id="chkveg">

            <option value="https://pag.ae/7ULKPL7TH">Associados Ancord + C.Dados = R$700,00</option>
            <option value="https://pag.ae/7ULKQ8Zm2">Associados Ancord Normal = R$800,00</option>
            <option value="https://pag.ae/7UTdp8_CG">Associados Entidades Apoiadoras + C.Dados = R$875,00</option>
            <option value="https://pag.ae/7UTdpwWem">Associados Entidades Apoiadoras Normal = R$1.000,00</option>
            <option value="https://pag.ae/7UTdpPZjn">Não Associados + C.Dados = R$1.100,00</option>
            <option value="https://pag.ae/7UTdq2JsG">Não Associados Normal = R$1.250,00</option>
        </select>

        <button id="btnget">Enviar</button>
    </form>
</body>

<script>
    $(document).ready(function() {

        $(document).on('click', '#btnget', function(e) {
            e.preventDefault();

            let formValido = document.getElementById("formulario").checkValidity();

            if (formValido) {
                $(location).attr('href', $('#chkveg').val())
            }

        });

    });
</script>
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
            $dbname = "reabilital";

            // Conexão com o banco de dados
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Verifica se houve erro na conexão
            if ($conn->connect_error) {
                die("Conexão falhou: " . $conn->connect_error);
            }

            // Consulta para obter os dados dos centros de reabilitação
            $sql = "SELECT centros_reabilitacao.nome AS centro_nome, tipos.nome AS tipo_nome 
        FROM centros_reabilitacao
        INNER JOIN tipos ON centros_reabilitacao.tipo_id = tipos.id where centros_reabilitacao.municipio_id = 1";
            $result = $conn->query($sql);

            // Verifica se há resultados
            if ($result->num_rows > 0) {
                // Loop pelos resultados e exibição do HTML
                while ($row = $result->fetch_assoc()) {
            ?>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-arapiraca">
                        <img src="assets/img/portfolio/apae arapiraca.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4 class="centralizar"><?php echo htmlspecialchars($row['centro_nome']); ?></h4>
                            <p class="centralizar"><?php echo htmlspecialchars($row['tipo_nome']) ?></p>
                            <a href="#" class="details-link" title="Mais informações"><i class="bx bx-info-circle"></i></a>
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
        </div>
    </div>
</section>

</html>

<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>