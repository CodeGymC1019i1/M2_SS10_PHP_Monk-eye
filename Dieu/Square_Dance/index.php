<?php
include_once "Dancer.php";
include_once "SquareDanceManager.php";

const MALE = 'male';
const FEMALE = 'female';

$squareDance = new SquareDanceManager();

$dancer1 = new Dancer('Dieu',MALE);
$squareDance->add($dancer1);
$dancer2 = new Dancer('Hai',MALE);
$squareDance->add($dancer2);
$dancer3 = new Dancer('Long',MALE);
$squareDance->add($dancer3);
$dancer4 = new Dancer('An',MALE);
$squareDance->add($dancer4);
$dancer5 = new Dancer('Mai',FEMALE);
$squareDance->add($dancer5);
$dancer6 = new Dancer('Thuy',FEMALE);
$squareDance->add($dancer6);
$dancer7 = new Dancer('Hang',FEMALE);
$squareDance->add($dancer7);

echo $squareDance->creatMultiCouple();
$dancer8 = new Dancer('Hoa',FEMALE);
$squareDance->add($dancer8);
$dancer9 = new Dancer('Kieu',FEMALE);
$squareDance->add($dancer9);
$dancer10 = new Dancer('Nga',FEMALE);
$squareDance->add($dancer10);
echo $squareDance->creatMultiCouple();



