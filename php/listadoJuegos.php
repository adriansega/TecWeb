<?php
?>	
<link href="css/paginacion.css" type="text/css" rel="stylesheet">	
<?php
include_once "conexion.php";			
$sql = "SELECT * FROM `juegos` WHERE 1";
$resultado = mysqli_query($con,$sql);
//Comprobamos si se ha ehcho click en la página
if(isset($_GET['page']))
{
    $page= $_GET['page'];
}
else
{
    //Si no, nos encontramos en la primera página
    $page=1;
}
//Comprobamos cuántos registros devuelve la consulta
$num_rows=mysqli_num_rows($resultado);
//Indicamos el número máximo de registros a mostrar por página
$rows_per_page= 7;
//Calculamos la última página
$lastpage= ceil($num_rows / $rows_per_page);
//Comprobamos si el valor de la página es correcto y si nos encontramos en la última página
$page=(int)$page;

if($page > $lastpage)
{
    $page= $lastpage;
}
 
if($page < 1)
{
    $page=1;
}
//Creamos el límite 
$limit= 'LIMIT '. ($page -1) * $rows_per_page . ',' .$rows_per_page;
//Añadimos el límite a la consulta realizada anteriormente y se realiza la consulta
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
           //SI ES LA PRIMERA PÁGINA DESHABILITO EL BOTON DE PREVIOUS, MUESTRO EL 1 COMO ACTIVO Y MUESTRO EL RESTO DE PÁGINAS
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
           
           //Y SI LA ULTIMA PÁGINA ES MAYOR QUE LA ACTUAL MUESTRO EL BOTON NEXT O LO DESHABILITO
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
     
            //EN CAMBIO SI NO ESTAMOS EN LA PÁGINA UNO HABILITO EL BOTON DE PREVIUS Y MUESTRO LAS DEMÁS
        ?>
            <li class="previous"><a href="juegos.html?page=<?php echo $prevpage;?>">&laquo; Anterior</a></li><?php
             for($i= 1; $i<= $lastpage ; $i++)
             {
                           //COMPRUEBO SI ES LA PÁGINA ACTIVA O NO
                if($page == $i)
                {
            ?>       <li class="active"><?php echo $i;?></li><?php
                }
                else
                {
            ?>       <li><a href="juegos.html?page=<?php echo $i;?>" ><?php echo $i;?></a></li><?php
                }
            }
             //Y SI NO ES LA ÚLTIMA PÁGINA ACTIVO EL BOTON NEXT     
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
