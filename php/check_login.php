<?php
include_once "conexion.php";
	
	$login=$_POST['login']; 
	$password=$_POST['password']; 
	$con = mysqli_connect("localhost","admin","1234");
	mysqli_select_db($con, "afim21")or die("No se tienen permisos");
	$sql = "SELECT * FROM administradores WHERE login = '$login' and password = '$password'";
	$result = mysqli_query($con,$sql);
	$count= mysqli_num_rows($result);
	
	if($count==1){	
	echo "Su usario es correcto";
	}else{
	echo "Su usuaridghsghso es incorrecto, intente nuevamente";
	}
?>