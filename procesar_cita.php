<?php  
 require_once('includes/funciones/db_connection.php');
?>

<?php
function random_string($length) {
    $key = '';
    $keys = array_merge(range(0, 9), range('a', 'z'));

    for ($i = 0; $i < $length; $i++) {
        $key .= $keys[array_Rand($keys)];
    }

    return $key;
}

?>

<?php
 
$radioVal = $_POST["estado"];

if($radioVal == "1")
{
$cod=random_string(15);
$tipo=1;

}
else if ($radioVal == "2")
{
$cod=random_string(15);
$tipo=2;
}


$radioVal2 = $_POST["option2"];

if($radioVal2 == "empresa")
{
$entidad=$_POST['emp-nombre'];
}
else if ($radioVal2 == "particular")
{

$entidad="particular";

}


?>

<?php
//Si se quiere subir una imagen

   //Recogemos el archivo enviado por el formulario
   $archivo = $_FILES['archivo']['name'];
   //Si el archivo contiene algo y es diferente de vacio
   if (isset($archivo) && $archivo != "") {
      //Obtenemos algunos datos necesarios sobre el archivo
      $format = $_FILES['archivo']['type'];
      $tamano = $_FILES['archivo']['size'];
      $temp = $_FILES['archivo']['tmp_name'];
      //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
     if (!((strpos($format, "gif") || strpos($format, "jpeg") || strpos($format, "jpg") || strpos($format, "png")) && ($tamano < 5000000))) {
        echo '<div><b>Error. La extensión o el tamaño de los archivos no es correcta.<br/>
        - Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.</b></div>';
     }
     else {
        //Si la imagen es correcta en tamaño y tipo
        //Se intenta subir al servidor
        if (move_uploaded_file($temp, 'images/'.$archivo)) {
            //Cambiamos los permisos del archivo a 777 para poder modificarlo posteriormente
            sudo chmod('images/'.$archivo, 0755);
        }
        else {
           //Si no se ha podido subir la imagen, mostramos un mensaje de error
           echo '<div><b>Ocurrió algún error al subir el fichero. No pudo guardarse.</b></div>';
        }
      }
   }

?>

<?php
////////
 $fecha = date('Y-m-d');
 $nombre=$_POST['nombre'];
 $cedula=$_POST['cedula'];
 $direccion=$_POST['direccion'];
 $celular=$_POST['phone'];
 $correo=$_POST['correo'];
 $correo_face=$_POST['correo-face'];
 $imagen=$_FILES['archivo']['name'];
 $estado="recibido";
 
 /*
 var_dump($tipo);
 var_dump($nombre);
 var_dump($cedula);
 var_dump($direccion);
 var_dump($celular);
 var_dump($correo);
 var_dump($correo_face);
 var_dump($imagen);
 var_dump($cod);
 var_dump($entidad);
 var_dump($fecha);
 var_dump($estado);
*/
?>


<?php
    //Previene ataques 
    try{

    $stmt = $conn->prepare('INSERT INTO actarecepcion (id_tipodispositivo, nombre, cedula, email, facebook, direccion, celular, entidad, imagen, codigo_dispositivo, fecha, estado) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)');
    $stmt-> bind_param('ssssssssssss', $tipo, $nombre, $cedula, $correo, $correo_face, $direccion, $celular, $entidad, $imagen, $cod, $fecha, $estado);//manejar los datos, formato de los datos cada s es el formato de los datos
    $stmt->execute();
    $stmt->close();
    $conn->close();
    
    
    header("Location:enviado.php?correo=".$correo."");

    

}catch(\Exception $e){
    echo $e->getMessage();
}

  ?>