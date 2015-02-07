<?php
?>	
<link href="css/paginacion.css" type="text/css" rel="stylesheet">	
<?php
include_once "conexion.php";			
$sql = "SELECT * FROM `juegos` WHERE 1";
$resultado = mysqli_query($con,$sql);
//Comprobamos si se ha ehcho click en la p�gina
if(isset($_GET['page']))
{
    $page= $_GET['page'];
}
else
{
    //Si no, nos encontramos en la primera p�gina
    $page=1;
}
//Comprobamos cu�ntos registros devuelve la consulta
$num_rows=mysqli_num_rows($resultado);
//Indicamos el n�mero m�ximo de registros a mostrar por p�gina
$rows_per_page= 7;
//Calculamos la �ltima p�gina
$lastpage= ceil($num_rows / $rows_per_page);
//Comprobamos si el valor de la p�gina es correcto y si nos encontramos en la �ltima p�gina
$page=(int)$page;

if($page > $lastpage)
{
    $page= $lastpage;
}
 
if($page < 1)
{
    $page=1;
}
//Creamos el l�mite 
$limit= 'LIMIT '. ($page -1) * $rows_per_page . ',' .$rows_per_page;
//A�adimos el l�mite a la consulta realizada anteriormente y se realiza la consulta
$sql.=" $limit";
$peliculas=mysqli_query($con,$sql);
if(!$peliculas){
        //SI FALLA LA CONSULTA MUESTRO ERROR
        die('Invalid query: ' . mysql_error());
}else{
		//Si la consulta es correcta se muestran los datos
		echo "<table border = '0' style=".'"'."text-align:".'center'.'"'."> \n";
		while($rows=mysqli_fetch_assoc($peliculas)){ 
			$image=$rows['imagenJuego'];
			echo "<tr><td><br/><strong>".utf8_encode($rows['nombreJuego'])."</strong><br/><br/>".'<img src="php/'.$image.'"'.'/>'."</td><td>     
			&nbsp;&nbsp;&nbsp;</td><td><br/><br/><br/>".utf8_encode($rows["descripcionJuego"]);"</td></tr>"; 
		} 
		echo "</table>";
		echo"<br /><br />";
}		

if($num_rows != 0)
    {
       $nextpage= $page +1;
       $prevpage= $page -1;
     
       ?><ul id="pagination-clean"><?php
           //SI ES LA PRIMERA P�GINA DESHABILITO EL BOTON DE PREVIOUS, MUESTRO EL 1 COMO ACTIVO Y MUESTRO EL RESTO DE P�GINAS
           if ($page == 1) 
           {
            ?>
              <li class="previous-off">&laquo; Anterior</li>
              <li class="active">1</li> 
         <?php
              for($i= $page+1; $i<= $lastpage ; $i++)
              {?>
                <li><a href="juegos.html?page=<?php echo $i;?>"><?php echo $i;?></a></li>
        <?php }
           
           //Y SI LA ULTIMA P�GINA ES MAYOR QUE LA ACTUAL MUESTRO EL BOTON NEXT O LO DESHABILITO
            if($lastpage >$page )
            {?>      
                <li class="next"><a href="juegos.html?page=<?php echo $nextpage;?>" >Siguiente &raquo;</a></li><?php
            }
            else
            {?>
                <li class="next-off">Siguiente &raquo;</li>
        <?php
            }
        } 
		else
        {
     
            //EN CAMBIO SI NO ESTAMOS EN LA P�GINA UNO HABILITO EL BOTON DE PREVIUS Y MUESTRO LAS DEM�S
        ?>
            <li class="previous"><a href="juegos.html?page=<?php echo $prevpage;?>">&laquo; Anterior</a></li><?php
             for($i= 1; $i<= $lastpage ; $i++)
             {
                           //COMPRUEBO SI ES LA P�GINA ACTIVA O NO
                if($page == $i)
                {
            ?>       <li class="active"><?php echo $i;?></li><?php
                }
                else
                {
            ?>       <li><a href="juegos.html?page=<?php echo $i;?>" ><?php echo $i;?></a></li><?php
                }
            }
             //Y SI NO ES LA �LTIMA P�GINA ACTIVO EL BOTON NEXT     
            if($lastpage >$page )
            {   ?>   
                <li class="next"><a href="juegos.html?page=<?php echo $nextpage;?>">Siguiente &raquo;</a></li><?php
            }
            else
            {
        ?>       <li class="next-off">Siguiente &raquo;</li><?php
            }
        }     
    ?></ul></div><?php
    } 
	

?>
<br /><br />
