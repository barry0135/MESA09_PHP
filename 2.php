<?php


$img=imagecreatetruecolor(400,40);

$red= imagecolorallocate($img,100,0,0);
imagefill (  $img, 255, 225 , $red);

header('Content-Type: image/jpeg');
imagejpeg($img);
imagedestroy($img);