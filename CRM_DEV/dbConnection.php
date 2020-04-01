<?php

/*  //Conexión a la base de datos
 $serverName = "servidonss.dyndns.org:20002"; 
 $connectionInfo = array( "Database"=>"CRM");

 //Utilización de la conexión a la base de datos - Cliente
 $conn = sqlsrv_connect( $serverName, $connectionInfo);
 */



$conn = new PDO("sqlsrv:Server=servidonss.dyndns.org,20002;Database=CRM", "usrCRM" , "T1lc4r42395");



if ($conn=== false) {
die("Error en la conexion a la base");
}


?>
