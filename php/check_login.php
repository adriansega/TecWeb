<?php
include_once "conexion.php";
session_start();
//recuperar balores
$login=$_POST['login']; 
$password=$_POST['password']; 

//consulta
$sql = "SELECT * FROM administradores WHERE login = '$login' and password = '$password' ";
$result = mysqli_query($con,$sql);
$count= mysqli_num_rows($result);

//interpretar resultado
if($count==1){	
    $_SESSION['usuario']=$login;  
    header('Location: ../');
}else{
    echo "Su usuario es incorrecto, intente nuevamente. ";
    echo "<a href='./inicio_sesion.php'>VOLVER</a>";
}
?>
