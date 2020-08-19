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

$id= $_GET['id'];

?>

<?php	
    require 'conexion.php';
    $query = "SELECT * FROM actarecepcion,tipo_dispositivo WHERE tipo_dispositivo.id_tipodispositivo=actarecepcion.id_tipodispositivo and id_acta='".$id."'";
    $resultado = $mysqli->query($query);
    $row = $resultado->fetch_assoc()
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Registrar-Administrador</title>
  <link href="dist/css/styles.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous">
  </script>
</head>

<body class="bg-primary">
  <div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
      <main>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-7">
              <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                  <h3 class="text-center font-weight-light my-4">Actualizar Estado-Equipo</h3>
                </div>
                <div class="card-body">
                  <form action="actualizacion_estado.php" method="POST">
                    <div class="form-row">
                      <div class="col-md-6">
                        <input type="hidden" name="id" value="<?php echo $id;?>">
                        <label class="small mb-1">Nombre</label>
                        <input class="form-control py-4" id="nombre" type="text" aria-describedby="emailHelp"
                          value="<?php echo utf8_encode(utf8_decode($row['nombre'])); ?>" disabled />
                      </div>

                      <div class="col-md-6">
                        <label class="small mb-1">Cédula</label>
                        <input class="form-control py-4" id="cedula" type="text" aria-describedby="emailHelp"
                          value="<?php echo $row['cedula']; ?>" disabled />
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col-md-6">
                        <label class="small mb-1">Tipo de Dispositivo</label>
                        <input class="form-control py-4" id="tipo" type="text" aria-describedby="emailHelp"
                          value="<?php echo $row['tipo_dispositivo']; ?>" disabled />
                      </div>

                      <div class="col-md-6">
                        <label class="small mb-1">Código del Dispositivo</label>
                        <input class="form-control py-4" id="cod" type="text" aria-describedby="emailHelp"
                          value="<?php echo $row['codigo_dispositivo']; ?>" disabled />
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="form-group">
                        <label class="small mb-1" for="inputPassword">Estado</label>
                        <input class="form-control py-4" name="estado" id="estado" type="text"
                          aria-describedby="emailHelp"
                          value="<?php echo utf8_encode(utf8_decode($row['estado'])); ?>" />
                      </div>
                    </div>
                    <div class="form-group mt-4 mb-0">
                      <input class="btn btn-primary btn-block" type="submit" name="submit" id="enviar"
                        value="ACTUALIZAR">
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center">
                  <div class="small"> <a href="estado_equipos.php">
                      <i class="fas fa-arrow-left mr-1"></i> Regresar
                    </a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
    <div id="layoutAuthentication_footer">
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
</body>

</html>