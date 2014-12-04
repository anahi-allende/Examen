<?php
/**
 * Created by PhpStorm.
 * User: VanKryz
 * Date: 27/10/14
 * Time: 08:03 PM
 */

$juego02 = new Juego();

?>

<html>
<head>
    <meta charset="utf-8">
</head>
<body><center>
    <h1><?=$titulo ?></h1>
    <p><?=$contenido?></p>
    <p><?//=$nombre?></p>

    <?php
    $juego02->setJuego();
    $juego02->getJuego();
    //$juego02->consultaGeneral();
    ?>
</center>
<!--<br> <a href=index.php?url=home>home</a>
<br> <a href=index.php?url=about>about</a>-->
</body>
</html>