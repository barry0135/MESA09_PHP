<?php
include_once  'myootest3.php';
include_once  'myootest4.php';

//$obj1 = new \tw\barry\utils\test1();
//$obj1->m1();
//echo '<hr>';
//$obj2 = new \tw\barry\utils\test1();
//$obj2->m1();
//echo '<hr>';


 use tw\barry\utils\test1;
use tw\barry\utils\test1 as test2;
use function tw\barry\utils\sayya;

 $obj3 = new test1();
 $obj3->m1();
echo '<hr>';
  $obj4 =new test2();
  $obj4->m1();