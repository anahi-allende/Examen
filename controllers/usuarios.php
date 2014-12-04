<meta charset="utf-8">
<?php
/**
 * Created by PhpStorm.
 * User: VanKryz
 * Date: 13/10/14
 * Time: 08:32 PM
 */


$usuario = new Usuario();

$titulo = 'Bienvenidos al Menu de Usuarios';
$contenido ='........Contenido del Menu Usuarios.........';

$variables = array ('titulo'=>$titulo,'contenido'=>$contenido, 'nombre'=>$usuario->setUsuario());

view('usuarios', $variables);