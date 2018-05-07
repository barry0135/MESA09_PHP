<?php

$mysqli= new mysqli('127.0.0.1','root','root','iii');
//mysqli::set_charset ( "utf8");

mysqli_set_charset ( $mysqli , "utf8" );

//$sql1 ='insert into cust (cname,tel,birthday) values("qqq","34567","2000-02-09")';
$sql2 ='delete from cust where id =1';

///$sql3 ='update';
$command='insert into cust values(1,\'ba\',\'123\',\'1998-09-09\')';
$mysqli->query($command);
//$sql4 ='select * from cust';
if($result=$mysqli->query($sql2)){
    echo 'OK';

}else{
    echo 'XX';
}
