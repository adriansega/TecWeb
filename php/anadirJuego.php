<?php

		session_start();
		include_once "conexion.php";
		
		if(isset($_POST['anadir'])){
			//obtenemos los valores de anadirJuego.html
			
			$nombreJuego= mysqli_real_escape_string($con,$_POST['nombreJuego']);
			$descripcion= mysqli_real_escape_string($con,$_POST['descripcion']);
			$imagen=mysqli_real_escape_string($con,$_POST['imagen']);
			$unidades=mysqli_real_escape_string($con,$_POST['unidades']);
			
			if($nombreJuego==null or $descripcion==null){
				echo "Por favor rellene los campos obligatorios *";
			}else{
				//comprobamos que el nombre y apellidos estan/no estan en la BD
				$sql = mysqli_query($con, "SELECT * FROM juegos WHERE nombreJuego = '$nombre'");
				
				$contar = mysqli_num_rows($sql);
				
				if($contar>0){			
					
				}else{
					$sql = "INSERT INTO Juegos ('nombreJuego', 'descripcion', 'imagenJuego', 'unidades') VALUES ('$nombreJuego', '$descripcion', '$imagen', '$unidades') ";
					mysqli_query($con, $sql);
					echo 'juego añadido correctamente';
					echo "<br>";
				}

			}
		}
		include_once "cerrar_conexion.php";	
		echo "<a href='http://localhost/TecWeb/php/juego.php'>VOLVER</a>";
?>
