
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Actas </title>
	
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
				  <li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown1"><i class="fa fa-user fa-fw"></i> <b>Yanira</b> <i class="material-icons right"></i></a></li>
            </ul>
        </nav>






		<!-- 1 tabla -->
<ul id="dropdown1" class="dropdown-content">
<li><a href="Usuarios.php"><i class="fa fa-user fa-fw"></i> My Profile</a>
</li>
<li><a href="editarUsuario.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
</li> 
<li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                                    <strong></strong>
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
                                    <strong></strong>
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
                    <a href="bajasIndex.php" class="waves-effect waves-dark">Eliminar Datos</a>
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
                                <a href="consultaSuperior.php"  class="waves-effect waves-dark">Superiores</a>
                            </li>
							
                            <li>
							
							<a href="bajaSuperior.php" class="waves-effect waves-dark">Eliminar Datos</a>
							</li>
							
							</li>
                            </ul>
            <!--TERMINA SUPERIORES-->     
                  
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                    
                    
                    
                              
                    
                    <li>
                     <a href="Permisos.php" class="waves-effect waves-dark"><i class="fa fa-qrcode"></i>Permisos <span class="fa arrow"></span></a>
						 
					<ul class="nav nav-second-level">
					
					
					 <li>
                                <a href="Permisos.php" class="waves-effect waves-dark">Registro </a>
                            </li>
                            
                             <li>
                                <a href="MODpermiso.php" class="waves-effect waves-dark"> Modificar Datos</a>
                            </li>
                            
                            <li>
                                <a href="consultaPermiso.php" class="waves-effect waves-dark">Permisos</a>
                            </li>
							
                            <li>
							
							<a href="bajaspermiso.php" class="waves-effect waves-dark">Eliminar Datos</a>
							</li>
							
							</li>
                            </ul>
                    
                        <!--termina--->
                        
                        
                        
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
							
							<a href="bajaOficio.php" class="waves-effect waves-dark">Eliminar Datos</a>
							</li>
							
							</li>
                            </ul>
            <!--TERMINA OFICIOS-->
					
                        
                        
                              
      
      
                    
                                   
                                  <!--FORM ACTAS-->   
             <li>    
                				    
                       <a href="actas.php" class="waves-effect waves-dark"><i class="fa fa-qrcode"></i>Actas <span class="fa arrow"></span></a>
						 
					<ul class="nav nav-second-level">
					
					
					
                               <li>
                                <a href="actas.php" class="waves-effect waves-dark">Registro </a>
                            </li>
                            
                             <li>
                                <a href="MODaltas.php" class="waves-effect waves-dark">Modificar Datos</a>
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
                            Agregar actas
                        </h1>
						
									
		</div>
		
		
		
		
		
		
		
		
		<!-- /. Tablas  -->
            <div id="page-inner"> 
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="card">
                        <div class="card-action">
                             Ingresar Actas
                        </div>
                          <!-- FORMULARIO-->
					  
					  
					  
					<div class="container">  
  <form id="contact" action="" method="post">
    <h3>Registros</h3>
    <h4>ACTAS</h4>
    <fieldset>
      <input placeholder="ID Acta" name="id" type="text" tabindex="1" required autofocus>
    </fieldset>
    
    
    <!--TIPOS DE ACTAS-->
    <fieldset>
    <input placeholder="Nombre de acta" name="nom" type="text" tabindex="1" required autofocus>

    </fieldset>
     
     <h5>Fecha</h5>
    <table>
  <tr>
     <td> </td>
     <td>
         <input  name=" dia"  type="date"  >
     </td>
  </tr>
</table>
      							  <form action="#">

	
	<fieldset>
      <button name="guardar" type="submit" id="contact-submit" data-submit="...Sending">Guardar</button>
    </fieldset>
  
  
    
    <?php
    include("conexion/conexion.php");
   if(isset($_POST['guardar'])){
	

$numero=$_POST['id'];
$nom=$_POST['nom'];
$dia=$_POST['dia'];


$consulta="INSERT INTO Actas (id_acta,nombre_acta,fecha) VALUES ('$numero','$nom','$dia')";



$ejecutar= odbc_exec($conn,$consulta);
$nro = odbc_num_rows($ejecutar);

if($ejecutar){
	
	echo "<script>alert('Registro guardado')</script>";
	}
	
	
	}
		
			
    ?>		
    
    
    
    
    
    
    
    
    
    
    <p class="copyright"><a href="">ACTAS</a></p>
    
     

    
  </form>
  
</div>  
					  
			 
			 <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
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
