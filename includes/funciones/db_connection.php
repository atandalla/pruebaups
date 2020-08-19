<?php
    $conn = new mysqli('remotemysql.com','yEOttoeeI4', 'Xnlm0BCzme', 'yEOttoeeI4'); //direccion ip, passw, bd
    if($conn->connect_error){
        echo $error->$conn->connect_error;
    }


    
?>