<?php
// $a1[0]=123;
// $a1[1]=12.3;
// $a1[2]='brad';
//  var_dump($a1);

//  echo '<hr>';
//
//    $a2[0]=123;
//    $a2[1]=12.3;
//    $a2[4]='brad';
////    var_dump($a2);
//
//    foreach ($a2 as $key=>$a){
//        echo "{$key}:{$a}<br>";
//    }

$a3['name']='brad';
$a3['weight']='45';
$a3['gender']=true;
$a3['age']=53;
$a3[123]=456;

foreach ($a3 as $b=>$a){
    echo"{$b}:{$a}<br>";
}