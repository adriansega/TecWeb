<?php
//Inicio la sesion 
session_start();   
//compruebo que el usuario este autentificado  
if(!isset($_SESSION['usuario']))  
{  
 header("Location: afim21.html");  
}else{
	$id=$_SESSION['usuario'];
}
?>
