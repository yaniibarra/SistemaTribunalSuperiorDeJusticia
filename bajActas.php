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
                    <a href="consultaPermiso.php" class="waves-effect waves-dark">Permisos </a>
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
                                <a href="MODoficios" class="waves-effect waves-dark"> Modificar Datos</a>
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
                                <a href="MODaltas.php" class="waves-effect waves-dark"> Modificar Datos</a>
                            </li>
                            
                            <li>
                                <a href="consultasActas.php" class="waves-effect waves-dark">Actas </a>
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
                            Cambiar Status
                        </h1>
						 
									
		</div>
            <div id="page-inner">

			
                <div class="row">
                
                
  

  <!-- /. Tablas  -->
  
  <!--
  <fieldset>
      <input placeholder="Buscar" type="text" tabindex="1" required autofocus>
    </fieldset>
  ---->
            <div id="page-inner"> 
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="card">
                        <div class="card-action">
                             Cambios
							 
                        </div>
                         <div class="card-content">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    
                                    <thead>
                                        <tr>
                                            <th>ID Acta</th>
                                            <th>Nombre</th>
                                            <th>Fecha</th>
                                            <th>Borrar</th>
                                           
                                      </tr>
                                    </thead>
                                    
                                    
                                    <?php
									include("conexion/conexion.php");
									$consulta="SELECT *FROM Actas";
									
									//$ejecutar= odbc_query($conn,$consulta);
									
									$ejecutar=odbc_exec($conn,$consulta);
									//$nro=odbc_num_rows($ejecutar);
									
									
									
                                    $i=0;
									
									while($fila=odbc_fetch_array($ejecutar))
									
									{
										$id=$fila["id_acta"];
										$nom=$fila["nombre_acta"];
										$fech=$fila["fecha"];
										
										
										$i++;
										
									
									?>
                                    
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td><?php echo $id;?></td>
                                            <td><?php echo $nom;?></td>
                                            <td><?php echo $fech;?></td>
											
											
											<td><a href="bajActas.php? borrar=<?php echo $fila["id_acta"]; ?>">Eliminar</a> </td>
                                             
                                        </tr>
                                       
										<?php
                                        }
										
										?>
										
										</tbody>
                                      
                                  
                               
                                </table>
                                </form>
                            </div>
                            
                        </div>
                
    
    </form>
    				
			
 <?php
                            include("conexion/conexion.php");

                         if(isset($_GET['editar'])){
							
						   
						    $editar_id=$_GET['editar'];

                                  $consulta="SELECT *FROM Actas WHERE id_acta='".$editar_id."'";

                     while( $fila1=odbc_fetch_array($ejecutar)){
										$sta=$fila1["status"];
										$are=$fila1["area"];
										$cat=$fila1["categoria"];
										$nom=$fila1["nombre"]; 
					 
					 }

						 }
                               ?>
                               
             
    </form>
    
    
			</div>		
	
				</div>

</div>				
					
		
		
		
		
		
		<div class="container"> 
            <form id="contact" action="MODaltas.php" method="POST"  > 
 
    <h3>Modificar</h3>
	<h5>Actas</h5>
   
      
   <!--STATUS DEL EMPLEDO--> 
   
   
  <?php
  $idForm=@$_GET["editar"];
  if ($idForm==""){
	  
	  }
	  else{
		echo $idForm;
		  $consultaform="SELECT *FROM Actas where id_acta='".$idForm."'";
									
									//$ejecutar= odbc_query($conn,$consulta);
									
									$ejecutarform=odbc_exec($conn,$consultaform);                                    
									
								  $filaform=odbc_fetch_array($ejecutarform);
								  $idform=$filaform["id_acta"];
										$nomform=$filaform["nombre_acta"];
										$fechform=$filaform["fecha"];
										
		  
  ?>
  <form action="#" method="GET"  >
  
    <fieldset>
	
	<h5>Numero</h5>
      <input  name="id" type="text"  value="<?php echo $idform?>" required autofocus >
    </fieldset>
  
 <fieldset>
     
	 
	 
	 <h5>Nombre</h5>

  <fieldset>
      <input  name="nombre" type="text"  value="<?php echo $nomform?>" required autofocus >
    </fieldset>

 </fieldset>
     <!--TERMINA STATUS DEL EMPLEADO--> 
    
          <!--AREA-->
    <fieldset>
	<h5>Fecha</h5>
	
      <input   name="fech" type="text"  value="<?php echo $fechform?>" required autofocus>
    </fieldset>
    
    <?php
	  }
    ?>
    
   
    
   
  <fieldset>
      <button name="actualizar" type="submit" id="contact-submit" data-submit="...Sending">ACTUALIZAR</button>
    </fieldset>
    
      <li>
                                <a href="Modificaindex2.php" class="waves-effect waves-dark">REGRESAR AL INICIO</a>
                            </li>
   
  </form>
</div>

<?php
if(isset($_POST['actualizar'])){
								
								
								
								
								$editar_id=$_POST['id'];	
								$editar_nom=$_POST['nombre'];
								$editar_fe=$_POST['fech'];
								
								
									
								$consulta="UPDATE Actas SET nombre_acta='$editar_nom',fecha='$editar_fe' WHERE id_acta='".$editar_id."'";
								//$ejecutar= odbc_exec($conn,$consulta);
								
								$query = odbc_exec($conn, $consulta) or die ("Problema al ejecutar la consulta"); 
								
								
								if($query){
								echo "<script>alert('Datos actualizados')</script>";
								
								
										echo $_POST['actualizar'];
									echo '<br>';
									
									echo $editar_id;
									echo '<br>';
									echo $editar_nom;
									echo '<br>';
									echo $editar_fe;
									
									
									//header("Location:prueba.php");
								//header("Location: MODaltas.php");	
								//echo '<meta http-equv="refresh" content="1; url=Modificar.php" >';
								echo "<script>
								location.href='MODaltas.php'
								alert('Datos actualizados');
								</script>";
								unset($btnMOD);
								
								
								}
									
								}  ?>
                  
                                </form>
                            














			</div>
			 <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div><!-- FORMULARIO-->
					  
			
                
                
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