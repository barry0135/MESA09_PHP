
<?php
   include_once 'sql.php';
   include_once 'Product.php';

   if (isset($_REQUEST['idelid'])){
       $delid =$_REQUEST['idelid'];
       $sql="delete from product where id={$delid}";
       $mysqli->query($sql);
   }

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
        <th>delete</th>

    </tr>
    <?php

    while($product=$result->fetch_boject('Product')){
        echo '<tr>';
        echo"<td>{$product->id}</td>";
        echo"<td>{$product->pname}</td>";
        echo"<td>{$product->price}</td>";
        echo"<td>{$product->qty}</td>";
        echo"<td><a href='mytest1.php'
                   onclick='return confirmDelete'>Delete</td>";
        echo'</tr>';
    }







    ?>






</table>>