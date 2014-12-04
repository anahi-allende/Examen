<?php
/**
 * Created by PhpStorm.
 * User: VanKryz
 * Date: 20/10/14
 * Time: 06:56 PM
 */
require 'helpers.php';
require './template/menulogin.php';
//require './template/menu.php';
include './clases/Usuario.php';
include './bd/bd.php';


echo"<center><form action='validar.php' method='POST' enctype='multipart/form-data>
<li><label for='usuario'>User    </label><input type='text' name='user'></li>
<br>
<li><label for='usuario'>Password    </label><input type='password' name='pass'></li>
<br>
<button class='submit' type='submit'>LogIn</button>
</form></center>";
?>