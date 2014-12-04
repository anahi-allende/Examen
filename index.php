<?php
/**
 * Created by PhpStorm.
 * User: VanKryz
 * Date: 13/10/14
 * Time: 07:03 PM
 */

require 'helpers.php';
require './template/header.php';
require './template/menu.php';
include './clases/Usuario.php';
include './clases/Juego.php';
include './bd/bd.php';

if(empty($_GET['url']))
    $_GET ['url']='home';

controller($_GET['url']);