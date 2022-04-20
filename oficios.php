
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
	   












       
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
       
       
        <!--Menu-->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">



<!--registro-->
           <li>                       
                        <a href="index2.php" class="waves-effect waves-dark"> <i class="fa fa-qrcode"></i>Registro de empleados<span class="fa arrow"></span></a>
<ul class="nav nav-second-level">

                          
                            
                       <li>
                                <a href="Modificaindex2.php" class="waves-effect waves-dark">Reinpreción de oficios</a>
                        </li>
                            
                    
                   <!--termina--> 
                   
                   
                   
                    <!--FORM SUPERIORES-->   
             <li>    
                				    
                       <a href="superiores.php" class="waves-effect waves-dark"><i class="fa fa-qrcode"></i>Superiores <span class="fa arrow"></span></a>
						 
					<ul class="nav nav-second-level">
					
					
					
                            
                             <li>
                                <a href="MODsuperiores.php"  class="waves-effect waves-dark"> Reinpreción de oficios</a>
                            </li>
                            
                            
            <!--TERMINA SUPERIORES-->      
                    
                   
                   
                   
                   
                   
                   
                   
                   


             
				   
				  <li>  
                       <a href="Permisos.php" class="waves-effect waves-dark"><i class="fa fa-qrcode"></i>Permisos <span class="fa arrow"></span></a>
						 
					<ul class="nav nav-second-level">
					
					
					
                           
                            
                             <li>
                                <a href="MODpermiso.php" class="waves-effect waves-dark"> Reinpreción de oficios</a>
                            </li>
                            
                         
                     
                     <!---termina--->
                     
                     
                     
                     
                     
                     
                     
                     <!--FORM OFICIOS-->   
             <li>    
                				    
                       <a href="oficios.php" class="waves-effect waves-dark"><i class="fa fa-qrcode"></i>Oficios <span class="fa arrow"></span></a>
						 
					<ul class="nav nav-second-level">
					
					
					
                             <li>
                                <a href="MODoficios.php" class="waves-effect waves-dark">Reinpreción de oficios</a>
                            </li>
                            
                           
            <!--TERMINA OFICIOS-->
                     
                     
                     
                     
                     
                     
                     
                   
                   
                                  
                                  <!--FORM ACTAS-->   
             <li>    
                				    
                       <a href="actas.php" class="waves-effect waves-dark"><i class="fa fa-qrcode"></i>Actas <span class="fa arrow"></span></a>
						 
					<ul class="nav nav-second-level">
					
					
                             <li>
                                <a href="MODaltas.php" class="waves-effect waves-dark"> Reinpreción de oficios</a>
                            </li>
                            
                           
            <!--TERMINA ACTAS--> 
                    
                                             
                                 
                   
                   
               </ul>

            </div>

        </nav>
      <!--termina menu -->
        <div id="page-wrapper">
		  <div class="header"> 
                        <h1 class="page-header">
                           Agregar Oficios
                        </h1>
								
		</div>
            <div id="page-inner"> 
				 
				
			<div class="row">

	
	</div>
    
    
    
    
    
        <!-- FORMULARIO-->
					  
					  
					  
					<div class="container">  
  <form id="contact" action="" method="post">
   


   
    <h5>Registro</h5>
    
	
	
	
	<fieldset>
      <input placeholder="ID Oficio" type="text"  name="id" tabindex="1" required autofocus>
    </fieldset>
    
     <fieldset>
      <input placeholder="Nombre" type="text" name="nombre" tabindex="1" required autofocus>
    </fieldset>
    
  
      <!--TIPOS DE PERMISOS-->
    <fieldset>
    
    
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
     
    
      
   <form action="#"  >
  
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
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Guardar</button>
    </fieldset>
    <p class="copyright"><a href="">OFICIOS</a></p>
  </form>
</div>  
	
				  							
	<?php 
	include ("conexion/conexion.php");
	
	if(isset($_POST['submit'])){
	
	$id=$_POST['id'];
	$nom=$_POST['nombre'];
	
	if($_POST["lista"]=="Medica"){
		
		$selec=$_POST['lista'];
		}
	
		if($_POST["lista"]=="Materno"){
		
		$selec=$_POST['lista'];
		}
		if($_POST["lista"]=="Fallecimiento"){
		
		$selec=$_POST['lista'];
		}
		
	//Empieza radio button
	if($_POST["group"]=="activo"){
		$radio=$_POST['group'];
				 
		}
		
		if($_POST["group"]=="inactivo"){
		$radio=$_POST['group'];
		
		}
		
		
	$insertar="INSERT INTO Oficios (id_oficio,nombre,tipo_ofi,status) VALUES ('$id','$nom','$selec','$radio')";
	
	$ejecutar=odbc_exec($conn,$insertar);
	$nro=odbc_num_rows($ejecutar);
	
	if($ejecutar){
		echo "<script>alert('Registro guardado')</script>";
		
		}
	
	}
	?>
					
					</div>
			 <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div><!-- FORMULARIO-->
					 

          </div>
				<footer><p><a href="">Oficios</a></p></footer>
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
 

</body>

</html>
