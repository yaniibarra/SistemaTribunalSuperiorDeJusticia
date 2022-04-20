<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Usuarios</title>
	
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
				  <li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown1"><i class="fa fa-user fa-fw"></i> <b>Usuario</b> <i class="material-icons right"></i></a></li>
            </ul>
        </nav>
		<!-- Dropdown Structure -->

		
<ul id="dropdown1" class="dropdown-content">

<li><a href="Usuarios.php"><i class="fa fa-user fa-fw"></i> Agregar Usuarios</a>

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
                   <a href="index2.php" class="active-menu waves-effect waves-dark"> <i class="fa fa-qrcode"></i>Registro de empleados<span class="fa arrow"></span></a>
<ul class="nav nav-second-level">

                             <li>
                                <a href="index2.php" class="waves-effect waves-dark">Registro</a>
                            </li>
                            
                       <li>
                                <a href="Modificaindex2.php" class="waves-effect waves-dark"> Modificar Datos</a>
                        </li>
                            
                     <li>
                    <a href="consultaIndex.php" class="waves-effect waves-dark">Empleados </a>
                    </li>
                    
                    <li>
                    <a href="bajasIndex.php" class="waves-effect waves-dark">Cambiar Status</a>
                    </li>
                   </ul> 
                        
                     
<!--TERMINA REGISTRO DE EMPLEADOS-->   









    
                                  <!--FORM SUPERIORES-->   
             <li>    
                				    <a href="superiores.php" class="waves-effect waves-dark"><i class="fa fa-qrcode"></i>Superiores <span class="fa arrow"></span></a>
						 <ul class="nav nav-second-level">
					 <li>
                                <a href="superiores.php" class="waves-effect waves-dark">Registros</a>
                            </li>
                            
                             <li>
                                <a href="MODsuperiores.php" class="waves-effect waves-dark"> Modificar Datos</a>
                            </li>
                            
                            <li>
                                <a href="consultaSuperior.php" class="waves-effect waves-dark">Superiores</a>
                            </li>
							
                            <li>
							
							<a href="bajaSuperior.php"class="waves-effect waves-dark">Cambiar Status</a>
							</li>
							
							</li>
                            </ul>
            <!--TERMINA SUPERIORES-->     
                    
                    
                        
					
                    <!--PERMISOS-->
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
                    <!--TERMINA PERMISOS-->
                
				
				
				<!--FORM OFICIOS-->   
             <li>    
               <a href="oficios.php" class="waves-effect waves-dark"><i class="fa fa-qrcode"></i>Oficios <span class="fa arrow"></span></a>
						 
					<ul class="nav nav-second-level">
					        <li>
                                <a href="oficios.php" class="waves-effect waves-dark">Registros</a>
                            </li>
                            
                             <li>
                                <a href="MODoficios.php class="waves-effect waves-dark"> Modificar Datos</a>
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
                           Agregar nuevos usuarios
                      
									
		</div>
            <div id="page-inner">

			
                <div class="row">
                
                
  

     <!-- FORMULARIO DEL REGISTRO DE EMPLEADOS-->
					  
					 <div class="container"> 
            <form id="contact" action="Usuarios.php" method="POST"  data-submit="return verificarad"> 
 
    <h3>Agregar</h3>
    <h4>Usuarios</h4>
      
          <!--AREA-->
    <fieldset>
      <input placeholder="Nombre"  name="nom" type="text" tabindex="1" required autofocus>
    </fieldset> 
  
 
          <!--AREA-->
    <fieldset>
      <input placeholder="Password"       name="pass" type="password" tabindex="1" required autofocus>
    </fieldset>
    
    
     <!--CATEGORIA-->
    <fieldset>
      <input placeholder="Inicial" name="inicial" type="text" tabindex="1" required autofocus>
    </fieldset>
    
    
	
     <!--NOMBRE-->
    
	<fieldset>
       <h5>Status</h5>
       <!-- Switch -->
 
 <div>
<ul>
  <li>
  
  
     <input type="radio" id="f-option" name="group" value="Activo">
    <label for="f-option"><h5>Activo<h5></label>
    </li>
  
  <li>
    <input type="radio" id="s-option" name="group" value="Inactivo">
    <label for="s-option"><h5>Inactivo<h5></label>
  </li>
 </ul>
</div>
    </fieldset>
    
    

    
   <?php
   
   
   include("conexion/conexion.php");
				  		

		if(isset($_POST['btninsertar'])){
	

$nombre=$_POST['nom'];
$password=$_POST['pass'];
$ini=$_POST['inicial'];





if($_POST["group"]=="Activo"){

   $radio=$_POST['group'];
	
	} 
	
	if($_POST["group"]=="Inactivo"){

   $radio=$_POST['group'];

	
	
	} 


$consulta="INSERT INTO Usuarios(Nombre,password,inicial,status) VALUES ('$nombre','$password','$ini','$radio')";



$ejecutar= odbc_exec($conn,$consulta);
$nro = odbc_num_rows($ejecutar);

if($ejecutar){
	
	echo "<script>alert('Registro guardado')</script>";
	}
	
	
	
	}
   
   
   
   ?>
   
   
  <fieldset>
      <button name="btninsertar" type="submit" id="contact-submit" data-submit="...Sending">Guardar</button>
    </fieldset>
    <p class="copyright"><a href="Usuarios.php">USUARIOS</a></p>
  </form>
</div> 

 
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