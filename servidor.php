<?php
// Backend con base de datos mysql server mostrarClientes()
// require "conexionmysql.php";
// mysqli_set_charset($con, 'utf8');
// $datos=mysqli_query($con, "select * from ajaxconbd2");
// while($fila=mysqli_fetch_array($datos, MYSQLI_BOTH)){
//     echo "<div class='miclass'>" . $fila["Nombre"] . "</div>" 
//     . "<input type='hidden' value='" . $fila["Correo"] . "'>";
// }
// Causa error debido a que se ejecutan las 2 consultas. Backend con base de datos mysql server busCharClientes()
// $nombre=$_POST['Nombre'];
// $query="call sp_buscarTextNombreajaxconbd2('$nombre')";
// $datBusPal=mysqli_query($con, $query);
// while($filaBusPal=mysqli_fetch_array($datBusPal, MYSQLI_BOTH)){
//     echo "<div class='miclass'>" . $filaBusPal["Nombre"] . "</div>"
//     . "<input type='hidden' value='" . $filaBusPal["Correo"] . "'>";
// }
// mysqli_close($con);

// Backend con base de datos mysql server mostrarClientes()
require "conexionsqlserver.php";
$datos=sqlsrv_query($con, "select * from AjaxconBD2");
while($fila=sqlsrv_fetch_array($datos, SQLSRV_FETCH_BOTH)){
    echo "<div class='miclass'>" . $fila["Nombre"] . "</div>" 
    . "<input type='hidden' value='" . $fila["Correo"] . "'>";
}
sqlsrv_close($con);
?>
