<?php
include_once "conexion.php";
	
	//recuperar balores
	$login=$_POST['login']; 
	$password=$_POST['password']; 

	//consulta
	$sql = "SELECT * FROM administradores WHERE login = '$login' and password = '$password' ";
	$result = mysqli_query($con,$sql);
	$count= mysqli_num_rows($result);
	//interpretar resultado
	if($count==1){	
	session_start();
	echo "Su usario es correcto.";
	echo "<a href='/Pagina_AFIM/administracion.html'>Continuar</a>";
	}else{
	echo "Su usuario es incorrecto, intente nuevamente. ";
	echo "<a href='http://localhost/Pagina_AFIM/php/inicio_sesion.php'>VOLVER</a>";
	}
?>