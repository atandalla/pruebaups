<?php

$usuario=$_POST['user'];
$clave=$_POST['clave'];
      try{
                        
        require 'conexion.php';
        $sql="SELECT * FROM usuarios WHERE email='".$usuario."' AND id_tipo=1";
        $resultados=$mysqli->query($sql);
                        

     }catch(\Exception $e){
         echo $e->getMessage();
    }
        $usuarios_base=array();
        while ($usuarios=$resultados->fetch_assoc()) {
         $usuarios_base[]=$usuarios;
     }
                                  
    ?>
<?php
    if (count($usuarios_base)==0) {
        echo'<script type="text/javascript">
        alert("CREDENCIALES INCORRECTAS-ACCESO NO AUTORIZADO");
        window.location.href="../index.php";
        </script>';
    }
    foreach ($usuarios_base as $admin){
        
        
        if ($usuario==$admin['email'] && $clave==$admin['clave']  ) {
            session_start();
            $_SESSION["administracion"]= $usuario;
            header("Location: admin.php"); 

        }else{
            echo'<script type="text/javascript">
        alert("El email o password es incorrecto, vuelva a intentarlo");
        window.location.href="../login.php";
        </script>';
        }


    }
        
    ?>