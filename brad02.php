<?php
    if (isset($_FILES['upload'])){
        $upload = $_FILES['upload'];
        foreach ($upload as $k => $v){
            echo "{$k} : {$v}<br>";
        }
    }else{
        echo 'XX';
    }