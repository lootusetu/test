<?php
$num1=7;
$num2=3;
$num3=7.15;
//$num4=25;
//var_dump($num1/$num2);
var_dump((int) ($num1/$num2));
//var_dump(sqrt($num4));
//
//$X='Десять негритят пошли купаться в море';
//$X = explode (" ", $X);
//echo $X[0],"\n";
//echo $X[4], "\n";
//
$X = 'десять негритят пошли купаться в море';
echo substr ($X,17,2), "\n";
echo mb_convert_case($X, MB_CASE_TITLE, 'UTF-8'), "\n";
echo strlen($X), "\n";
//
$w=true;
$w1=false;
$w2=1;
$w3=0;

if ($w==$w2){
    echo 'Right', "\n";;
} else {
    echo 'Wrong', "\n";
}

if ($w1===$w3){
    echo 'Right';
} else {
    echo 'Wrong';
//}
//
//$a='three';
//$a2='три';
//var_dump(strlen($a));
//var_dump(mb_strlen($a2));
//
//
//var_dump(strnatcasecmp($a,$a2));
//
//$v=(125*13+7);
//$v1=((223+28)*2);
//echo $v, "\n";
//echo $v1, "\n";
//var_dump(strnatcasecmp($v,$v1));
//
//$num1=7;
//$num2=3;
//
//var_dump($num1%$num2);
//
$X = 'десять негритят пошли купаться в море';
var_dump(mb_strlen($X));

$X = 'десять негритят пошли купаться в море';
echo mb_substr($X,17,1);


    $v=(125*13+7);
    $v1=(223+28*2);
    echo $v, "\n";
    echo $v1, "\n";

