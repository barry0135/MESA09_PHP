<?php
if(isset($_GET['number'])) {
    $showNumber=$_GET['number'];
    for ($i = 0; $i < ($showNumber/10); $i++) {
        echo "<tr>";
        for ($j = 1; $j <= 10; $j++) {
            $showChar = $i * 10 + $j;
            $primeResult = primeNumberCheck($showChar);
            if ($primeResult) {
                //primeNumber
                echo "<td style=\"width:45px; background-color:red;font-size:30px;\" align=\"center\">$showChar</td>";
            } else {
                echo "<td style=\"width:45px; background-color:green;font-size:30px;\" align=\"center\">$showChar</td>";
            }
        }
        echo "</tr>";
    }
}
?>