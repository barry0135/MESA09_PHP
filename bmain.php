
<?php
   include_once 'sql.php';
   include_once 'Product';

   $sql = 'select *from product';
   $reault=$mysqli->query($sql);

?>




<a href="addProduct.php">Add New</a>
<hr/>
Product List:<br>
<table border="1" width="100%">
    <tr>
        <th>pid</th>
        <th>pname</th>
        <th>price</th>
        <th>qty</th>

    </tr>
    <?php

    while($product=$result->fetch_boject('Product')){
        echo '<tr>';
        echo"<td>{$product->id}</td>";
        echo"<td>{$product->pname}</td>";
        echo"<td>{$product->price}</td>";
        echo"<td>{$product->qty}</td>";
        echo'</tr>';
    }







    ?>






</table>>