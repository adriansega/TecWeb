<?php
include_once "conexion.php";
	
	//recuperar balores
	$login=$_POST['login']; 
	$password=$_POST['password']; 
	//conectar base de datos
	$con = mysqli_connect("localhost","admin","1234");
	mysqli_select_db($con, "afim21")or die("No se tienen permisos");
	//consulta
	$sql = "SELECT * FROM administradores WHERE login = '$login' and password = '$password' ";
	$result = mysqli_query($con,$sql);
	$count= mysqli_num_rows($result);
	//interpretar resultado
	if($count==1){	
	echo "Su usario es correcto. ";
	echo "<a href='http://localhost/TecWeb/administracion.html'>Continuar</a>";
	}else{
	echo "Su usuario es incorrecto, intente nuevamente. ";
	echo "<a href='http://localhost/TecWeb/php/inicio_sesion.php'>VOLVER</a>";
	}
?>