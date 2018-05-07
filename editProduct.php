<?php
include_once 'sql.php';
include_once 'editProduct.php';
if (isset ($_REQUEST['editid'])){
    $editid = $_REQUEST['editid'];
    $sql =  $_REQUEST['price'];
    $qty= $_REQUEST['qty'];

    $sql="insert into product(`pname`, `price`,`qty`,)".
        "values('{$pname}',$price,$qty)";
    $mysqli->query($sql);
}
?>
<form>
    <input type="hidden" name="id" value="<?php echo $product->id;"?>
    Pname:<input name="panme"/><br/>
    Price: <input type="number" name="price"/><br/>
    Qty.:<input type="number" name="qty"/><br/>
    <input type="submit" value="Add"/>



</form>