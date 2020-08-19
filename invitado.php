<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Invitado</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

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
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="mdb/css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="mdb/css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="mdb/css/style.css">

  <!-- =======================================================
  * Template Name: eNno - v2.1.0
  * Template URL: https://bootstrapmade.com/enno-free-simple-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">


      <a href="invitado.php" class="logo mr-auto"><img src="assets/img/img_logo.png" alt="" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="invitado.php">Home</a></li>
          <li><a href="nosotros.php">Conócenos</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!--Modal --->

  <form action="invitado_procesar.php" method="POST">
    <!-- Central Modal Danger Demo-->
    <div class="modal fade right" id="ModalDanger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-notify modal-success modal-dialog-centered" role="document">
        <!--Content-->
        <div class="modal-content">
          <!--Header-->
          <div class="modal-header">
            <p class="heading">Código de Verificación del Dispositivo</p>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" class="white-text">&times;</span>
            </button>
          </div>

          <!--Body-->
          <div class="modal-body">

            <div class="row">
              <div class="col-3">
                <p></p>
                <p class="text-center"><i class="fas fa-lock fa-4x"></i></p>
              </div>

              <div class="col-9">
                <p>Si deseas conocer el estado de tu dispositivo donado ingresa en el campo de texto el código que se
                  envio a tu correo.</p>
                <h2><span class="badge text-center"><input type="text" class="form-control" name="cod_ver"
                      required></span></h2>
              </div>
            </div>
          </div>

          <!--Footer-->
          <div class="modal-footer justify-content-center">
            <input type="submit" class="btn btn-success" value="Verificar"><i class="fas fa-check ml-1 white-text"></i>
            <a type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">Cerrar <i
                class="fas fa-times ml-1 success-text"></i></a>
          </div>
        </div>
        <!--/.Content-->
      </div>
    </div>

  </form>
  <!--END Modal-->


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center text-center">
          <h1>Dar para Mejorar</h1>
          <h2>Proyecto para donar equipos electrónicos a niños de esmeraldas</h2>
          <div class="text-center">
            <a href="https://upsalesiana.ec/regdispmov" class="btn-get-started scrollto"><i class="fab fa-google"></i>
              Agenda tu Cita</a>
            <a id="sesion2" href="#ModalDanger" data-toggle="modal" class="btn-get-started scrollto mt-3"><i
                class="fab fa-google"></i> Visualizar Dispositivos</a>

          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="assets/img/img_main.png" class="img-fluid animated" alt="">
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

  <div id="preloader"></div>
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


  <!-- jQuery -->
  <script type="text/javascript" src="mdb/js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="mdb/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="mdb/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="mdb/js/mdb.min.js"></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


</body>

</html>