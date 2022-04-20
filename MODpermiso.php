<!DOCTYPE html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Control de permisos del personal</title>
	
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
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle waves-effect waves-dark" data-toggle="collapse" data-target=".sidebar-collapse">
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
				  <li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown1"><i class="fa fa-user fa-fw"></i> <b>Yanira</b> <i class="material-icons right"></i></a></li>
            </ul>
        </nav>
		<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
<li><a href="Usuarios.php"><i class="fa fa-user fa-fw"></i> Mi perfil</a>
</li>
<li><a href="editarUsuario.php"><i class="fa fa-gear fa-fw"></i>Editar Usuarios</a>  
</li> 
<li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Salir</a>
</li>
</ul>




	   <!--MENU  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
<!--REGISTRO DE EMPLEADOS-->

<li>                       
                        <a href="index2.php" class="active-menu waves-effect waves-dark"> <i class="fa fa-qrcode"></i>Registro de Empleados<span class="fa arrow"></span></a>
<ul class="nav nav-second-level">

                             <li>
                                <a href="index2.php" class="waves-effect waves-dark">Registro</a>
                            </li>
                            
                       <li>
                                <a href="Modificaindex2.php" class="waves-effect waves-dark"> Modificar Datos</a>
                        </li>
                            
                     <li>
                    <a href="consultaIndex.php" class="waves-effect waves-dark">Empleados</a>
                    </li>
                    
                    <li>
                    <a href="bajasIndex.php" class="waves-effect waves-dark">Cambiar Status</a>
                    </li>
                   </ul> 
                        
                     
<!--TERMINA REGISTRO DE EPLEADOS-->   
                    
                    
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
					
					
					
					
					
					
					
					
					
					
					
					
					
                        
                    
                     <li>
				   

<a href="Permisos.php" class="waves-effect waves-dark"> <i class="fa fa-qrcode"></i>Permisos<span class="fa arrow"></span></a>
<ul class="nav nav-second-level">

  <li>
                                <a href="Permisos.php" class="waves-effect waves-dark">Registro</a>
                            </li>
                            
                             <li>
                                <a href="MODpermiso.php" class="waves-effect waves-dark"> Modificar Datos</a>
                            </li>
                            <li>
                    <a href="consultaPermiso.php" class="waves-effect waves-dark">Permisos</a>
                    </li>
                    
                    <li>
                    <a href="bajapermiso.php" class="waves-effect waves-dark">Cambiar Status</a>
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
                                <a href="actas.php" class="waves-effect waves-dark">Registros</a>
                            </li>
                            
                             <li>
                                <a href="MODaltas.php" class="waves-effect waves-dark">Modificar Datos</a>
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
                    
                                     
                                 

            </div>

        </nav>
         <!-- Se termina el menu  -->
       
    
        <div id="page-wrapper">
		  <div class="header"> 
                        <h1 class="page-header">
                           </br> 
                           Actualización Permisos
                        </h1>
						
									
		</div>
            <div id="page-inner">

			
                <div class="row">
                
                
  

  <!-- /. Tablas  -->
  
  <!---BUSQUEDA--->
  
  <!--
  <fieldset>
      <input placeholder="Buscar" type="text" tabindex="1" required autofocus>
    </fieldset>
	--->
	
	<!---BUSQUEDA---->
  
            <div id="page-inner"> 
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="card">
                        
						<div class="card-action">
                             <h5>Selecccione el dato a editar:</h5>
                        </div>
                         <div class="card-content">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    
                                    <thead>
                                        <tr>
                                            <th>ID Tipo de permiso</th>
                                            <th>Tipo</th>
                                            <th>fecha inicio</th>
                                            <th>fecha fin</th>
                                             <th>Status</th>
											 <th>Nombre</th>
                                             <th>Editar</th>
                                         
                                          
                                        </tr>
                                    </thead>
                                    
                                    
                                    <?php
								
									include("conexion/conexion.php");
									
									

 
					  $consulta="SELECT nombre, id_empleado FROM Empleados order by id_empleado DESC";
					  
					 // $consulta="SELECT nombre1 FROM Superiores UNION SELECT nombre FROM Empleados ";
					  
						// $id=$_POST['nomemp'];
						 $consulta2="SELECT id_per FROM Tipo_permiso order by id_per DESC";

                          //$consulta="SELECT nombre FROM Empleados WHERE id_empleado='".$id."'";

						
							   $ejecutar= odbc_exec($conn,$consulta);                              
                              
							    $filaform=odbc_fetch_array($ejecutar);
									$nombre=$filaform["nombre"];
									
									$idEm=$filaform["id_empleado"];
									
									
									//para consultal al ultimo jefe
									 $ejecutar1= odbc_exec($conn,$consulta2);                              
                              
							    $filaform1=odbc_fetch_array($ejecutar1);
							$idper=$filaform1["id_per"]-1;
									
									
									
									$consulta="SELECT *FROM Tipo_permiso";
									
									//$ejecutar= odbc_query($conn,$consulta);
									
									$ejecutar=odbc_exec($conn,$consulta);
									//$nro=odbc_num_rows($ejecutar);
									
									
									
									
									
									
									
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
								$consulta4="SELECT id_empleado_permiso FROM empleados_permiso where id_empleado='" .$idE."' and id_permiso='".$idEm."'";
								$ejecutar3= odbc_exec($conn,$consulta4);
								$filaform5=odbc_fetch_array($ejecutar3);
								$idJ3=$filaform5["id_empleado_permiso"];
								// si regresa null lo inserta en caso de que no sea null no relaciona al jefe
								if ($idJ3==null){
								
								
								$insertar="INSERT INTO empleados_permiso (id_empleado,id_permiso) VALUES ('$idE','$id')";
								$ejecutar= odbc_exec($conn,$insertar);
								$nro = odbc_num_rows($ejecutar);
								
								 }
								 
			
									
									
                                    $i=0;
									
									while($fila=odbc_fetch_array($ejecutar))
									
									{
										$id=$fila["id_per"];
										$tip=$fila["Tipo"];
										$fech1=$fila["fecha1"];
										$fech2=$fila["fecha2"];
										$sta=$fila["status"];
										$nom=$fila["nomEmp"];
										
										$i++;
										
										 
				
									 
									?>
                                    
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td><?php echo $id;?></td>
                                            <td><?php echo $tip;?></td>
                                            <td><?php echo $fech1;?></td>
                                             <td><?php echo $fech2;?></td>
                                            <td><?php echo $sta;?></td>
											<td><?php echo $nombre; ?></td>
											
                                            
                                     
                                 <td><a href="MODpermiso.php? editar=<?php echo $fila["id_per"]; ?>">Editar</a></td> 
                                            </tr>        
										<?php
                                        }
										
										?>
										
                                       
										</tbody>
                                  
                                </table>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
                
                
    
                
            </div>
             
             
			            
                
                                            
                               
                               
                               
<!-- FORMULARIO DEL REGISTRO DE EMPLEADOS-->
					  
                      
                      
                      
					 <div class="container"> 
            <form id="contact" action="MODpermiso.php" method="POST"  > 
 
    <h3>Modificar</h3>
    <h4>Permisos</h4>
      
   <!--STATUS DEL EMPLEDO--> 
   
   
  <?php
  $idForm=@$_GET["editar"];
  if ($idForm==""){
	  
	  }
	  else{
		echo $idForm;
		  $consultaform="SELECT *FROM Tipo_permiso where id_per='".$idForm."'";
									
									//$ejecutar= odbc_query($conn,$consulta);
									
									$ejecutarform=odbc_exec($conn,$consultaform);
									
								  $filaform=odbc_fetch_array($ejecutarform);
								  $idform=$filaform["id_per"];
										$tipform=$filaform["Tipo"];
										$fech1form=$filaform["fecha1"];
										$fech2form=$filaform["fecha2"];
										$staform=$filaform["status"];
										$nomform=$filaform["nomEmp"];
		  
  ?>
  <form action="#"  >
  
    <fieldset>
    <h5>Numero </h5>
    
      <input  name="numero" type="text"  value="<?php echo $idform?>" required autofocus >
    </fieldset>
  
 <fieldset>
     <h5>Tipo de licencia</h5>

  <fieldset>
      <input   name="li" type="text"  value="<?php echo $tipform?>" required autofocus >
    </fieldset>

 </fieldset>
     <!--TERMINA STATUS DEL EMPLEADO--> 
    
          <!--AREA-->
    <fieldset>
    <h5>Fecha Inicial</h5>
    
      <input   name="fech1" type="text"  value="<?php echo $fech1form?>" required autofocus>
    </fieldset>
    
    
  
    <fieldset>
    <h5>Fecha Final</h5>    
      <input name="fech2" type="text"  value="<?php echo $fech2form?>" required autofocus>
    </fieldset>
    
    
     <!--NOMBRE-->
    <fieldset>
    <h5>Status</h5>
    
      <input  name="sta" type="text"  value="<?php echo $staform?>" required autofocus>
    </fieldset>
    
    <?php
	  }
    ?>
    
    <!--TIPOS -->
    <fieldset>
    
<!-- <div class="btn-group">
											  <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Tipo permiso <span class="caret"></span></button>
											  <ul class="dropdown-menu">
												<li><a href="#">Contrato</a></li>
												<li><a href="#">Sindical</a></li>
												<li><a href="#">Casos especiales</a></li>
												<li class="divider"></li>
												<li><a href="#">Vacaciones</a></li>
											  </ul>
											</div>
    </fieldset>-->
   
    </fieldset>
    
   
  <fieldset>
      <button name="btnMOD" type="submit" id="contact-submit" data-submit="...Sending">ACTUALIZAR</button>
    </fieldset>
    
	
                             <li>
                                <a href="MODpermiso.php" class="waves-effect waves-dark">REGRESAR AL INICIO</a>
                            </li>
   
  </form>
</div>

<?php
if(isset($_POST['btnMOD'])){
	
	
								$editar_id=$_POST['numero'];	
								$editar_tip=$_POST['li'];
								$editar_fe1=$_POST['fech1'];
								$editar_fe2=$_POST['fech2'];
								$editar_sta=$_POST['sta'];
								
									
								$consulta="UPDATE Tipo_permiso SET Tipo='$editar_tip',fecha1='$editar_fe1',fecha2='$editar_fe2',status='$editar_sta' WHERE id_per='".$editar_id."'";
								//$ejecutar= odbc_exec($conn,$consulta);
								
								$query = odbc_exec($conn, $consulta) or die ("Problema al ejecutar la consulta"); 
								
								
								if($query){
								echo "<script>alert('Datos actualizados')</script>";
								
									echo $_POST['btnMOD'];
									echo '<br>';
									
									echo $editar_id;
									echo '<br>';
									echo $editar_tip;
									echo '<br>';
									echo $editar_fe1;
									echo '<br>';
									echo $editar_fe2;
									echo '<br>';
									echo $editar_sta;
									
									//header("Location:prueba.php");
								//header("Location: MODpermiso.php");	
								//echo '<meta http-equv="refresh" content="1; url=Modificar.php" >';
								echo "<script>
								location.href='MODpermiso.php'
								alert('Datos actualizados');
								</script>";
								unset($btnMOD);
								
								
								}
									
								}  ?>

                           
                                </form>
      
    
    </form>
   
    
			 
			 
			 <!-- /. PAGE INNER  -->
            </div>
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
 

</body>

</html>