<?php

/*ini_set('mssql.charset', 'UTF-8');
$server="172.16.20.96"; //IP DEL SERVIDOR SQL
$user="sa"; //USUARIO
$password="duda1234"; //CONTRASEÑA
$database="Licencia"; //BASE DE DATOS

$conn = odbc_connect("Driver={SQL Server Native Client 10.0}; Server=$server;Database=$database; Client_CSet=UTF-8; Server_CSet=WINDOWS-1251", $user, $password); //CONEXION A LA BASE DE DATOS
*/

include("conexion/conexion.php");
if ($conn){
	echo 'se conecto';
	}
	
	$username = $_REQUEST['numero'];
$password = $_REQUEST['contra'];

$tsql = "SELECT * FROM Login WHERE usuario='$username' AND pass='$password'";
$stmt = sqlsrv_query( $conn, $tsql, array(), array( "Scrollable" => SQLSRV_CURSOR_KEYSET ));
if($stmt == true){
    $_SESSION['valid_user'] = true;
    $_SESSION['numero'] = $username;
    header('Location: Inicio.php');
    die();
}else{
    header('Location: error.html');
    die();
}

?>

<?php


//ejemplo de consulta con odbc_exec se pueden ejecutar select, insert y update
?>
