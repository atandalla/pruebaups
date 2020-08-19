<?php

$clave=$_POST['clave'];
$id= $_POST['id'];

require 'conexion.php';
    $query = "UPDATE usuarios SET clave='". $clave ."' WHERE id_usuarios='". $id . "'";
    if ($mysqli->query($query) === TRUE) {
        echo'<script type="text/javascript">
        alert("ACTUALIZACIÓN EXITOSA");
        window.location.href="cambio_claves.php";
        </script>';
    }else{
        echo'<script type="text/javascript">
        alert("ERROR AL ACTUALIZAR, VUELVA A INTENTARLO");
        window.location.href="cambio_claves.php";
        </script>';

    }

    ?>