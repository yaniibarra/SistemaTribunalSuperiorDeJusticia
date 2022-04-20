<?php
include("../conexion/conexion.php");


					  		
							  
	if(isset($_POST['btninsertar'])){
	//$idemp=$_POST['id_emp'];

$area=$_POST['are'];
$categoria=$_POST['cat'];
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

