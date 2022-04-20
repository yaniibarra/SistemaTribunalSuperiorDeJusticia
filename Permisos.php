<!DOCTYPE html>
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
<body >
    <div id="wrapper" >
         <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				
				
				<img src="Durango.png" width="100" height="70">
				
				
                <a class="navbar-brand waves-effect waves-dark" href="index.html"><i class="large material-icons"></i> <strong>TSJED</strong></a>
				
		<div id="sideNav" href=""><i class="material-icons dp48"></i></div>
            </div>

            <ul class="nav navbar-top-links navbar-right"> 
				<li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown4"><i class="fa fa-envelope fa-fw"></i> <i class="material-icons right"></i></a></li>				
				<li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown3"><i class="fa fa-tasks fa-fw"></i> <i class="material-icons right"></i></a></li>
				<li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown2"><i class="fa fa-bell fa-fw"></i> <i class="material-icons right"></i></a></li>
				  <li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown1"><i class="fa fa-user fa-fw"></i> <b>Usuarios</b> <i class="material-icons right"></i></a></li>
            </ul>
        </nav>
		
		
		
		<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
<li><a href="Usuarios.php"><i class="fa fa-user fa-fw"></i> Agregar Usuarios</a>
</li>
<li><a href="editarUsuario.php"><i class="fa fa-gear fa-fw"></i> Editar perfil</a>
</li> 
<li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Salir</a>
</li>
</ul>

<!-- ESTO ES PARA ALARMAR DEL ICON "CAMPANITA" -->
<ul id="dropdown2" class="dropdown-content w250">
  <li>
                           
                       
                       
					   
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> MENSAJE
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        
                        <li class="divider"></li>
                        
						
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Ver todas las alertas</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
</ul>

<!---TERMINO---->











<!--ESTO ES DE MENSAJE ICON "MENSAJE"-->  
<ul id="dropdown4" class="dropdown-content dropdown-tasks w250">
  <li>
                            <a href="#">
                                <div>
                                    <strong>Nombre</strong>
                                    <span class="pull-right text-muted">
                                        <em>Hoy</em>
                                    </span>
                                </div>
                               
							   <div>Mensaje</div>
							   
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Ayer</em>
                                    </span>
                                </div>
                                
								<div>Mensaje</div>
                            
							</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Ayer</em>
                                    </span>
                                </div>
                            
							<div>Mensaje</div>
                            
							</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Leer todos los mensajes</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
</ul>  
	   
	   
	   <!----TERMINO------->
	   
	   







	   <!--/. NAV TOP  -->
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu"      class="nav nav-second-level">



<!--registro-->
           <li>                       
                        <a href="index2.php" class="waves-effect waves-dark"> <i class="fa fa-qrcode"></i>Registro de empleados<span class="fa arrow"></span></a>
<ul class="nav nav-second-level">

                             <li>
                                <a href="index2.php" class="waves-effect waves-dark">Registro</a>
                            </li>
                            
                       <li>
                                <a href="ModificaIndex2.php" class="waves-effect waves-dark"> Modificar Datos</a>
                        </li>
                            
                     <li>
                    <a href="consultaIndex.php" class="waves-effect waves-dark">Empleados</a>
                    </li>
                    
                    <li>
                    <a href="bajasIndex.php" class="waves-effect waves-dark">Cambiar Status</a>
                    </li>
                   </ul> 
                   <!--termina-->





<!--FORM SUPERIORES-->   
             <li>    
                				    
                       <a href="superiores.php" class="waves-effect waves-dark"><i class="fa fa-qrcode"></i>Superiores <span class="fa arrow"></span></a>
						 
					<ul class="nav nav-second-level">
					
					
					
                               <li>
                                <a href="superiores.php" class="waves-effect waves-dark">Registro</a>
                            </li>
                            
                             <li>
                                <a href="MODsuperiores.php" class="waves-effect waves-dark"> Modificar Datos</a>
                            </li>
                            
                            <li>
                                <a href="consultaSuperior.php" class="waves-effect waves-dark">Superiores</a>
                            </li>
							
                            <li>
							
							<a href="bajaSuperior.php" class="waves-effect waves-dark">Cambiar Status</a>
							</li>
							
							</li>
                            </ul>
            <!--TERMINA SUPERIORES-->     
				   


                              



					<!--Menu y submenu de permisos -->
				   
				   <li>
				   
				    
                       <a href="Permisos.php" class="active-menu waves-effect waves-dark"><i class="fa fa-qrcode"></i>Permisos <span class="fa arrow"></span></a>
						 
					<ul class="nav nav-second-level">
					
					
					   <li>
                                <a href="Permisos.php" class="waves-effect waves-dark">Registro</a>
                            </li>
                            
							
							
                             <li>
                                <a href="MODpermiso.php" class="waves-effect waves-dark">Modificar Datos</a>
                            </li>
                            
                            <li>
                                <a href="consultaPermiso.php" class="waves-effect waves-dark">Permisos</a>
                            </li>
							
							
							
                            <li>
							
							<a href="bajapermiso.php" class="waves-effect waves-dark"> Cambiar Status</a>
							</li>
							
							</li>
                        
						</ul>
						
                        
						
						
						 <!--FORM OFICIOS-->   
             <li>    
                				    
                       <a href="oficios.php" class="waves-effect waves-dark"><i class="fa fa-qrcode"></i>Oficios <span class="fa arrow"></span></a>
						 
					<ul class="nav nav-second-level">
					
					
					
                               <li>
                                <a href="oficios.php" class="waves-effect waves-dark">Registro</a>
                            </li>
                            
                             <li>
                                <a href="MODoficios.php" class="waves-effect waves-dark"> Modificar Datos</a>
                            </li>
                            
                            <li>
                                <a href="consultaOficio.php" class="waves-effect waves-dark">Oficios</a>
                            </li>
							
                            <li>
							
							<a href="bajaOficio.php" class="waves-effect waves-dark">Cambiar Status</a>
							</li>
							
							</li>
                            </ul>
            <!--TERMINA OFICIOS-->
					
					
						
						
                                        
                                  <!--FORM ACTAS-->   
             <li>    
                				    
                       <a href="actas.php" class="waves-effect waves-dark"><i class="fa fa-qrcode"></i>Actas <span class="fa arrow"></span></a>
						 
					<ul class="nav nav-second-level">
					
					
					
                               <li>
                                <a href="actas.php" class="waves-effect waves-dark">Registro</a>
                            </li>
                            
                             <li>
                                <a href="MODaltas.php"class="waves-effect waves-dark"> Modificar Datos</a>
                            </li>
                            
                            <li>
                                <a href="consultaActas.php" class="waves-effect waves-dark">Actas</a>
                            </li>
							
                            <li>
							
							<a href="bajActas.php" class="waves-effect waves-dark">Cambiar Status</a>
							</li>
							
							</li>
                            </ul>
            <!--TERMINA ACTAS--> 
                        
                        
                        
                                            
                                  
              

						
						</ul>

            </div>

        </nav>
  



	  <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
			  <div class="header"> 
                        <h1 class="page-header">
                           Agregar Permisos
                        </h1>
						
									
		</div>
		




  <!-- FORMULARIO-->
					  
					  
					  
					<div class="container">  
             <form id="contact" action="Permisos.php" method="POST" data-submit="return verificarad">
             
              

    <h3>Permisos</h3>
  
   


	<form action="Permisos.php">
    
    
    <h5>Seleccione el tipo de licencia</h5>
	
	
	
	   <!--TIPOS DE PERMISOS-->
   



<!---select licencia necesaria-->   

	
	 <select name="select" size="0">
	
	
	
	<h5>Tipos de Liecnias<h5>

	
	
	<option value="Economica">Economica</option>
	<option value="Voluntaria">Voluntaria</option>
	
	
	<option value="Medica">Medica</option>
	<option value="Materna">Materna</option>
	<option value="Fallecimiento">Fallecimiento</option>
	
	
	
	
	
   </select>	
   
  
  
  <form action="#"  >
    
				
												
 
     
<!---   
<div>

<ul>

   
   <li>
      <input type="checkbox" id="m-option"  name="lista"  value="Economica"/>
      <label for="m-option"><h6>Licencia Economica</h6></label>
    </li>
    
    
    <li>
      <input type="checkbox" id="u-option"  name="lista"  value="Voluntaria" />
      <label for="u-option"><h6>Licencia Voluntaria</h6> </label>
    </li>
	
	
	</ul>
	</div>
	
   </fieldset>
	
	
 ------->
 
<!--Termina tipo de permisos-->
   
   
   
   
	
   <h5># Folio</h5>
	
	 <?php
	 
	 
	 
					  include("conexion/conexion.php");

					  
					  
//AÑO ACTUAL
  //asignarle el numero y el año					 
	$insertar1="SELECT anio FROM Tipo_permiso order by id_per DESC";
			
           $conexion=odbc_exec($conn,$insertar1);
			    $nro=odbc_num_rows($conexion);		

		
			$numC=0;
			
			
			$filaform1=odbc_fetch_array($conexion);
			
			$anioA=$filaform1["anio"];
			
			$anio= date("Y");
			//saber si brinco de año
			if($anioA>$anio){
				$numC=1;
				echo $Folio= $numC."/".$anio;
				
				
			
			}
			else{
				$insertar2="SELECT id_per FROM Tipo_permiso order by id_per DESC";
				
				$conexion=odbc_exec($conn,$insertar2);
			     $nro=odbc_num_rows($conexion);	
				
				
				$filaform=odbc_fetch_array($conexion);
				$consecutivo=$filaform["id_per"]+1;
				echo  $Folio=$consecutivo."/".$anio;
			
			
				
			}

					  
					  
					 
				 $consulta="SELECT nombre, id_empleado FROM Empleados order by id_empleado DESC";
					  
					 // $consulta="SELECT nombre1 FROM Superiores UNION SELECT nombre FROM Empleados ";
					  
						// $id=$_POST['nomemp'];
						 $consulta2="SELECT id_per FROM Tipo_permiso order by id_per DESC";

                         
						  
						  
							   $ejecutar= odbc_exec($conn,$consulta);                              
                              
							  
							    $filaform=odbc_fetch_array($ejecutar);
									$nombre=$filaform["nombre"];
									
									$ide=$filaform["id_empleado"];
									
									//para consultal al ultimo jefe
									 $ejecutar1= odbc_exec($conn,$consulta2);                              
                              
							   
							
								 
					  ?>
	
	
	
	
	 <fieldset>
      <input   type="hidden" name="numero"  value="<?php echo $Folio?>" tabindex="1" required autofocus>
    </fieldset>
	
	
	
	
		<form method='POST'>

		</br><h6>Nombre del Empleado </h6>
	
	<?php
	 
	 include("conexion/conexion.php");
	
	$consulta="SELECT * FROM Empleados where status like 'Activo'";
	 
	 //$consulta="SELECT nombre  FROM Empleados";
	 
	 
	$ejecutar= odbc_exec($conn,$consulta); 
	 
	
	
	
	?>
	

	
	 <select name="Empl" size="0">
	
	
	
	<?php  while($arreglo=odbc_fetch_array($ejecutar)){  ?>

	
	<option value="<?php echo $arreglo['id_empleado'] ?>"><?php echo $arreglo['nombre']?></option>
	
	
	<?php } ?>
	
	
   </select>	
   
  
  <form>
    
    
    
    
     <!--TERMINA STATUS DEL EMPLEDO--> 
	
	
	<!---Tipos de licencia--->
	
	
	
	



 
 
    <fieldset>
     <h5>Fecha inicial</h5>
    <table>
  <tr>
     <td> </td>
     <td>
         <input type="date" name="fe1" >
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
         <input type="date" name="fe2" >
     </td>
  </tr>
</table>

    </fieldset>
 
 
 
 
 
     <fieldset>
  
   <button name="insertar" type="submit" id="contact-submit" data-submit="...Sending">Guardar</button>
    </fieldset>
	
	
	<!---TERMINA EL FORMULARIO---->
    
    
    <?php
include("conexion/conexion.php");


					  		
							  
	if(isset($_POST['insertar'])){
	
	
	

      $año=$_POST['numero'];


$selec=$_POST['select'];
	
$fech1=$_POST['fe1'];
$fech2=$_POST['fe2'];



$nom=$_POST['Empl'];





	//si el nombre ya esta insertado ya no lo inserta en la db
								$consulta3="SELECT id_per FROM Tipo_permiso where Tipo='" .$selec."'";
								$ejecutar2= odbc_exec($conn,$consulta3);
								$filaform3=odbc_fetch_array($ejecutar2);
								$idE=$filaform3["id_per"];
								//regresa vacio el id en caso de exister el nombre del empleado
								if ($idE==null){
 								
								$consulta="INSERT INTO Tipo_permiso (Tipo,status) VALUES ('$selec','Activo')";
								$ejecutar= odbc_exec($conn,$consulta);
								$nro = odbc_num_rows($ejecutar);
								
								                                                         
							    }
								
								else{
									echo "<script>alert('Lo sentimos el permiso del empleado ya existe')</script>";
									
									
									
								}
								
								//si ya se relaciono el permiso con el empleado ya no dejara relacionar mas
								$consulta4="SELECT id_empleado_permiso FROM empleados_permiso where id_empleado='" .$idE."' and id_permiso='".$ide."'";
								$ejecutar3= odbc_exec($conn,$consulta4);
								$filaform5=odbc_fetch_array($ejecutar3);
								$idJ3=$filaform5["id_empleado_permiso"];
								// si regresa null lo inserta en caso de que no sea null no relaciona al jefe
								if ($idJ3==null){
								
								
								$insertar="INSERT INTO empleados_permiso (id_empleado,id_permiso) VALUES ('$idE','$ide')";
								$ejecutar= odbc_exec($conn,$insertar);
								$nro = odbc_num_rows($ejecutar);
								
								 }
								 
			
	
		

$consulta="INSERT INTO Tipo_permiso(Tipo,fecha1,fecha2,status,anio,nomEmp) VALUES ('$selec','$fech1','$fech2','Activo','$año','$nom')";


$ejecutar= odbc_exec($conn,$consulta);
$nro = odbc_num_rows($ejecutar);


if($ejecutar){
	
	echo "<script>alert('Registro guardado')</script>";
	}
	
	
	}
	

//TERMINA
  

			
    ?>		
	
  
	<!--seleccion de tipos de permisos---->
	
	
    <p class="copyright"><a href="">PERMISOS</a></p>
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