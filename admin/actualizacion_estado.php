<?php

$id= $_POST['id'];
$estado=$_POST['estado'];

require 'conexion.php';
    $query = "UPDATE actarecepcion SET estado='". $estado ."' WHERE id_acta='". $id . "'";
    if ($mysqli->query($query) === TRUE) {
        echo'<script type="text/javascript">
        alert("ACTUALIZACIÓN EXITOSA");
        window.location.href="estado_equipos.php";
        </script>';
    }else{
        echo'<script type="text/javascript">
        alert("ERROR AL ACTUALIZAR, VUELVA A INTENTARLO");
        window.location.href="estado_equipos.php";
        </script>';

    }

?>