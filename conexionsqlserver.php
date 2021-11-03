<?php
$serverName = "ALAN-PC"; //serverName\instanceName
$connectionInfo = array( "Database"=>"pruebaAjax");
// $connectionInfo = array( "Database"=>"dbName", "UID"=>"userName", "PWD"=>"password");
$con = sqlsrv_connect( $serverName, $connectionInfo);
if( $con ) {
     echo "Conexión establecida.<br />";
}else{
     echo "La Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>