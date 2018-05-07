<?php
  if(!isset($_FILES['upload'])) die("Server busy");

  $upload=$_FILES['upload'];
  foreach ($upload as $k =>$v){
      echo"{$k}:{$v}";
 }


if ($upload['error']==0){
    copy($upload['tmp_name'],"test3/barry.pdf");
}