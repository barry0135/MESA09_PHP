<?php
class myootest {
    function m1(){
        echo 'myootest:m1()';
    }
}
class Sub1 extends myootest{
    var $x;
    function m1(){
        echo'Sub1:m1()';
    }
    function m2 (){
        echo 'Sub1:m2()';
    }
}
class Sub2 extends myootest{
    function m1(){
        echo'Sub2:m1()';
    }
    function m2 (){
        echo 'Sub2:m2()';
    }
}

abstract class Test1 {
    function m1(){echo'Test1:m1()<br>';}
    abstract function m2();

}
       ab class Test11 extends Test1{
       function m2(){
       ]

         }