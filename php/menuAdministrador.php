<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php 
$ruta ="http://$_SERVER[HTTP_HOST]/";
if(isset($_SESSION['usuario'])){?>
    <div id="menu">
        <ul>
         <?php
         $uri=$_SERVER['REQUEST_URI'];
         if (substr($uri,0,5)=="/php/") 
             echo '<li><a href="'.$ruta.'">Ir a inicio</a></li>';
         ?>
        <li><a href="<?php echo $ruta;?>php/juegos.php">Juegos</a></li>
        <li><a href="<?php echo $ruta;?>php/monitores.php">Monitores</a></li>
        <li><a href="<?php echo $ruta;?>comentarios.php">Dropbox</a></li>
        <li><a href="<?php echo $ruta;?>php/cerrar_sesion.php">Salir</a></li>
        </ul>
    </div>
<?php	
}?>	

<style type="text/css">
a {
    text-decoration:none;
  text-align:center;
}
#menu {
    background: #444444;
    height: 40px;
    color: #eee;
    -moz-border-radius-bottomright: 10px;
    -moz-border-radius-bottomleft: 10px;
    -webkit-border-bottom-right-radius: 10px;
    -webkit-border-bottom-left-radius: 10px;
    font-size: 12px;
}
#menu ul  {
    text-align:center;
    margin:auto;
}
#menu ul li {
  font-size:14px;
  display:inline;
    line-height: 40px;
    margin-right: 40px;

}
#menu ul li:hover {
    border-bottom: 3px solid #FF7400;
     -webkit-transition:border-bottom 0.3s linear;
     -moz-transition:border-bottom 0.3s linear;
     -o-transition:border-bottom 0.3s linear;
     transition:border-bottom 0.3s linear;
}

#menu ul li a {
    color: #eee;
}
</style>
