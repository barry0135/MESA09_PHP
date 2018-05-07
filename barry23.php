<?php

sayYa();sayYa();sayYa();
sayHello ("barry");
sayHellov3(3);

function sayYa(){
     echo 'Ya<br>';
 }

 function sayHello($name){
    echo"Hello,{$name}<br>";
 }
function sayHellov2($name ='word'){
    echo"Hello,{$name}<br>";
}
function sayHellov3($n,$name ='word'){
    for($i=0;$i<=$n;$i++) {
        echo "Hello,{$name}<br>";
    }
    function sayHellov4($n,$name ='word'){
        $ps=func_get_args();
        foreach (){

        }
        }

}