<?php
$passwd='123456';
$newpassword = password_hash($passwd,PASSWORD_DEFAULT);
echo $passwd . '<br>';
echo $newpassword . '<br>';
if(password_verify(''))