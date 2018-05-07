<?php
echo "1~1000的質數：";
echo "<div style=\"width:800px\">";
for ($i = 2; $i <= 1000; $i++)
{
    $k = 1;
    for ($j = 2; $j < $i ; $j++)
    {
        if ($i % $j == 0)
        {
            $k = 0;
            break;
        }
    }
    if ($k == 1)
    {
        $c++;    /*count計算質數個數*/
        echo "<span style=\"width:50px;text-align:right\">$i</span>" ;

    }
}
echo "</div>";
echo "共 $c 個";
?>