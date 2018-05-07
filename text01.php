<?php
$n = $sum = '';
if (isset($_GET['n'])){
    $n = $_GET['n'];    // string
    $sum = 0; $i = 1;
    while ($i<=$n){
        $sum += $i;
        $i++;
    }
}
?>
<form>
    1 + 2 + ... +
    <input type="e" name="n" value="<?php echo $n; ?>"/>
    <input type="name" value="=" />
    <?php echo $sum; ?>
</form>