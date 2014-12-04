<?php
/**
 * Created by PhpStorm.
 * User: VanKryz
 * Date: 20/10/14
 * Time: 07:22 PM
 */
require 'helpers.php';
require './template/menulogin.php';
//require './template/menu.php';
include './clases/Usuario.php';
include './bd/bd.php';

$usuario=$_POST['user'];
$pass=$_POST['pass'];
$cadena = addslashes($usuario);


//echo"$usuario<br>$pass";

if($cadena=="" or $pass=="")
{
    $msg="Favor de introducir usuario y password";
    //print"<meta http-equiv='refresh' content='0; url=login.php?msg=$msg'>";
}
$sql="SELECT * 	FROM usuario WHERE Usuario='$cadena' and Contrasena='$pass'";
//echo"$sql";
$consulta=mysql_query($sql)or die("<p class='el'>Error consulta</p>");
$cuantos=mysql_num_rows($consulta);

if($cuantos<>0)
{
    print"<meta http-equiv='refresh' content='0;url=index.php'>";
    //print"<meta http-equiv='refresh' content='0; url=login.php?msg=$msg'>";
}
else{
    echo"<center>Error de Login<br>
    <a href='login.php'>Regresar</a></center>
    ";

}






