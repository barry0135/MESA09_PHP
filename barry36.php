<?php
  $fp = @opendir("/dir1");
  while ($file=readdir($fp)){
      if (is_dir("test/{$file}")){
          echo '[]dir';
      }else if(is_file("test1/{$file}")){
          echo '[file]';
      }
      echo $file . ':'.filesize("test1/{$file}").
          ":".
  }
  closedir($fp);