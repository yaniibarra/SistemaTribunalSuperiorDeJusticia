<?php
include("../conexion/conexion.php");
$consulta = "INSERT INTO Login(usuario, pass) VALUES ('ximena','1234')";
$resu = odbc_exec($conn,$consulta);
$nro= odbc_num_rows($resu);

/*include("../conexion/conexion.php");
$consulta = "INSERT INTO LOGIN(usuario,pass) VALUES ('ximena','1234')";
$resu = odbc_exec($conn,$consulta);
$nro = odbc_num_rows($resu);*/

?>