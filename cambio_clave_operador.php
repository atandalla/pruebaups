<?php

$clave=$_POST['clave'];
$correo= $_POST['email'];

include 'includes/funciones/db_dispositivo.php';
    $query = "UPDATE usuarios SET clave='". $clave ."' WHERE email='". $correo . "'";
    if ($mysqli->query($query) === TRUE) {
        session_start();
        $_SESSION = array();

            // Si se desea destruir la sesión completamente, borre también la cookie de sesión.
            // Nota: ¡Esto destruirá la sesión, y no la información de la sesión!
    if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
            );
        }

// Finalmente, destruir la sesión.
        session_destroy();
        echo'<script type="text/javascript">
        alert("Cambio de clave exitoso, Vuelva a ingresar con su nueva contraseña");
        window.location.href="index.php";
        </script>';
    }else{
        echo'<script type="text/javascript">
        alert("ERROR AL ACTUALIZAR, VUELVA A INTENTARLO");
        window.location.href="clave_operador.php";
        </script>';

    }

 ?>