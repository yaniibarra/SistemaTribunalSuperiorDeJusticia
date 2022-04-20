	 <!DOCTYPE html>
<html>
<head>
<title>LOGIN</title>
<meta charset="utf-8">
<link rel="stylesheet" href="">

<style>

form {

width:1140px;
height:800%;
background:rgba(204,204,204,1);
border:10px solid #000;
padding:110px;
margin: 0px 0px -10px -10px;
	font-size:18px;
	border-radius:5px;
	text-align:center;
	float-align:center;
}

input[type='submit'] {
width:150px;
height:100px;
color rgba(0,204,0,1);  
font-size:15px;
font-weight:normal;
border:none;
border-radius:8px;

}

.formRow {
display:inline-block;
width:600px;
padding:10px;
width:px;
height:30px;
color:#000000;
font-size:20px;
font-weight: normal;
border:none;
border-radius:8px;

}

.formRow1 {display:inline-block;
width:500px;
padding:10px;
width:150px;
height:30px;
color:#000000;
font-size:20px;
font-weight: normal;
border:none;
border-radius:8px;
}

.botones input[type='submit']{
	
	margin-top:5%;
	
	width:100px;
	height:30px;
	color:#FFF ;
	background-color:#000000;
	font-size:15px;
	font-weight:bold;
	border: none;
	border-radius:5px;
	}
    
</style>

<body>

<div class="centro">
   
<header></header>
<nav></nav>
<section>

<form action="php/conexionTDJ.php" method="POST" id="formulario" name="formulario"> 

 
 <div class="logo">
	        <img src="Durango.png" height="200" />
       </div>

	   
	   
	   
	   
	   
<div class="formRow">
            <label for="usuario">Usuario:</label>
          <span class="formRow1">
            <input type="text" name="nombre" id="nombre" required />
        </span></div><br>
        
        <div class="formRow">
            <label for="password">Contraseña:</label>
           

		   <input type="password" name="password" id="password" required /><br>


		   </div>
        
        <div class="botones">
    
        <td><input id="cancelar" type="submit" value="Cancelar" /> <input id="aceptar" type="submit" value="Aceptar"/></td>  
        </div>
        
       
        </div><!-- CIERRA div centro -->  
        
       </form>

</section>
<aside></aside>
<footer></footer>
</body>

</head>
</html>