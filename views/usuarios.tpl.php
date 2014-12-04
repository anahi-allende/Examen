<?php
$usuario02 = new Usuario();

?>

<html>
<head>
    <meta charset="utf-8">
</head>
<body><center>
<h1><?=$titulo ?></h1>
<p><?=$contenido?></p>
<p><?=$nombre?></p>

<?php
$usuario02->setUsuario();
$usuario02->getUsuario();
$usuario02->consultaGeneral();
?>
</center>>
<!--<br> <a href=index.php?url=home>home</a>
<br> <a href=index.php?url=about>about</a>-->
</body>
</html>