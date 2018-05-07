<?php
$isLoap='';
if (isset($_GET['year'])){

    $year = $_GET['year'];
    echo "111";
    if ($year % 4 ==0) {
        //yes
        if ($year %100 ==0){
            //no
             if($year %400==0){
              //yes
                $isLoap=true;
             }else{
                 //no
                $isLoap=false;
                }
        }else{
            //yes
                $isLoap=true;
        }
    }else{
        //not
        $isLoap=false;
    }
}
?>


<form>

    輸入年:<input type="number" name="year" value="<?php if(isset($year)){echo $year;} ?>"/>
    <input type="submit" value="判斷閏年"/>
    <?php
    if ($isLeap !==''){
        echo($isLeap?"閏年":"平年");
    }
    ?>
</form>
