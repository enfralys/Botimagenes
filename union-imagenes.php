<?php 
//Esto es el texto que vamos a sacar en formato de imágen 
$string = "850"; 
$font = "./arial.ttf";
//Tamaño de la imágen 
$im = imagecreatefromjpeg("./image.jpg"); 

$im2 = imagecreatefromjpeg("./Producto.jpg");
   $ximagen = imagesx($im2);
    $yimagen = imagesy($im2);





$bg = imagecolorallocate($im, 190, 42,13); 
$textcolor = imagecolorallocate($im, 14, 105, 182); 

//Ubicación del texto (Por defecto puse en el medio) 
imagestring($im,2000, 1000, 430, $string, $textcolor); 
imagecopy($im, $im2, 300, 250 ,0 , 0, $ximagen,$yimagen);
//Mostrar imágen 
header("Content-type: image/png"); 
imagepng($im); 
?> 


