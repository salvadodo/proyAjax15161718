<?php
// require "conexionmysql.php";
// $datos=mysqli_query($con, "select * from ajaxconbd2");
// while($fila=mysqli_fetch_array($datos, MYSQLI_BOTH)){
//     echo "<div class='miclass'>" . $fila["Nombre"] . "</div>" 
//     . "<input type='hidden' value='" . $fila["Correo"] . "'>";
// }
// mysqli_close($con);

require "conexionsqlserver.php";
$datos=sqlsrv_query($con, "select * from AjaxconBD2");
while($fila=sqlsrv_fetch_array($datos, SQLSRV_FETCH_BOTH)){
    echo "<div class='miclass'>" . $fila["Nombre"] . "</div>" 
    . "<input type='hidden' value='" . $fila["Correo"] . "'>";
}
sqlsrv_close($con);
?>