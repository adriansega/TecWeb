<?php

		session_start();
		include_once "conexion.php";

		
		/*if(isset($_POST['añadir'])){
			if($_POST['nombreMonitor']=='' or $_POST['apellidosMonitor']==''){
				echo 'Por favor rellene los campos obligatorios *';
			}
			else
			{
				//comprobamos que el nombre y apellidos estan/no estan en la BD
				$sql = "SELECT idMonitor FROM monitores WHERE nombreMonitor ='".$_POST['nombreMonitor']."' AND apellidos ='".$_POST['apellidosMonitor']"'";
				$rec = mysql_query($sql);
				$verificar_usuario = 0;
				//Si esta
				if(mysql_num_fields($rec) > 0) {
					//obtenemos los valores de personas*/
					$idMonitor=$_GET['idMonitor'];
					/*$nombre=$_POST['nombreMonitor'];
					$apellidos=$_POST['apellidosMonitor'];
					$descripcion=$_POST['descripcion'];
					$imagen=$_POST['imagenMonitor'];*/
					//Añade la informacion a la tabla
					$sql = "DELETE FROM monitores WHERE idMonitor='$idMonitor'";
					mysqli_query($con, $sql);

					echo 'Monitor eliminado correctamente';
					echo "<br>";

				/*
				}else{
					echo 'Este monitor no existe en la BD';
				}

			}
		}*/	
		include_once "cerrar_conexion.php";
		echo "<a href='http://localhost/Pagina_AFIM/php/monitores.php'>VOLVER</a>";;
?>