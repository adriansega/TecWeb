<?php

include_once "conexion.php";
													
$sql = "SELECT * FROM `monitores` WHERE 1";
$resultado = mysqli_query($con,$sql);
echo "<table border = '0' style=".'"'."text-align:".'center'.'"'."> \n";
while($rows=mysqli_fetch_array($resultado)){ 
$image=$rows['imagenMonitor'];
echo "<tr><td><br/><strong>".utf8_encode($rows['nombreMonitor'])."</strong><br/><br/>".'<img src="'.$image.'"'.'/>'."</td><td>     
&nbsp;&nbsp;&nbsp;</td><td><br/><br/><br/>".utf8_encode($rows["descripcionMonitor"]);"</td></tr>"; 
} 
echo "</table>";
echo"<br /><br />";
?>
