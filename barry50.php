<?php
include_once 'bike.php';

$barry=new people();
$barry->setbkie();
echo $barry->bike->getspeed();

$you = new people();
$you->setbike();
$you->bike->upspeed();
$you->bike->upspeed();
$you->bike->upspeed();
echo $ypu->bike->getspeed();

