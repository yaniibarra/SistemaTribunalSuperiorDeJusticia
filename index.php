<?php 
session_start();


?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  
  
  
      <link rel="stylesheet" href="style.css">

  
</head>

<body>
  <html lang="en-US">
<head>
  <meta charset="utf-8">
    <title>Login</title>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700">

</head>

        <div class="logo">
	        <img src="judicial.png" alingn="center" height="150" />
       </div>
    
    
    
    <div id="login">
      
      <form name='form-login' method="POST" action="php/Loguear.php">
       
        <span class="fontawesome-user"></span>
          <input type="text" name="user" id="user" placeholder="Usuario">
       
        <span class="fontawesome-lock"></span>
          <input type="password" name="pass" id"pass" placeholder="Contraseña">
          
        
        <?php 
			if( isset($_SESSION['resultado'])){
				$r = $_SESSION['resultado'];
				if($r == 1){
					echo "<p style='color:red;'>Usuario no encontrado</p>";
				}
				if($r == 2){
					echo "<p style='color:red';>Contraseña incorrecta</p>";
				}
			}
		?>
        </br>
        <input type="submit" value="Login">

		</form>
  
  
</body>
</html>
