<?php


$text = $_GET["text"];
$im2 = imagecreatefromjpeg("./pro.jpg");

$im = imagecreatefromjpeg("./image.jpg");


   $ximagen = imagesx($im2);
    $yimagen = imagesy($im2);




$bg = imagecolorallocate($im, 190, 42,13); 
$textcolor = imagecolorallocate($im, 14, 105, 182); 

//Ubicación del texto (Por defecto puse en el medio) 
imagestring($im, 5, 1000, 430, $text, $textcolor); 
imagecopy($im, $im2, 100, 100 ,0 , 0, $ximagen,$yimagen);
//Mostrar imágen 
header("Content-type: image/png"); 
imagepng($im); 
?> 