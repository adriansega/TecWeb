<?php

		session_start();
		include_once "conexion.php";
		
		if(isset($_POST['anadir'])){
			//obtenemos los valores de anadirJuego.html
			
			$nombreJuego= mysqli_real_escape_string($con,$_POST['nombreJuego']);
			$descripcion= mysqli_real_escape_string($con,$_POST['descripcionJuego']);
			$imagen=mysqli_real_escape_string($con,$_POST['imagen']);
			$unidades=mysqli_real_escape_string($con,$_POST['unidades']);
			
			if($nombreJuego==null or $descripcion==null){
				echo "Por favor rellene los campos obligatorios *";
			}else{
					mysqli_select_db($con, "afim21")or die("No se tienen permisos");
					$sql = "INSERT INTO `juegos` (`nombreJuego`, `descripcionJuego`, `imagenJuego`, `unidades`) VALUES ('$nombreJuego', '$descripcion', '$imagen', '$unidades') ";
					mysqli_query($con, $sql);
					echo 'juego añadido correctamente';
					echo "<br>";
				}

			
		}
		include_once "cerrar_conexion.php";	
		echo "<a href='/TecWeb/juegos.html'>VOLVER</a>";
?>
