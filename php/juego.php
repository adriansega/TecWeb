<?php

include_once "conexion.php";
													
$sql = "SELECT * FROM `juegos` WHERE 1";
$resultado = mysqli_query($con,$sql);

echo "<table border = '0' style=".'"'."text-align:".'center'.'"'."> \n";
echo "<tr><td> Nombre </td><td> </td><td> Descripcion </td></tr> \n"; 
while($rows=mysqli_fetch_array($resultado)){ 
$image=$rows['imagenJuego'];
echo "<tr><td><br/>".utf8_encode($rows['nombreJuego'])."<br/><br/>".'<img src="'.$image.'"'.'/>'."</td><td>     
&nbsp;&nbsp;&nbsp;</td><td><br/><br/><br/>".utf8_encode($rows["descripcionJuego"]);"</td></tr>"; 
} 
echo "</table>";
echo"<br /><br />";
?>
