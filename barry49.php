<?php
$src = imagecreatefromjpeg("1.jpg");
$dst = imagecreatetruecolor(100,100);
$src_w=imagesx($src);$src_h=imagesy($src);

if($src_w<$src_h){
    $dst_h=100;
    $dst_w=$src_w*100/$src_h;

    $dst_y=0;
    $dst_x=100/2-$dst_w/2;
}else{
    $dst_w=100;
    $dst_h=$src_h*100/$src_w;

    $dst_x=0;
    $dst_y=100/2-$dst_h/2;
}
imagecopyresized($dst,$src,
    0,0,
    0,0,
    $dst_w,$dst_h,
    $src_w,$src_h);


//header("content-type:image/jpeg");
imagejpeg($dst);
ImageDestroy($src);
ImageDestroy($dst);