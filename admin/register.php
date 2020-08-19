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

$mysqli = new mysqli('remotemysql.com','yEOttoeeI4', 'Xnlm0BCzme', 'yEOttoeeI4');
  $query = $mysqli -> query ("SELECT id_tipo,tipo FROM tipo_usuario");

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
                  <h3 class="text-center font-weight-light my-4">Crear Cuenta</h3>
                </div>
                <div class="card-body">
                  <form action="registrar_usuario.php" method="POST">
                    <div class="form-group">
                      Tipo Usuario:
                      <select name="tipo" id="tipo" class="form-control">
                        <?php
                                                    while ($valores = mysqli_fetch_array($query)) {
                                                      echo '<option value="'.$valores['id_tipo'].'">'.$valores['tipo'].'</option>';
                                                }
                                                 ?>
                      </select>
                    </div>

                    <div class="form-group">
                      <label class="small mb-1" for="inputEmailAddress">Email</label>
                      <input class="form-control py-4" name="email" id="email" type="email" aria-describedby="emailHelp"
                        placeholder="Ingrese un email" />
                    </div>
                    <div class="form-row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="small mb-1" for="inputPassword">Contraseña</label>
                          <input class="form-control py-4" name="pass1" id="inputPassword" type="password"
                            placeholder="Ingrese una contraseña" />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="small mb-1" for="inputConfirmPassword">Confirmar Contraseña</label>
                          <input class="form-control py-4" name="pass2" id="inputConfirmPassword" type="password"
                            placeholder="Confirme la contraseña" />
                        </div>
                      </div>
                    </div>
                    <div class="form-group mt-4 mb-0">
                      <input class="btn btn-primary btn-block" type="submit" name="submit" id="enviar" value="ENVIAR">
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center">
                  <div class="small"> <a href="admin.php">
                      <i class="fas fa-arrow-left mr-1"></i> Regresar a la Página Web Principal
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