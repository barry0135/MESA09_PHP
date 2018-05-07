<?php
$img = imagecreatefromjpeg("1.jpg");

$blue=imagecolorallocate($img,0,0,255);
    imagefttext ( $img, 24 , 0 , 100 , 100 ,
        $blue , "./1.ttf" , "h" );
imagefttext ( $img, 24 , 20 , 120 , 100 ,
    $blue , "./1.ttf" , "e" );
header("content-type:image/jpeg");
imagejpeg($img);
ImageDestroy($img);