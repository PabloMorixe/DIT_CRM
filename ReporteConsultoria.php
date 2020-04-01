<!DOCTYPE html>
<header>
<!--Versión de boostrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    </header>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <!-- Titulo de la pestaña -->
    <title>Reporte de consultoria</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>

<form action="insert.php" method = "POST">

<body>
<!--
  <div class="jumbotron jumbotron-fluid">-->
    <div  style="background:cornflowerblue!important" class="jumbotron jumbotron-fluid">
    <div class="container">

    <!-- Titulo de la Titulo principal --> 
      <h1 class="display-4">Reporte de consultoria Donss IT</h1>

      <!-- SLOGAN (subtitulo) -->
      <p class="lead">Transformando ideas en proyectos.</p>
    </div>
  </div>



</div>
<p>
<!-- Seleccionador de Fecha y Hora de INICIO -->
<h10 class="mt-0">Seleccionar Fecha y hora de Inicio : </h10><input id= "IDFechaInicio" type="datetime-local" name="fechayhora">
</p>
<p>
<!-- Seleccionador de Fecha y Hora de FIN -->
<h10 class="mt-0">Seleccionar Fecha y hora de Fin : </h10><input id= "IDFechaFin" type="datetime-local" name="fechayhora">
</p>




<select class="custom-select custom-select-sm mb-3"  name= "Cliente"  id="idClientePHP">
<option value="0" >Seleccione Cliente </option><?php
        
        require_once('dbConnection.php');

        //query para consultar datos en el sql
        $t1ql = "SELECT idCliente, RazonSocial FROM cliente order by idcliente";  
        
        //conexión a la base de datos
        $stmt = sqlsrv_query( $conn, $t1ql);  
        if( $stmt == false)  
        {  
            echo "Error in query preparation/execution.\n";  
            die( print_r( sqlsrv_errors(), true));  
        }  
                

        //Se genera un seleccionador según la opcion que se requiera
        while($dato1=sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC))  
        {
          echo "<option>$dato1[RazonSocial]</option>";
        }    


        //cierre de la conexión a la base 
        sqlsrv_free_stmt( $stmt);  
        ?>
</select>

<select class="custom-select custom-select-sm mb-3" name="Sucursal">
  <option value="2">Seleccione Sucursal </option><?php
  
 if (isset($_POST['Cliente'])){
            
require_once('dbConnection.php');

$cliente_id = $_POST['Cliente'];


  $query ="SELECT Sucursal FROM clientesSucursales WHERE FK_idCliente = '$cliente_id'";

  
  $sztmt = sqlsrv_query( $conn, $query);  
  if( $sztmt == false)  
  {  
      echo "Eror en la conexión a la base.\n";  
      die( print_r( sqlsrv_errors(), true));  
  }  


while($dato2=sqlsrv_fetch_array($sztmt, SQLSRV_FETCH_ASSOC)) {
echo "<option value='3'>".$dato2['Sucursal']."</option>";
//echo "<option>$dato2[Sucursal]</option>";

} }
?>

</select>




<select class="custom-select custom-select-sm mb-3">
<option selected>Seleccione Consultor </option><?php
       

       require_once('dbConnection.php');
       //query para consultar datos en el sql
       $t3sql = "SELECT nombre + ' ' + apellido as nya FROM Empleado order by Nombre";

        //conexión a la base de datos 
        $sxtmt = sqlsrv_query($conn, $t3sql);  
              
         //Se genera un seleccionador según la opcion que se requiera
        while($dato3=sqlsrv_fetch_array($sxtmt, SQLSRV_FETCH_ASSOC))  
        {
          echo "<option>$dato3[nya]</option>";
        }        
       
        //cierre el statement
        sqlsrv_free_stmt( $sxtmt); 

        ?>
</select>






<h10 class="mt-0">Tareas realizadas</h10>


<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Unidad</th>
      <th scope="col">Servicio</th>
      <th scope="col">Descripcion</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th>

<select class="custom-select custom-select-sm mb-3">
<option value="0">Seleccione Unidad </option><?php
 
        require_once('dbConnection.php');
        //query para consultar datos en el sql

        $t4ql = "SELECT IdUnidadDeNegocio, UnidadDeNegocioNombre FROM UnidadDeNegocio order by UnidadDeNegocioNombre";  

        //conexión a la base de datos 
        $stmt = sqlsrv_query( $conn, $t4ql);  
        if( $stmt == false)  
        {  
            echo "Error in query preparation/execution.\n";  
            die( print_r( sqlsrv_errors(), true));  
        }  
          
        //Se genera un seleccionador según la opcion que se requiera
        while($dato4=sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC))  
        {
          echo "<option>$dato4[UnidadDeNegocioNombre]</option>";
        }    
        
        //cierre de la conexión a la base
        sqlsrv_free_stmt( $stmt);  
       
        ?>
</select>
</th>

<td>
<select class="custom-select custom-select-sm mb-3"  name="Servicio" >

<option value="7">Seleccione Servicio </option>
<?php  

  //Utilización de la conexión a la base de datos - Servicio

      require_once('dbConnection.php');
        //query para consultar datos en el sql
        $t5ql = "SELECT IdServicio, ServicioNombre FROM Servicio order by ServicioNombre";  

        //conexión a la base de datos      
        $stmt = sqlsrv_query( $conn, $t5ql);  
        if( $stmt == false)  
        {  
            echo "Error in query preparation/execution.\n";  
            die( print_r( sqlsrv_errors(), true));  
        }  
          
        //Se genera un seleccionador según la opcion que se requiera
        while($dato5=sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC))  
        {
          echo "<option>$dato5[ServicioNombre]</option>";

        }    


        //cierre de la conexión a la base
        sqlsrv_free_stmt( $stmt);  
        sqlsrv_close( $conn);  
        ?>

</select>
</td>
<td>


<input type="text" name="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></td>
   
</td>
  </tr>
  </tbody>
</table>

<input type= "submit" value="Enviar" name="botonEnviar">
</form>

</body>
</html>
