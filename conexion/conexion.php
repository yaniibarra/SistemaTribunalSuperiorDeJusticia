<?php 

ini_set('mssql.charset', 'UTF-8');
/*  

$server="172.16.20.96"; //IP DEL SERVIDOR SQL
$user="sa"; //USUARIO
$password="duda1234"; //CONTRASEÑA
$database="Licencia"; //BASE DE DATOS

*/

$server="YANI_LPI"; //IP DEL SERVIDOR SQL
$user="sa"; //USUARIO
$password="duda1234"; //CONTRASEÑA
$database="Licencia"; //BASE DE DATOS

$conn = odbc_connect("Driver={SQL Server Native Client 10.0}; Server=$server;Database=$database; Client_CSet=UTF-8; Server_CSet=WINDOWS-1251", $user, $password); //CONEXION A LA BASE DE DATOS


if ($conn){
	
	//echo 'se conecto';
	
	}else{
		
		//echo "<script>alert('se conecto')</script>";
		
		}

?>