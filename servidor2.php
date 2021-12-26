<?php
// Backend con base de datos mysql server buscarTextNombreajaxconbd2()
// require "conexionmysql.php";
// mysqli_set_charset($con, 'utf8');
// $json=file_get_contents("php://input");
// $obj=json_decode($json);
// $nombre=$obj->Nombre;
// // $nombre=$_POST['Nombre'];
// $query="call sp_buscarTextNombreajaxconbd2('$nombre')";
// $datBusPal=mysqli_query($con, $query);
// while($filaBusPal=mysqli_fetch_array($datBusPal, MYSQLI_BOTH)){
//     echo "<div class='miclass'>" . $filaBusPal["Nombre"] . "</div>"
//     . "<input type='hidden' value='" . $filaBusPal["Correo"] . "'>";
// }
// mysqli_close($con);

// Backend con base de datos sql server buscarTextNombreajaxconbd2()
require 'conexionsqlserver.php';
// $json=file_get_contents("php://input");
// $obj=json_decode($json);
// $nombre=$obj->Nombre;
$nombre=$_POST["Nombre"];
$query="{CALL sp_buscarTextNombreAjaxconBD2 (?)}";
$datBusPal=sqlsrv_query($con, $query, array(array($nombre, SQLSRV_PARAM_IN)));
// $datBusPal=sqlsrv_query($con, $query, $nombre);
while($filaBusPal=sqlsrv_fetch_array($datBusPal, SQLSRV_FETCH_BOTH)){
    echo "<div class='miclass'>" . $filaBusPal["Nombre"] . "</div>"
    . "<input type='hidden' value='" . $filaBusPal["Correo"] . "'>";
}
sqlsrv_close($con);
?>