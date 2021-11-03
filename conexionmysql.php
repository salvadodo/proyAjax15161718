<?php
    $mysql_host='localhost';
    $mysql_user='root';
    $mysql_pass='';
    $mysql_db='pruebaajax';
    
    $con=mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $mysql_db);
    if(mysqli_connect_errno()){
        echo 'Error con la conexión: ' . mysqli_connect_error();
        exit();
    }
?>