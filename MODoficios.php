<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

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
<ul id="dropdown2" class="dropdown-content w250">
  <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
</ul>
<ul id="dropdown3" class="dropdown-content dropdown-tasks w250">
<li>
		<a href="#">
			<div>
				<p>
					<strong>Task 1</strong>
					<span class="pull-right text-muted">60% Complete</span>
				</p>
				<div class="progress progress-striped active">
					<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
						<span class="sr-only">60% Complete (success)</span>
					</div>
				</div>
			</div>
		</a>
	</li>
	<li class="divider"></li>
	<li>
		<a href="#">
			<div>
				<p>
					<strong>Task 2</strong>
					<span class="pull-right text-muted">28% Complete</span>
				</p>
				<div class="progress progress-striped active">
					<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100" style="width: 28%">
						<span class="sr-only">28% Complete</span>
					</div>
				</div>
			</div>
		</a>
	</li>
	<li class="divider"></li>
	<li>
		<a href="#">
			<div>
				<p>
					<strong>Task 3</strong>
					<span class="pull-right text-muted">60% Complete</span>
				</p>
				<div class="progress progress-striped active">
					<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
						<span class="sr-only">60% Complete (warning)</span>
					</div>
				</div>
			</div>
		</a>
	</li>
	<li class="divider"></li>
	<li>
		<a href="#">
			<div>
				<p>
					<strong>Task 4</strong>
					<span class="pull-right text-muted">85% Complete</span>
				</p>
				<div class="progress progress-striped active">
					<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
						<span class="sr-only">85% Complete (danger)</span>
					</div>
				</div>
			</div>
		</a>
	</li>
	<li class="divider"></li>
	<li>
</ul>   
<ul id="dropdown4" class="dropdown-content dropdown-tasks w250">
  <li>
                            <a href="#">
                                <div>
                                    <strong>ximena ibarra</strong>
                                    <span class="pull-right text-muted">
                                        <em>Today</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>Asesor</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since an kwilnw...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since the...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
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
                                <a href="MODsuperiores.php" class="waves-effect waves-dark">Modificar Datos</a>
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
                                <a href="MODoficios.php" class="waves-effect waves-dark"> Reinpreci??n de oficios</a>
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
                                <a href="MODaltas.php" class="waves-effect waves-dark"> Modificar Datos</a>
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
                           Actualizaci??n Oficios
                        </h1>
						
									
		</div>
            <div id="page-inner">

			
                <div class="row">
                
                
  

  <!-- /. Tablas  -->
  <!---BUSQUEDA----->
  <!---
  <fieldset>
      <input placeholder="Buscar" type="text" tabindex="1" required autofocus>
    </fieldset>
	---->
  
  <!-----BUSQUEDA--->
  
  
            <div id="page-inner"> 
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="card">
                        <div class="card-action">
                             <h5>Seleccione el dato a editar:</h5>
                        </div>
						</br>
                         <div class="card-content">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    
                                    <thead>
                                        <tr>
                                            <th>ID de oficio</th>
											  <th>Tipo</th>
                                            <th>Nombre Empleado</th>
                                            <th>Fecha Inicial</th>
											  <th>Fecha Final</th>
                                            <th>Status</th>
                                             <th>Editar</th>
                                         
                                          
                                        </tr>
                                    </thead>
                                    
                                    
                                    <?php
									include("conexion/conexion.php");
									$consulta="SELECT *FROM Oficios";
									
									//$ejecutar= odbc_query($conn,$consulta);
									
									$ejecutar=odbc_exec($conn,$consulta);
									//$nro=odbc_num_rows($ejecutar);
									
									
									
                                    $i=0;
									
									while($fila=odbc_fetch_array($ejecutar))
									
									{
										$id=$fila["id_oficio"];
										$nom=$fila["nombre"];
										$tip=$fila["tipo_ofi"];
										$sta=$fila["status"];
										
										
										$i++;
										
									
									?>
                                    
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td><?php echo $id;?></td>
                                            <td><?php echo $nom;?></td>
                                            <td><?php echo $tip;?></td>
                                             <td><?php echo $sta;?></td>
                                            
                                   <td><a href="MODoficios.php? editar=<?php echo $fila["id_oficio"]; ?>">Editar</a> </td>
                                     
                                      </tr>
                                  </tbody>
                                 
                                       
										<?php
                                        }
										
										?>
										
                                </table>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                    
                    
                                                
                              
                               
                              
<!-- FORMULARIO DEL REGISTRO DE EMPLEADOS-->


 
					 <div class="container"> 
            <form id="contact" action="MODoficios.php" method="POST"  > 
 
    <h3>Modificar</h3>
    <h5>Oficios</h5>
      
   <!--STATUS DEL EMPLEDO--> 
   
   
  <?php
  
  $idForm=@$_GET["editar"];
  
  
  if ($idForm==""){
	  
	  }
	  
	  
	  else{
		  
		  
		  
		echo $idForm;
		
		  $consultaform="SELECT *FROM Oficios WHERE id_oficio='".$idForm."'";
									
									//$ejecutar= odbc_query($conn,$consulta);
									
									$ejecutarform=odbc_exec($conn,$consultaform);                                    
									
								  $filaform=odbc_fetch_array($ejecutarform);
								  
								  
								        $idform=$filaform["id_oficio"];
										$staform=$filaform["nombre"];
										$areform=$filaform["tipo_ofi"];
										$catform=$filaform["status"];
										$nomform=$filaform["fk_Toficio"];
		  
  ?>
  
  
  
  
  
  
  <form action="MODoficios.php"  method="POST"  >
  
  
    <fieldset>
	<h5>Numero de oficio</h5>
      <input  name="id"  type="text"  value="<?php  echo $idform?>" required autofocus >
    </fieldset>
  
  
 <fieldset>
     

  <fieldset>
  <h5>Nombre</h5>
      <input  name="nom" type="text"  value="<?php echo $staform?>" required autofocus >
    </fieldset>

 </fieldset>
     <!--TERMINA STATUS DEL EMPLEADO--> 
    
          <!--AREA-->
    <fieldset>
	
	<h5>Tipo</h5>
      <input   name="tip" type="text"  value="<?php echo $areform?>" required autofocus>
    </fieldset>
    
    
  
    <fieldset>
	<h5>Status</h5>
	
      <input placeholder="status" name="sta" type="text"  value="<?php echo $catform?>" required autofocus>
    </fieldset>
    
    
    <!---
    
	<fieldset>
      <input placeholder="Tipo Oficio" name="llavefk" type="text"  value="<?php echo $nomform?>" required autofocus>
    </fieldset>
	------>
    
    <?php
	  }
    ?>
    
   
    
   
  <fieldset>
      <button name="actualizar" type="submit" id="contact-submit" data-submit="...Sending">ACTUALIZAR</button>
    </fieldset>
    
      <li>
                                <a href="MODoficios.php" class="waves-effect waves-dark">REGRESAR AL INICIO</a>
                            </li>
   
  </form>
</div>



<!---ACTUALIZACIONES---->

<?php

include("conexion/conexion.php");



if(isset ($_POST['actualizar'])=="actualizar")
{
	



                                 $editar_id=$_POST['id'];
     							 $editar_nom=$_POST['nom'];
								 $editar_tip=$_POST['tip'];
								 $editar_sta=$_POST['sta'];
								// $editar_fk=$_POST['llavefk'];

								 
								$consulta="UPDATE Oficios SET nombre='$editar_nom',tipo_ofi='$editar_tip',status='$editar_sta' WHERE id_oficio='".$editar_id."'";
								$ejecutar= odbc_exec($conn,$consulta);
								
								$query = odbc_exec($conn, $consulta) or die ("Problema al ejecutar la consulta"); 
								
								
							
								
								if($query){
								echo "<script>alert('Datos actualizados')</script>";
								
										echo $_POST['actualizar'];
									echo '<br>';
									
									echo $editar_id;
									echo '<br>';
									echo $editar_nom;
									echo '<br>';
									echo $editar_tip;
									echo '<br>';
									echo $editar_sta;
									
									
									//header("Location:prueba.php");
								//header("Location: MODoficios.php");	
								//echo '<meta http-equv="refresh" content="1; url=Modificar.php" >';
								echo "<script>
								location.href='MODoficios.php'
								alert('Datos actualizados');
								</script>";
								unset($btnMOD);
								
								
								
								}
									
}								 
                               							 
								 
								?>
								
								
								
								
								
								
                  
                                </form>
                                
        
    </form>
   
                    
					
					
					
					
					
					
					
					
					
					
                      
					  
					  
                      
					 
             
			 
			 
			 
			 <!-- /. PAGE INNER  -->
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