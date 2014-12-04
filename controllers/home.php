<?php
/**
 * Created by PhpStorm.
 * User: VanKryz
 * Date: 13/10/14
 * Time: 07:04 PM
 */

$titulo='Bienvenidos al Home';

$contenido='Muestra Contenido de MySQL';


$variables=array ('titulo'=> $titulo, 'contenido'=>$contenido,);

view('home',$variables);