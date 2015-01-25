<?php

	session_start();
	include_once "conexion.php";

    if(isset($_POST['modificar'])){
      //obtenemos los valores de anadirPersona
      $idMonitor=$_POST['idMonitor'];
      $nombre=$_POST['nombreMonitor'];
      $apellidos=$_POST['apellidosMonitor'];
      $descripcion=$_POST['descripcion'];
      /*$foto=$_POST['foto'];*/
      $archivo=$_FILES['imagenMonitor']['tmp_name'];
      $destino= "fotos/". $_FILES['imagenMonitor']['name'];
      
      move_uploaded_file($archivo, $destino);
      
      
       //$sql = "UPDATE monitores SET nombreMonitor='$nombre', apellidosMonitor='$apellidos', descripcion='$descripcion', imagenMonitor='$destino' WHERE idMonitor='4'";
       $sql = "UPDATE `monitores` SET `idMonitor`=`$idMonitor`,`nombreMonitor`=`$nombre`,`apellidosMonitor`=`$apellidos`,`descripcionMonitor`=`$descripcion` WHERE 'idMonitor'='$idMonitor'";
       mysqli_query($con, $sql);      
       echo 'Monitor modificado correctamente';
       echo "<br>";
              
    } 
    include_once "cerrar_conexion.php";
    echo "<a href='http://localhost/TecWeb/php/monitores.php'>VOLVER</a>";
  
  ?>