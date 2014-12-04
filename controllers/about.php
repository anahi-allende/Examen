<?php
/**
 * Created by PhpStorm.
 * User: VanKryz
 * Date: 13/10/14
 * Time: 07:50 PM
 */

$titulo = 'Bienvenidos al About';
$contenido ='........Contenido.........';

$variables = array ('titulo'=>$titulo,'contenido'=>$contenido);

view('about', $variables);