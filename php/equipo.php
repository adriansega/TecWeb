<?php
include_once "conexion.php";
$sql = "SELECT * FROM monitores";
$resultado = mysqli_query($con,$sql);
?>
<table border=0 style="text-align:center">
<?php
while($rows=mysqli_fetch_array($resultado)){ 
    $image=$rows['imagenMonitor'];
?>
<tr>
    <td>
        <br/><strong> <?php echo utf8_encode($rows['nombreMonitor']); ?> </strong>
        <br/><br/>
        <img src="php/<?php echo $image;?>" />
    </td>
    <td> &nbsp;&nbsp;&nbsp;</td>
    <td>
        <br/><br/><br/>
        <?php echo utf8_encode($rows["descripcionMonitor"]); ?>
    </td>
</tr>

<?php } ?>
</table>
<br /><br />
