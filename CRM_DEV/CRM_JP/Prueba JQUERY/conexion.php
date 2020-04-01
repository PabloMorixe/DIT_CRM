
<?php

/*  //Conexión a la base de datos
 $serverName = "localhost"; 
 $connectionInfo = array( "Database"=>"CRM");

 //Utilización de la conexión a la base de datos - Cliente
 $conn = sqlsrv_connect( $serverName, $connectionInfo);
 */


/* if ($conn=== false) {
die("Error en la conexion a la base");
} */

$serverName = "servidonss.dyndns.org, 20002";
$connectionInfo = array( "Database"=>"CRM", "UID"=>"usrCRM", "PWD"=>"T1lc4r42395");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
  
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}



?>