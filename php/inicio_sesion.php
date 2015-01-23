<?php

session_start();
include_once "conexion.php";


?><style type="text/css">*{

    font-size: 14px;
}

body{

background:#ffffff;

}form.login {

    background: none repeat scroll 0 0 #F1F1F1;
    border: 1px solid #DDDDDD;
    font-family: sans-serif;
    margin: 0 auto;
    padding: 30px;
    width: 278px;
    box-shadow:0px 0px 20px gray;
    border-radius:10px;

}form.login div {

    margin-bottom: 15px;
    overflow: hidden;

}form.login div label {

    display: block;
    float: left;
    line-height: 25px;

}form.login div input[type="text"], form.login div input[type="password"] {

    border: 1px solid #DCDCDC;
    float: right;
    padding: 4px;

}form.login div input[type="submit"] {

    background: none repeat scroll 0 0 #DEDEDE;
    border: 1px solid #C6C6C6;
    border-radius :7;
    float: right;
    font-weight: bold;
    padding: 4px 20px;

}.error{

    color: red;
    font-weight: bold;
    margin: 10px;
    text-align: center;

}

</style>

 

<form name="form" action="check_login.php" method="post" class="login">

    <div><label>Usuario</label><input name="login" type="text" id="login" ></div>
    <div><label>Contrasena</label><input name="password" type="password" id="password"></div>
    <div><input name="inicio" type="submit" value="Entrar"></div>

</form>