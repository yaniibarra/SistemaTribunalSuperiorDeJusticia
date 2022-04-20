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
				  <li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown1"><i class="fa fa-user fa-fw"></i> <b>Usuarios</b> <i class="material-icons right"></i></a></li>
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
                        <a href="index2.php" class="active-menu waves-effect waves-dark"> <i class="fa fa-qrcode"></i>Registro de empleados<span class="fa arrow"></span></a>
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
                        
                     
<!--TERMINA REGISTRO DE EPLEADOS-->  









  <!--FORM SUPERIORES-->   
             <li>    
                				    
                       <a href="superiores.php" class="waves-effect waves-dark"><i class="fa fa-qrcode"></i>Superiores <span class="fa arrow"></span></a>
						 
					<ul class="nav nav-second-level">
					
					
					
                               <li>
                                <a href="superiores.php" class="waves-effect waves-dark">Registro</a>
                            </li>
                            
                             <li>
                                <a href="MODsuperiores.php"class="waves-effect waves-dark"> Modificar Datos</a>
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
                                <a href="Permisos.php" class="waves-effect waves-dark">Registros</a>
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
                           Cambios de Status
                        </h1>
					 
									
		</div>
            <div id="page-inner">

			
                <div class="row">
                
                
  

     <!-- /. Tablas  -->
<!---
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
                           Cambiar Status
                        </div>
                       <div class="card-content">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    
                                    <thead>
                                        <tr>
                                            <th>ID empleado</th>
                                            <th>Status</th>
                                            <th>Nombre</th>
                                            <th>Boton</th>
                                            
											
                                        </tr>
                                    </thead>
                                    
                                    
                                    <?php
									include("conexion/conexion.php");
									$consulta="SELECT *FROM Empleados";
									
									//$ejecutar= odbc_query($conn,$consulta);
									
									$ejecutar=odbc_exec($conn,$consulta);
									//$nro=odbc_num_rows($ejecutar);
									
									
									
                                    $i=0;
									
									while($fila=odbc_fetch_array($ejecutar))
									
									{
										 $idform=$fila["id_empleado"];
									     $staform=$fila["status"];
										 $nomform=$fila["nombre"];
										$i++;
										
									
									?>
                                    
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td><?php echo $idform;?></td>
                                            <td><?php echo $staform;?></td>
											<td><?php echo $nomform;?></td>
                                            
                                           <td><a href="bajasIndex.php? borrar=<?php echo $fila["id_empleado"]; ?>">Modificar</a> </td>
                                            
                                        </tr>
                                       
										<?php
                                        }
										
										?>
                                     
										</tbody>
                                 
                                </table>
                                
                                 
                                
                                
                                
                                
                                
                                
                                
                            </div>
                            
                        </div>
                    </div>
                    
           
		   
		   
		   
		   
		   <!----Formulario A editar STATUS--->
		   
		    <div class="container"> 
            <form id="contact" action="bajasIndex.php" method="POST"  > 
 
    <h3>Modificar</h3>
    <h5>STATUS</h5>
      
   <!--STATUS DEL EMPLEDO--> 
   
   
  <?php
  
  $idForm=@$_GET["borrar"];
  
  
  if ($idForm==""){
	  
	  }
	  
	  
	  else{
		  
		  
		  
		echo $idForm;
		
		  $consultaform="SELECT *FROM Empleados WHERE id_empleado='".$idForm."'";
									
									//$ejecutar= odbc_query($conn,$consulta);
									
									$ejecutarform=odbc_exec($conn,$consultaform);                                    
									
								  $filaform=odbc_fetch_array($ejecutarform);
								  
								  
								        $idform=$filaform["id_empleado"];
										$staform=$filaform["status"];
										$nomform=$filaform["nombre"];
										
  
  
  ?>
  
  
  
  
  
  <form action=""  method="POST"  >
  
  
    <fieldset>
	<h5>ID Empleado</h5>
	
      <input  name="id"  type="text"  value="<?php  echo $idform?>" required autofocus >
    </fieldset>
  
  
 <fieldset>
     <h5>Status</h5>

  <fieldset>
      <input   name="sta" type="text"  value="<?php echo $staform?>" required autofocus >
    </fieldset>

    <?php
	  }
    ?>
    
   <fieldset>
	<h5> Nombre</h5>
	
      <input  name="nombre"  type="text"  value="<?php  echo $nomform?>" required autofocus >
    </fieldset> 
   
  <fieldset>
      <button name="modificar" type="submit" id="contact-submit" data-submit="...Sending">ACTUALIZAR</button>
    </fieldset>
    
                       <li>
                     <a href="bajasIndex.php" class="waves-effect waves-dark">REGRESAR AL INICIO</a>
                            </li>
   
  </form>
</div>




<!---ACTUALIZACIONES---->

<?php

include("conexion/conexion.php");



if(isset ($_POST['modificar']))
{
	



                                 $editar_id=$_POST['id'];
								 $editar_statu=$_POST['sta'];
								$editar_name=$_POST['nombre'];

								 
								$consulta="UPDATE Empleados SET nombre='$editar_name',status='$editar_statu' WHERE  id_empleado='".$editar_id."'";
								
								//$ejecutar= odbc_exec($conn,$consulta);
								
								$query = odbc_exec($conn, $consulta) or die ("Problema al ejecutar la consulta"); 
								
								 
								
							
								
								
								
								if($query){
									
								echo "<script>alert('Dato actualizado')</script>";
								
										echo $_POST['modificar'];
									echo '<br>';
									
									echo $editar_id;
									echo '<br>';
									echo $editar_statu;
									
									
									//header("Location:prueba.php");
								//header("Location: bajasIndex.php");	
								//echo '<meta http-equv="refresh" content="1; url=Modificar.php" >';
								echo "<script>
								location.href='bajasIndex.php'
								alert('Datos actualizados');
								</script>";
								unset($btnMOD);
								
								
								}
									
                                 }								 
                               							 
								 
								?>
						
		   <!---Termina-->
    
    </form>
                
                
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