<?php  
 include 'includes/funciones/db_dispositivo.php';
?>

<?php
$cod_ver= $_POST['cod_ver'];

$query=mysqli_query($mysqli, "SELECT codigo_dispositivo FROM actarecepcion WHERE codigo_dispositivo='".$cod_ver."'");

$datos = mysqli_fetch_array($query);

    if (isset($datos)!=NULL) {
        header("Location:invitado_listar.php?cod=".$cod_ver."");
        
    }else{
        echo'<script type="text/javascript">
        alert("ERROR, VUELVE A INTENTARLO");
        window.location.href="invitado.php";
        </script>';
    }

    
?>