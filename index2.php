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
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="assets/js/Lightweight-Chart/cssCharts.css"> 
    
    
    <link href="assets/css/formulario.css"  type="text/css"   rel="stylesheet" />
	
	
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
				  <li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown1"><i class="fa fa-user fa-fw"></i> <b>Usuarios</b> <i class="material-icons right"></i></a></li>
            
			
			
			
		<!-- 1 tabla -->
<ul id="dropdown1" class="dropdown-content">
<li><a href="Usuarios.php"><i class="fa fa-user fa-fw"></i> Agregar Usuarios</a>
</li>
<li><a href="editarUsuario.php"><i class="fa fa-gear fa-fw"></i> Editar Usuarios</a>
</li> 
<li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Salir</a>
</li>
</ul>

				
			
			
			</ul>
        </nav>
		
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
                                <a href="Modificaindex2.php" class="waves-effect waves-dark">Modificar Datos</a>
                        </li>
                            
                     <li>
                    <a href="consultaIndex.php" class="waves-effect waves-dark">Empleados</a>
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
                           BIENVENIDO!</br> 
                           Registro de empleados del TSJED
                        </h1>
						
						
				
									
		</div>
            <div id="page-inner">

			
                <div class="row">
                
                
  

     <!-- FORMULARIO DEL REGISTRO DE EMPLEADOS-->
					  
					 <div class="container"> 
            <form id="contact" action="index2.php"  method="POST"  data-submit="return verificarad"> 
 
    
    <h3>Empleados</h3>
	

   <!--STATUS DEL EMPLEDO--> 
   
    <!--AREA DE EMPLEADOS--->
	
	<form method='POST'>

		<h5>Area </h4>
	
	<?php
	 
	 include("conexion/conexion.php");
	
	$consulta="SELECT * FROM Areas where status like 'Activo'";
	 
	$ejecutar= odbc_exec($conn,$consulta); 
	 
	
	 
	 
	 
	 
	//...CODIGO 1.............
	//include("conexion/conexion.php");
	
	//$consulta="SELECT * FROM Areas where status like 'Activo'";
	
	//$ejecutar= odbc_exec($conn,$consulta);
    
	//echo '<select id="prueba" class="entrada" name="area">';
	
	
	//while($nro = odbc_fetch_array($ejecutar))
	//{
	//echo '<option value="'.$nro["id"].'">'.$nro["Area"].'</option>';
	

         //echo '<select>'.$nro["Area"]'</select>';	
		
		
	
	/*
		echo "<option value='" .$nro['id']."' >";
		//if($_POST['area']==$nro['id']
		//echo " SELECTED";
	
       //echo">";	
	   echo $nro['Area'];
	   echo "</option>";*/
	//}

	//echo '</select>';
	//Termina.....................
	
	?>
	
	
	
	
	 <select name="are" size="0">
	
	
	
	<?php  while($arreglo=odbc_fetch_array($ejecutar)){  ?>

	
	<option value="<?php echo $arreglo['id'] ?>"><?php echo $arreglo['Area']?></option>
	
	
	<?php } ?>
	
	
   </select>	
   
  
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
    
	
	
	
						
	
	    <!--CATEGORIA DE EMPLEADOS--->
		<h5>Categoria </h5>
   <form method='POST'>

	
	<?php
	 
	  include("conexion/conexion.php");
	$consulta="SELECT * FROM categorias where status like 'Activo'";
	
	 
	$ejecutar= odbc_exec($conn,$consulta); 
	 
	 
	 
	 
	 
	 
	 
	 
	//...CODIGO1	
	//include("conexion/conexion.php");
	
	//$consulta="SELECT * FROM categorias where status like 'Activo'";
	
	//$ejecutar= odbc_exec($conn,$consulta);
    
	//echo '<select id="prueba" class="entrada" name="categoria[]">';
	
	
	//while($nro = odbc_fetch_array($ejecutar))
	//{
	//echo '<option value="'.$nro["id"].'">'.$nro["categoria"].'</option>';

	//}
	
	//$categoria=$_POST["categoria"];
	
	//recorremos el array de categorias seleccionadas ya que la primera posicion es 0
	//for ($i=0;$i<count($categoria);$i++)
	//{
		//echo "<br> Categoria " . $i . ": " .$categoria[$i];			
	//}

	
	//echo '</select>';
	
	//TERMINA----
	
	?>
    

 <select name="cate" size="0">
	
	
	
	<?php  while($arreglo=odbc_fetch_array($ejecutar)){  ?>

	
	<option value="<?php echo $arreglo['id'] ?>"><?php echo $arreglo['categoria']?></option>
	
	
	<?php } ?>
	
	
   </select>	

	
	
    <h5>Nombre </h5>
     <!--NOMBRE-->
    <fieldset>
      <input placeholder="Nombre Completo" name="nombre" type="text" tabindex="1" required autofocus>
    </fieldset>
    
    
    <!--TIPOS --> 
   
  <fieldset>
      <button name="btninsertar" type="submit" id="contact-submit" data-submit="...Sending">Guardar</button>
    </fieldset>
   </form> 
    <?php
	
//include("conexion/conexion.php");

							  
	if(isset($_POST['btninsertar'])){
	//$idemp=$_POST['id_emp'];

$area=$_POST['are'];
$categoria=$_POST['cate'];
$nom=$_POST['nombre'];



if($_POST["group"]=="activo"){

   $radio=$_POST['group'];
	
	} 
	
	if($_POST["group"]=="inactivo"){

   $radio=$_POST['group'];

	
	
	} 
	

$consulta="INSERT INTO Empleados (status,area,categoria,nombre) VALUES ('$radio','$area','$categoria','$nom')";

//$stmt = sqlsrv_query($conn, $consulta, array(), array("Scrollable"=> SQLSRV_CURSOR_KEYSET));

//$ejecutar=sqlsrv_query($conn,$consulta); 

$ejecutar= odbc_exec($conn,$consulta);
$nro = odbc_num_rows($ejecutar);

if($ejecutar){
	
	echo "<script>alert('Registro guardado')</script>";
	}
	
	
	}
		
			
    ?>		
    
    
  </form>
</div> 

 
    <script src="assets/js/jquery-1.10.2.js"></script>
	
	<!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
	
	<script src="assets/materialize/js/materialize.min.js"></script>
	
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <!--script src="assets/js/morris/raphael-2.1.0.min.js"></script-->
    <!--script src="assets/js/morris/morris.js"></script-->
	
	
	<script src="assets/js/easypiechart.js"></script>
	<script src="assets/js/easypiechart-data.js"></script>
	
	 <script src="assets/js/Lightweight-Chart/jquery.chart.js"></script>
	
    <!-- Custom Js -->
    <!--script src="assets/js/custom-scripts.js"></script--> 
 

</body>

</html>