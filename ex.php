<?php


for ($i = 2; $i <= 1000; $i++)
{
    $primeNumberCheck = 1;
    for ($j = 2; $j < $i ; $j++)
    {
        if ($i % $j == 0)
        {
            $primeNumberCheck = 0;
            break;
        }
    }
    if ($primeNumberCheck == 1)
    {
//        $c++;    /*count計算質數個數*/
        echo "<span style=\"width:50px;text-align:right\">$i</span>" ;

    }
}


?>