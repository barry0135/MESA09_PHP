<?php
interface Shape{
    function calLength();
    function calArea();
}
class Rectangle implements Shape{
    function calLength(){
        echo'Rectangle:calLength()';
    }
    function calArea(){
        echo'Rectangle:ccalArea()';
    }

}
class Triangle implements Shape{
    function calLength(){
        echo'Triangle:calLength()';
    }
    function calArea(){
        echo'Triangle:calArea()';
    }

}


trait Test1{
    function m1(){
        echo'Test1:m1();';
    }
}
trait Test2{
    function m2(){
        echo'Test2:m2()';

    }
    function m3(){
        echo'Test2:m3()';
}

class Test3{
    use Test1;
    use Test2;



}