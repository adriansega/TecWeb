<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head></head>
<body>
<?php 
	session_start();
	if(isset($_SESSION['usuario'])){?>
		<div id="menu">
        <ul>
            <li><a href="index.php">Juegos</a></li>
            <li><a href="php/monitores.php">Monitores</a></li>
            <li><a href="comentarios.php">Dropbox</a></li>
            <li><a href="php/cerrar_sesion.php">Salir</a></li>
        </ul>
    </div>
	<?php	
	}?>	
</body>
</html>

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
