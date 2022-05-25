<?php include('db_connect.php');?>
<?php include('get_data.php');?>
<!doctype html>
<html lang="es">
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" />

 <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- CSS personalizado --> 
    <link rel="stylesheet" href="main.css">  
      
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css"/>
  
           
   
      
<head>
<meta charset="utf-8">
<title>ENCUESTA DE BIOSEGURIDAD</title>


</head>
 
<body>
<h3 class="mt-5">CONSULTA DE INGRESOS </h3>
<hr>
<div style="height:50px"></div>
     
    <!-- tabla con DataTables-->
    <div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        



<table id="mydatatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
<thead class="thead-dark">
<tr align="center">
			<th>FECHA_INGRESO</th>
			<th>HORA_INGRESO</th>
            <th>CEDULA</th>
            <th>APELLIDO1</th>
            <th>APELLIDO2</th>
			<th>NOMBRE1</th>
			<th>NOMBRE2</th>
			<th>SEXO</th>
			<th>NACIMIENTO</th>
			<th>SANGRE</th>
			<th>RIESGOS</th>
			<th>SINTOMAS</th>
			<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PESO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th>PREDISPOSICION</th>
			<th>FUMA</th>
			<th>TRANSPORTE</th>
			<th>AREA</th>
            </tr>
        </thead>
 <tbody><?php

if($query -> rowCount() > 0)   { 
foreach($results as $result) { 
echo "<tr>
<td>".$result -> fecha_ingreso."</td>
<td>".$result -> hora_ingreso."</td>
<td>".$result -> cedula."</td>
<td>".$result -> apellido1."</td>
<td>".$result -> apellido2."</td>
<td>".$result -> nombre1."</td>
<td>".$result -> nombre2."</td>
<td>".$result -> sexo."</td>
<td>".$result -> nacimiento."</td>
<td>".$result -> sangre."</td>
<td>".$result -> riesgos."</td>
<td>".$result -> sintomas."</td>
<td>".$result -> peso."</td>
<td>".$result -> predisposicion."</td>
<td>".$result -> fuma."</td>
<td>".$result -> transporte."</td>
<td>".$result -> area."</td>
</tr>";

   }
 }
?>
 
        </tbody>
    </table>    
</div>
  <!-- Fin Contenido --> 
    </div>
  </div>
  <!-- Fin row --> 
  
</div>
<!-- Fin container -->

<!-- jQuery -->
    <script src="jquery/jquery-3.3.1.min.js"></script>
          
<!-- datatables JS -->
    <script type="text/javascript" src="datatables/datatables.min.js"></script>    
  
<!-- código propìo-->    
    <script type="text/javascript" src="main.js"></script>  

</body>


  
</html>



