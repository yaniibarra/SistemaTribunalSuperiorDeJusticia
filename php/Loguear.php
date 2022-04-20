<?php
session_start();
include("../conexion/conexion.php");

$user = $_POST["user"];
$pass = $_POST["pass"];


$consulta = "SELECT * FROM Login WHERE usuario='$user'";
$resu = odbc_exec($conn,$consulta);
$nro = odbc_num_rows($resu);

	if($nro == 0){
		header("Location:../index.php");
		$_SESSION['resultado']=1;
	}else{
		$passdb = odbc_result($resu, "pass"); 
		
		if($pass == $passdb){
			header("Location:../index2.php");
			$_SESSION['resultado']=3;
		
		}else{
			header("Location:../index.php");
			$_SESSION['resultado']=2;    
			
		}	
	}

?>