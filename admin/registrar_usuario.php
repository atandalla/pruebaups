<?php

$email= $_POST['email'];
$tipo=$_POST['tipo'];
$clave=$_POST['pass1'];

$conn = new mysqli('localhost','yEOttoeeI4', 'Xnlm0BCzme', 'yEOttoeeI4'); //direccion ip, passw, bd
 if($conn->connect_error){
     echo $error->$conn->connect_error;
 }

 try{
    $stmt=$conn->prepare('INSERT INTO usuarios (id_tipo,email,clave) VALUES (?,?,?)');
    $stmt->bind_param('sss',$tipo,$email,$clave);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    echo '<script type="text/javascript">
    alert("REGISTRO EXITOSO");
    window.location.href="admin.php";
    </script>';    

}catch(\Exception $e){
    echo '<script type="text/javascript">
    alert("ERROR AL REGISTRAR,VUELVA A INTENTARLO");
    window.location.href="register.php";
    </script>';
}

?>