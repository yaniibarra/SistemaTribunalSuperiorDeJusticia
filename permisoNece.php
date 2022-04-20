<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

  <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Permisos</title>
	
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
	
	
	<link rel="stylesheet" href="assets/materialize/css/materialize.min.css" media="screen,projection" />
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
	
	
	
	
	<link href="assets/css/formulario.css"  type="text/css"   rel="stylesheet" />
	
	
	
	
	
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="assets/js/Lightweight-Chart/cssCharts.css"> 
</head>

<body>

  <!-- FORMULARIO-->
					  
					  
					  
					<div class="container">  
  <form id="contact" action="" method="post">
    <p ><a href="Permisos.php"><img src="undo2.png" width="40" height="30"> </a></p>
    <h3>Permisos</h3>
   
   <!---
    <fieldset>
      <input  name="numero" placeholder="No.# permiso" type="text" tabindex="1" required autofocus>
    </fieldset>
    -------->
    
    <!--TIPOS DE PERMISOS-->
    <fieldset>
    
    
     <fieldset>
    <h5>Numero </h5>
    
	<fieldset>
      <input  name="numero" type="text" required autofocus >
	  
    </fieldset>
	
	
	 <?php
					  include("conexion/conexion.php");

					  
					 
					  $consulta="SELECT nombre, id_empleado FROM Empleados order by id_empleado DESC";
					  
					 // $consulta="SELECT nombre1 FROM Superiores UNION SELECT nombre FROM Empleados ";
					  
						// $id=$_POST['nomemp'];
						 $consulta2="SELECT id_Tpermiso FROM Tipo_permiso order by id_Tpermiso DESC";

                          
							   $ejecutar= odbc_exec($conn,$consulta);                              
                              
							    $filaform=odbc_fetch_array($ejecutar);
									$nombre=$filaform["nombre"];
									$idEm=$filaform["id_empleado"];
									//para consultal al ultimo jefe
									 $ejecutar1= odbc_exec($conn,$consulta2);                              
                              
							    $filaform1=odbc_fetch_array($ejecutar1);
							//$idJefe=$filaform1["id_jefe"]+1;
								 
					  ?>
    
    
	<fieldset>
	<h5>Empleado</h5>
      <input  name="nombre" type="text" value="<?php echo $nombre?>" required autofocus disabled>
    </fieldset>
	
	<div>

   <h5>Tipos de licencias</h5>


<ul>

   
   <li>
      <input type="checkbox" id="m-option"  name="lista"  value="Medica"/>
      <label for="m-option"><h6>Licencia Medica</h6></label>
    </li>
    
    
    <li>
      <input type="checkbox" id="u-option"  name="lista"  value="Materno" />
      <label for="u-option"><h6>Cuidado Materno</h6> </label>
    </li>
    
    
    <li>
      <input type="checkbox" id="l-option"  name="lista"  value="Fallecimiento" />
      <label for="l-option"><h6>Fallecimiento</h6> </label>
    </li>
    
    
	</ul>
	</div>
    
    
 
    </fieldset>
     
     
     
    <fieldset>
     <h5>Fecha de inicio</h5>
    <table>
  <tr>
     <td> </td>
     <td>
         <input type="date" name="fecha1" >
     </td>
  </tr>
</table>

    </fieldset>
 
 <fieldset>
 <h5>Fecha final</h5>
    <table>
  <tr>
     <td> </td>
     <td>
         <input type="date" name="fecha2" >
     </td>
  </tr>
</table>

 </fieldset>
 
 
 <fieldset>
 
 
 </fieldset>   
    
 

 <fieldset>
     <h5>Status</h5>
       <!-- Switch -->
 
 <div>
<ul>
  <li>
  
  
     <input type="radio" id="f-option" name="group" value="activo">
    <label for="f-option"><h5>Activo<h5></label>
    </li>
  
  <li>
    <input type="radio" id="s-option" name="group" value="inactivo">
    <label for="s-option"><h5>Inactivo<h5></label>
  </li>
 </ul>
</div>
 </fieldset>
     <!--TERMINA STATUS DEL EMPLEDO--> 
	
    <fieldset>
    
      <button name="guardar" type="submit" id="contact-submit" data-submit="...Sending">Guardar</button>
    </fieldset>
    
    
     <?php
	
	include("conexion/conexion.php");
	
	
	if(isset($_POST['guardar'])){
		
		
		
		
		$id=$_POST['numero'];
		$fech=$_POST['fecha1'];
		$fec=$_POST['fecha2'];
		
		//$num=$_POST['numero'];
		
		
		
	//si el nombre del superior ya esta insertado ya no lo inserta en la db
								$consulta3="SELECT id_jefe FROM Superiores where nombre1='" .$nom."'";
								$ejecutar2= odbc_exec($conn,$consulta3);
								$filaform3=odbc_fetch_array($ejecutar2);
								$idJ=$filaform3["id_jefe"];
								//regresa vacio el id en caso de exister el nombre del jefe
								if ($idJ==null){
 								
								$consulta="INSERT INTO Superiores (nombre1,status) VALUES ('$nom','Activo')";
								$ejecutar= odbc_exec($conn,$consulta);
								$nro = odbc_num_rows($ejecutar);
								
								                                                         
							    }
								
								else{
									echo "<script>alert('Lo sentimos el nombre del jefe ya existe')</script>";
									
									
									
								}
								
								//si ya se relaciono el empleado con el jefe ya no dejara relacionar mas
								$consulta4="SELECT id_Empleado_Superior FROM Empleado_Superior where id_jefe='" .$idJ."' and id_Empleado='".$idEm."'";
								$ejecutar3= odbc_exec($conn,$consulta4);
								$filaform5=odbc_fetch_array($ejecutar3);
								$idJ3=$filaform5["id_Empleado_Superior"];
								// si regresa null lo inserta en caso de que no sea null no relaciona al jefe
								if ($idJ3==null){
								
								
								$insertar="INSERT INTO Empleado_Superior (id_jefe,id_Empleado) VALUES ('$idJ','$idEm')";
								$ejecutar= odbc_exec($conn,$insertar);
								$nro = odbc_num_rows($ejecutar);
								
								 }
								 	
	
		
		
		
		
		
		
	//Empiezan los tipos de permisos	
		if($_POST["lista"]=="Medica"){
			
			$selec=$_POST['lista'];
			
			}
		
		if($_POST["lista"]=="Materno"){
			$selec=$_POST['lista'];
			}
					
			if($_POST["lista"]=="Fallecimiento"){
			$selec=$_POST['lista'];
			}
			
			$insertar1="SELECT anio FROM Tipo_permiso order by id_per DESC";
			
			
			$numC=0;
			$anioA=$_POST['numero'];
			$anio= date("Y");
			//saber si brinco de año
			if($anioA<$anio){
				$numC=1;
				echo $numC."/".$anio;
				
				$conexion=odbc_exec($conn,$insertar1);
			    $nro=odbc_num_rows($conexion);
			
			}
			else{
				$insertar2="SELECT id_per FROM Tipo_permiso order by id_per DESC";
				
				$conexion=odbc_exec($conn,$insertar2);
			     $nro=odbc_num_rows($conexion);	
				
				
				$filaform=odbc_fetch_array($conexion);
				$consecutivo=$filaform["id_per"]+1;
				echo $consecutivo."/".$anio;
			
			
				
			}
				
			
	$insertar="INSERT INTO Tipo_permiso (id_Tpermiso,Tipo,fecha1,fecha2,status) VALUES ('$id','$selec','$fech','$fec','$radio')";
			
			
			$conexion=odbc_exec($conn,$insertar);
			$nro=odbc_num_rows($conexion);
		
			if($conexion){
				
				echo "<script>alert('Datos guardados')</script>";
				
				}
				}
			
	
	?>
    
    
    
    
    
    <p class="copyright"><a href="Permisos.php"> REGRESAR A PERMISOS </a></p>
  </form>
</div>  
									
					
					
					
					</div>
			 <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
	
	<!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
	
	<script src="assets/materialize/js/materialize.min.js"></script>
	
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
	
	
	<script src="assets/js/easypiechart.js"></script>
	<script src="assets/js/easypiechart-data.js"></script>
	
	 <script src="assets/js/Lightweight-Chart/jquery.chart.js"></script>
	
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script> 
	<script>
	$(document).ready(function(){
	 $('ul.tabs').tabs();
		$('.collapsible').collapsible({
		  accordion: false, // A setting that changes the collapsible behavior to expandable instead of the default accordion style
		  onOpen: function(el) { alert('Open'); }, // Callback for Collapsible open
		  onClose: function(el) { alert('Closed'); } // Callback for Collapsible close
		}
	  );
	});
	</script>
 

</body>
</html>