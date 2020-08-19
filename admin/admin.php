<?php

//creamos la sesion
session_start();
//validamos si se ha hecho o no el inicio de sesion correctamente
//si no se ha hecho la sesion nos regresará a login.php
if(!isset($_SESSION['administracion'])) 
{
    
    header('Location: ../index.php'); 
    
    exit();
}

?>
<?php	
    require 'conexion.php';
	$query = "SELECT * FROM actarecepcion";
    $resultado = $mysqli->query($query);
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>ADMINISTRADOR</title>
  <link href="dist/css/styles.css" rel="stylesheet" />
  <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
    crossorigin="anonymous" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous">
  </script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

</head>

<body class="sb-nav-fixed">
  <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="admin.php">Administrador</a>
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i
        class="fas fa-bars"></i></button>
    <!-- Navbar Search-->

    <div class="input-group">

    </div>

    <!-- Navbar-->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i>Administración</a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <h8>
            <center><?php echo $_SESSION['administracion']; ?></center>
          </h8>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
      </li>
    </ul>
  </nav>
  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
      <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
          <div class="nav">
            <a class="nav-link" href="admin.php">
              <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
              Principal
            </a>

            <a class="nav-link" href="register.php">
              <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
              Registrar
            </a>
            <div class="sb-sidenav-menu-heading">Otros</div>
            <a class="nav-link" href="estado_equipos.php">
              <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
              Estado-Equipo
            </a>
            <a class="nav-link" href="tablas.php">
              <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
              Donaciones
            </a>
            <a class="nav-link" href="cambio_claves.php">
              <div class="sb-nav-link-icon"><i class="fas fa-key"></i></div>
              Actualizar-Contraseñas
            </a>
          </div>
        </div>
        <div class="sb-sidenav-footer">
          <center>Universidad Politécnica Salesiana</center>
        </div>
      </nav>
    </div>
    <div id="layoutSidenav_content">
      <main>
        <div class="container-fluid">
          <h1 class="mt-4">Dar Para Mejorar</h1>
          <div class="card-header mt-4">
            Resumen-Donaciones
          </div>
          <div class="container mt-5">
            <div class="row">
              <div class="four col-md-4">
                <div class="counter-box colored"> <i class="fa fa-hand-holding-heart fa-3x"></i> <span
                    class="counter mt-3">2147</span>
                  <p>Donaciones</p>
                </div>
              </div>
              <div class="four col-md-4">
                <div class="counter-box colored"> <i class="fa fa-laptop fa-3x"></i> <span
                    class="counter mt-3">3275</span>
                  <p>Computadoras</p>
                </div>
              </div>
              <div class="four col-md-4">
                <div class="counter-box colored"> <i class="fa fa-mobile-alt fa-3x"></i> <span
                    class="counter mt-3">289</span>
                  <p>Dispositivos Móviles</p>
                </div>
              </div>
            </div>

            <script>
            $(document).ready(function() {

              $('.counter').each(function() {
                $(this).prop('Counter', 0).animate({
                  Counter: $(this).text()
                }, {
                  duration: 4000,
                  easing: 'swing',
                  step: function(now) {
                    $(this).text(Math.ceil(now));
                  }
                });
              });

            });
            </script>
          </div>

        </div>
      </main>
      <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid">
          <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; Universidad Politécnica Salesiana 2020</div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous">
  </script>
  <script src="dist/js/scripts.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
  <script src="dist/assets/demo/datatables-demo.js"></script>
</body>

</html>