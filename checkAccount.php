<?php
 include_once 'sql.php';

 $account =$_REQUEST['account'];
 $passwd=$_REQUEST['passwd'];

 $sql="select * from member".
     "where account = '{$account}'";
 $result = $mysqli->query($sql);
 if($result->num_rows>0){
     $member=$result->fetch_object("Member");

     if(password_verify($passwd,$member->passwd)){

       header('Location:main.php');
     }else{
         header('Location:login.php');
     }
}else{
    header('Location:login.php');
     }


