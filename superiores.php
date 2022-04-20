<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Superiores</title>
	
	
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
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="assets/js/Lightweight-Chart/cssCharts.css"> 
    
    
    <link href="assets/css/formulario.css"  type="text/css"   rel="stylesheet" />
    
    
</head>





<body>
    <div id="wrapper">
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






		<!-- 1 tabla -->
<ul id="dropdown1" class="dropdown-content">
<li><a href="Usuarios.php"><i class="fa fa-user fa-fw"></i> Agregar Usuarios</a>
</li>
<li><a href="editarUsuario.php"><i class="fa fa-gear fa-fw"></i> Editar Usuarios</a>
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
        
        
        <!--Menu  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
<!--regitro-->
           <li>                       
                        <a href="index2.php" class="waves-effect waves-dark"> <i class="fa fa-qrcode"></i>Registro de empleados<span class="fa arrow"></span></a>
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
                    <a href="bajasindex.php" class="waves-effect waves-dark">Cambiar Status</a>
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
                   
                   
                   
                   
                    
                    
                    
                              
					
                    
                    <li>
                     <a href="Permisos.php" class="waves-effect waves-dark"><i class="fa fa-qrcode"></i>Permisos <span class="fa arrow"></span></a>
						 
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
							
							<a href="bajaspermiso.php" class="waves-effect waves-dark">Cambiar Status</a>
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
                                <a href="MODaltas.php" class="waves-effect waves-dark"> Modificar Datos</a>
                            </li>
                            
                            <li>
                                <a href="consultaActas.php" class="waves-effect waves-dark">Actas</a>
                            </li>
							
                            <li>
							
							<a href="bajActas.php" class="waves-effect waves-dark">Eliminar Datos</a>
							</li>
							
							</li>
                            </ul>
            <!--TERMINA ACTAS--> 
                    
                  
                                            
                                  
                  
                 </ul>

            </div>

        </nav>
        <!-- Termina menu  -->
		
		
		
		
		
	
		<!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
		  <div class="header"> 
                        <h1 class="page-header">
                            Agregar Superiores
                        </h1>
		 </div>
		
		
	
		<!-- /. Tablas  -->
            <div id="page-inner"> 
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                   
				   <div class="card">
                      
					   <div class="card-action">
                             Ingresar Superiores
                        </div>
                          <!-- FORMULARIO-->
					

					
					 <?php
					  include("conexion/conexion.php");

					  
					 
					  $consulta="SELECT nombre, id_empleado FROM Empleados order by id_empleado DESC";
					  
					 // $consulta="SELECT nombre1 FROM Superiores UNION SELECT nombre FROM Empleados ";
					  
						// $id=$_POST['nomemp'];
						 $consulta2="SELECT id_jefe FROM Superiores order by id_jefe DESC";

                          //$consulta="SELECT nombre FROM Empleados WHERE id_empleado='".$id."'";

						
							   $ejecutar= odbc_exec($conn,$consulta);                              
                              
							    $filaform=odbc_fetch_array($ejecutar);
									$nombre=$filaform["nombre"];
									
									$idEm=$filaform["id_empleado"];
									
									
									//para consultal al ultimo jefe
									 $ejecutar1= odbc_exec($conn,$consulta2);                              
                              
							    $filaform1=odbc_fetch_array($ejecutar1);
							//$idJefe=$filaform1["id_jefe"]+1;
								 
					  ?>


					  
					  
					  
					  
					  
					<div class="container">  
 
 <form id="contact" action="" method="post">
    <h3>Registros</h3>
    <h4>SUPERIORES</h4>
	
 <h4>Nombre del empleado</h4>
    <fieldset>
   
   <input placeholder="Nombre completo" type="text" name="nomemp" value="<?php echo $nombre?> " required autofocus disabled>
   
   </fieldset>
	
    <!--TIPOS DE ACTAS-->
	<h4>Nombre del jefe</h4>
    <fieldset>
    <input placeholder="Nombre completo" type="text" name="nom" tabindex="1" required autofocus>

    </fieldset>
     
  <fieldset>
   
     <!--TERMINA STATUS DEL SUPERIOR--> 
      							  <form action="#">

	
	<fieldset>
      <button name="btninsertar" type="submit" id="contact-submit" data-submit="...Sending">Guardar</button>
    </fieldset>
    <p class="copyright"><a href="">PERMISOS</a></p>
    
        <?php
//include("conexion/conexion.php");


					  		
							  
	if(isset($_POST['btninsertar'])){
	//$idemp=$_POST['id_emp'];

$nom=$_POST['nom'];
//$nomemp=$_POST['nomemp'];



/*if($_POST["group"]=="activo"){

   $radio=$_POST['group'];
	
	} 
	
	if($_POST["group"]=="inactivo"){

   $radio=$_POST['group'];
	
	
	} */
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
									echo "<script>alert('El nombre ya existe ingrese uno nuevo')</script>";
									
									
									
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

//$stmt = sqlsrv_query($conn, $consulta, array(), array("Scrollable"=> SQLSRV_CURSOR_KEYSET));

//$ejecutar=sqlsrv_query($conn,$consulta); 



if($ejecutar){
	
	echo "<script>alert('Registro guardado')</script>";
	}
	
	
	}
		
			
    ?>		
    
    
  </form>
</div>  
					  
			 
			 <!-- /. PAGE INNER  -->
            </div>
        
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
	 <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script> 
 

</body>

</html>
