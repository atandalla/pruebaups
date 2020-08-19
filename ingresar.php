<?php

$usuario=$_POST['user'];
$clave=$_POST['clave'];
      try{
                        
        require_once('includes/funciones/db_connection.php');
        $sql="SELECT * FROM usuarios WHERE email='".$usuario."' AND id_tipo=1";
        $sql2="SELECT * FROM usuarios WHERE email='".$usuario."' AND id_tipo=2";
        $resultados=$conn->query($sql);
        $resultados2=$conn->query($sql2);

     }catch(\Exception $e){
         echo $e->getMessage();
    }
        $usuarios_base=array();
        $usuarios_base2=array();
        while ($usuarios=$resultados->fetch_assoc()) {
         $usuarios_base[]=$usuarios;
     }

     while ($usuarios2=$resultados2->fetch_assoc()) {
        $usuarios_base2[]=$usuarios2;
    }
                                  
    ?>
<?php
    if (count($usuarios_base)==0) {
        echo'<script type="text/javascript">
        alert("CREDENCIALES INCORRECTAS");
        window.location.href="index.php";
        </script>';

    }
    foreach ($usuarios_base as $admin){
        
        
        if ($usuario==$admin['email'] && $clave==$admin['clave']  ) {
            session_start();
            $_SESSION["administracion"]= $usuario;
            header("Location: admin/admin.php"); 

        }else{
            echo'<script type="text/javascript">
        alert("CREDENCIALES INCORRECTAS");
        window.location.href="index.php";
        </script>';

        }


    }
        
    ?>

<?php
    if (count($usuarios_base2)==0) {
        echo'<script type="text/javascript">
        alert("CREDENCIALES INCORRECTAS");
        window.location.href="index.php";
        </script>';

    }
    foreach ($usuarios_base2 as $operador){
        
        
        if ($usuario==$operador['email'] && $clave==$operador['clave']  ) {
            session_start();
            $_SESSION["operador"]= $usuario;
            header("Location: operador.php"); 

        }else{
            echo'<script type="text/javascript">
        alert("CREDENCIALES INCORRECTAS");
        window.location.href="index.php";
        </script>';

        }


    }
        
    ?>