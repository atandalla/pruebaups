<?php
$correo=$_GET['correo'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Enviado Correo</title>


  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome/css/all.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style>
  @media (max-width: 991px) {

    .label1 {
      font-size: 1.5rem;
      margin-top: -3rem
    }
  }
  </style>

</head>

<body>


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">


      <a href="operador.php" class="logo mr-auto"><img src="assets/img/img_logo.png" alt="" class="img-fluid"></a>

      <a id="sesion" href="#modalLoginForm" class="get-started-btn scrollto">Iniciar Sesión</a>

    </div>
  </header><!-- End Header -->


  <!-- ======= Hero Section ======= -->

  <section id="hero" class="align-items-center text-center">
    <div class="container text-center">
      <div class=" row">
        <div class="col-lg-12 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center text-center">
          <h3 class="label1">
            <p class="text-dark mt-5">REGISTRO EXITOSO
            </p>
            <p class="text-dark">Se enviará un código de verificación al correo
            </p>
            <p class="text-success">

              <?php echo $correo?>

            </p>
            <p class="text-dark"> para que conozca el estado de su dispositivo.
            </p>

            <div class="col-md-12 mt-5">

              <a href="cita.php" class="btn btn-primary btn-rounded" role="button" aria-pressed="true">Registrar otro
                Equipo</a>
              <a href="operador.php" class="btn btn-primary btn-rounded" role="button" aria-pressed="true">Volver al
                Menú</a>
            </div>

          </h3>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->


  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container text-center">
      <div class="copyright col-12">

        <i class="icofont-instagram"></i><i class="icofont-facebook"></i><strong><span>@upsalesianaec</span></strong> <i
          class="icofont-twitter"></i><strong><span>@upsalesiana</span></strong> <i
          class="icofont-institution"></i><strong><span>www.ups.edu.ec</span></strong>
      </div>
      <div class="credits col-12">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/ -->
        Universidad Politécnica Salesiana
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- Otros -->
  <script>
  $(function() {
    'use strict';

    $('#sesion').attr("href", "logout.php");
    $('#sesion').text("Cerrar Sesión");
    $('#sesion').attr("data-toggle", "");

  });
  </script>
  <script type="text/javascript">
  $(window).load(function() {
    $(".preloader").fadeIn("slow");
  });
  </script>

</body>

</html>