<?php

 //Conexión a la base de datos
 $serverName = "localhost"; 
 $connectionInfo = array( "Database"=>"CRM");

 //Utilización de la conexión a la base de datos - Cliente
 $conn = sqlsrv_connect( $serverName, $connectionInfo);

if ($conn=== false) {
die("Error en la conexion a la base");
}


?>
