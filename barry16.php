<?php
    $p=array(1=>0,0,0,0,0);
    for ($i=0;$i<10000; $i++){
        $point = rand(1,9);
        $p[$point>=7?$point-3:$point]++;
    }
    for ($i =1; $i<=6; $i++){
        echo"{$i}點{$p[$i]}次<br>";
    }

    for($i=1;$i<=count($p);$i++){
        echo"{$i}ㄍ{$p[$i]}";
    }


        echo'<hr>';
        foreach ($p as $key =>$value){
        echo "{$key}:{$value}<br>";
        }
