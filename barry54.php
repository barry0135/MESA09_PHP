<?php
include_once 'myootest.php';
 include_once 'bike.php';
$root=new myootest();
$sub1=new Sub1();
$sub2=new Sub2();

doM2($sub1);
doM2($root);
echo'<hr>';
$sub11=new Sub1();
$sub12=new Sub1();
$sub11->x = 12;$sub12->x=34;
echo "{$sub11->x}:{$sub12->x}";
$sub13=clone $sub12;
$sub12=$sub1;
echo"{$sub11->x}:{$sub12->x}:{$sub13->x}<br>";
$sub12->x=56;
echo"{$sub11->x}:{$sub12->x}:{$sub13->x}<br>";
echo'<hr>';



//$test1 = newv Test11();
$test11 = newv Test11();
$test12 = newv Test12();


function doM2(myootest $obj){
    if($obj instanceof Sub2){
        echo'iam sub1<br>';
    }else if ($obj instanceof Sub2){
        echo 'iamsub2<br>';
    }else if ($obj instanceof  myootest){
        echo 'iamootest<br>';
    }
    $obj->m2();
}