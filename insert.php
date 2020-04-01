<?php
require_once('dbConnection.php');

        if (isset($_POST['botonEnviar'])){
            
       $texto = $_POST['text'];
       $texts = $_POST['Cliente'];
       $texta = $_POST['Servicio'];






        $t2ql =  "INSERT INTO basura ([columna1],[columna2],[columna3]) VALUES ('$texto','$texts','$texta')"; 

        //conexión a la base de datos
        $stmt = sqlsrv_query( $conn, $t2ql );  
        if( $stmt == false)  
        {  
            echo "Error al conectar a la base.\n";  
            die( print_r( sqlsrv_errors(), true));  
        } 
        
        sqlsrv_free_stmt($stmt);  
        sqlsrv_close( $conn);
    }

       
        echo "Se envio el formulario";

?>
