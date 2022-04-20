<?php 
session_start();
include("../conexionTDJ.php");
$user = $_POST["nombre"];
$pass =$_POST["password"];

	$sql = "SELECT * FROM Login WHERE user='". $user ."'";
	$resultado = mysqli_query($conexion,$sql);
	$fila = mysqli_fetch_assoc($resultado);//contiene los resutados obtenidos de la consulta
	$nro = mysqli_num_rows($resultado);
	
	if($nro==1){
		if($pass === $fila["pass"]){
			$_SESSION["id"] = $fila["id_usuario"];
			header("Location: ../ver_mensajes.php");
		}else{
			echo "Constraseña incorrecta";
		}
	}else{
		header("Location: ../LOGIN.php");
	}	
			
?>