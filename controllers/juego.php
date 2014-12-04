<?php
/**
 * Created by PhpStorm.
 * User: VanKryz
 * Date: 27/10/14
 * Time: 08:02 PM
 */

$juego = new Juego();

$titulo = 'Bienvenidos al Menu de Juegos';
$contenido ='........Contenido del Menu de Juegos.........';

$variables = array ('titulo'=>$titulo,'contenido'=>$contenido, 'nombre'=>$juego->setJuego());

view('juego', $variables);