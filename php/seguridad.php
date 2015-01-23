<?php
//Inicio la sesion 
session_start();   
//compruebo que el usuario este autentificado   
if($_SESSION['login']=='nuria')  
{  
 header("Location: administracion.html");
 exit;  
}
?>
