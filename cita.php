<?php
header('Content-Type: text/html; charset=UTF-8');
//creamos la sesion
session_start();
//validamos si se ha hecho o no el inicio de sesion correctamente
//si no se ha hecho la sesion nos regresará a login.php
if(!isset($_SESSION['operador'])) 
{
    
    header('Location: index.php'); 
    
    exit();
}

?>


<?php
header('Content-Type: text/html; charset=UTF-8');
    include 'includes/funciones/db_dispositivo.php';
    $query=mysqli_query($mysqli,"SELECT id_tipodispositivo, tipo_dispositivo FROM tipo_dispositivo");
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Acta-Recepción</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <style>
  .form-control-feedback {
    position: absolute;
    padding: 6.5px;
    pointer-events: none;
  }

  .form-control-feedback2 {
    position: absolute;
    padding: 6.5px;
    pointer-events: none;
  }

  .form-control-feedback3 {
    position: absolute;
    padding: 15px;
    pointer-events: none;
  }

  .alinear {
    padding-left: 45px !important;
  }

  .alinear2 {
    padding-left: 44px !important;
  }
  </style>
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
  <!--load all styles -->
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/entidad.css" rel="stylesheet">
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


      <a href="operador.php" class="logo mr-auto"><img src="assets/img/img_logo.png" alt="" class="img-fluid"></a>

      <a id="sesion" class="get-started-btn scrollto">Iniciar Sesión</a>

    </div>
  </header><!-- End Header -->
  <main id="main">
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container mt-3">

        <div class="section-title">
          <span>Acta-Recepción</span>
          <h2>Acta-Recepción</h2>
          <p>Ingresa los datos de la empresa</p>
        </div>

        <div class="row">
          <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch ">
            <form action="procesar_cita.php" method="post" role="form" class="php-email-form"
              enctype="multipart/form-data">
              <div class="form-row">
                <div class="form-group has-feedback col-md-6">
                  <div style="text-align:center">
                    <label for="nombre">Nombre del Cliente</label>
                  </div>
                  <i class="fas fa-user fa-2x form-control-feedback2"></i>
                  <input type="text" name="nombre" class="form-control alinear" id="nombre" data-rule="minlen:4"
                    placeholder="Tu Nombre" onkeydown="return alphaOnly(event);" required />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <div style="text-align:center">
                    <label for="cedula">Cédula </label>
                  </div>
                  <i class="far fa-id-card fa-2x form-control-feedback2"></i>
                  <input type="tel" class="form-control alinear2" name="cedula" id="cedula"
                    placeholder="Número de Cédula" pattern="[0-9]{10}" data-rule="minlen:9"
                    onkeydown="return numberOnly(event);" required />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <div style="text-align:center">
                    <label for="direccion">Dirección</label>
                  </div>
                  <i class="fas fa-map-marker-alt fa-2x form-control-feedback2"></i>
                  <input type="direccion" class="form-control alinear" name="direccion" id="direccion"
                    data-rule="minlen:4" placeholder="Tu dirección" data-msg="Please enter a valid email" required />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <div style="text-align:center">
                    <label for="phone">Teléfono de Contacto </label>
                  </div>
                  <i class="fas fa-mobile-alt fa-2x form-control-feedback2"></i>
                  <input type="tel" class="form-control alinear" name="phone" id="phone" placeholder="0-999-999-999"
                    pattern="[0-9]{10}" data-rule="minlen:9" onkeydown="return numberOnly(event);" required />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-3 ">
                  <div style="text-align:center">
                    <label for="correo">Correo Electrónico</label>
                  </div>
                  <i class="far fa-envelope fa-2x form-control-feedback2"></i>
                  <input type="email" class="form-control alinear" name="correo" id="correo"
                    placeholder="Tu correo electrónico" data-msg="Please enter a valid email" required />
                  <div class="validate"></div>
                </div>

                <div class="form-group has-feedback col-md-3">
                  <div style="text-align:center">
                    <label for="correo-face">Correo Adicional</label>
                  </div>
                  <i class="fab fa-facebook-square fa-2x form-control-feedback"></i>
                  <input type="email" class="form-control alinear" name="correo-face" id="correo-face"
                    placeholder="Tu correo de Facebook" data-msg="Please enter a valid email" required>
                  <div class="validate"></div>
                </div>

                <!--
                <div class="form-group col-md-3 text-center">
                  <label for="entidad">Tipo de Dispositivo</label><br>
                  <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-success my-1 ">
                      <input type="radio" class="form-control" name="option1" value="cpu" id="cpu" autocomplete="off"
                        checked>
                      Computador
                    </label>
                    <label class="btn btn-success my-1 ">
                      <input type="radio" class="form-control" name="option1" value="tablet" id="tablet"
                        autocomplete="off">
                      Tablet
                    </label> &nbsp
                  </div>
                </div>
-->

                <div class="form-group col-md-6">
                  <div style="text-align:center">
                    <label for="codigo" id="codigo">Dispositivos</label></div>

                  <div class="input-group-prepend ">
                    <select name="estado" class="custom-select browser-default" id="inputGroupSelect02"
                      data-msg="Please enter a valid email" style="height:2.7rem" required>
                      <?php 
                        while($datos = mysqli_fetch_array($query))
                        {
                    ?>
                      <option value="<?php echo $datos['id_tipodispositivo']?>">
                        <?php echo utf8_encode(utf8_decode($datos['tipo_dispositivo']))?>
                      </option>
                      <?php
                        }
                    ?>
                    </select>
                    <div class="input-group-append">
                      <label class="input-group-text" for="inputGroupSelect02">Opciones</label>
                    </div>
                  </div>
                  <div class="validate"></div>

                </div>

                <input type="hidden" id="cod_cpu" name="cod_cpu" value="">
                <input type="hidden" id="cod_tablet" name="cod_movil" value="">
                <input type="hidden" id="cod_tablet" name="cod_movil" value="">

                <!--
                <div class="form-group col-md-3 ">
                  <div style="text-align:center">
                    <label for="codigo" id="codigo">Código de
                      Verificación</label></div>

                  <i class="fas fa-key fa-1x form-control-feedback3"></i>
                  <div style="text-align:center">
                    <input type="text" class="form-control text-center" name="cpu-cod" id="cpu-cod" value="AA00"
                      data-rule="minlen:9" required />
                  </div>
                </div>
-->

                <div class="form-group col-md-6 text-center">
                  <div style="text-align:center">
                    <label for="entidad">Entidad</label></div>
                  <div class="btn-group btn-group-toggle text-center" data-toggle="buttons">
                    <label class="btn btn-success my-1 ">
                      <input type="radio" class="form-control" name="option2" id="empresa" value="empresa"
                        autocomplete="off" checked>
                      Empresa
                    </label>
                    <label class="btn btn-success my-1 ">
                      <input type="radio" class="form-control" name="option2" id="particular" value="particular"
                        autocomplete="off">
                      Particular
                    </label> &nbsp
                    <input type="text" class="form-control " name="emp-nombre" id="emp-nombre" placeholder="Nombre"
                      data-rule="minlen:9" />
                    <!-- 
                    <input type="text" class="form-control " name="part-nombre" id="part-nombre"
                      placeholder="Nombre Responsable" data-rule="minlen:9" />-->
                  </div>
                </div>

                <!--
                <div class="form-group col-md-6">
                  <label for="name">Foto</label>
                  <div class="form-group">
                    <input type="file" name="fileToUpload" id="fileToUpload">
                  </div>
                </div>-->

                <div class="form-group col-md-6">
                  <label for="foto">Foto de la máquina</label><br>
                  <div class="custom-file " style="height:2.7rem">
                    <input type="file" class="custom-file-input" name="archivo" id="archivo" required>
                    <label class="custom-file-label" for="customFile">Selecciona la Foto</label>

                  </div>

                </div>

                <div class="text-center col-md-12"><button type="submit" id="recibido">Enviar</button></div>

            </form>


          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

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

  <div id="preloader" class="mt-5"></div>
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

  <script>
  function alphaOnly(event) {
    var key = event.keyCode;
    return ((key >= 65 && key <= 90) || key == 8 || key == 9 || key == 32);
  };

  function numberOnly(event) {
    var key = event.keyCode;
    return ((key >= 48 && key <= 57) || (key >= 96 && key <= 105) || key == 8 || key == 9 || key == 32);
  };

  $("#empresa").focus(function(e) {
    e.preventDefault();
    $("#emp-nombre").show();
    $("#part-nombre").hide();
  });
  $("#particular").focus(function(e) {
    e.preventDefault();
    $("#part-nombre").show();
    $("#emp-nombre").hide();
  });
  </script>

  <script>
  // Add the following code if you want the name of the file appear on select
  $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
  });
  </script>


</body>

</html>