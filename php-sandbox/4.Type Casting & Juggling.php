<?php
$num1 = 10;
$num2 = 20;
$num3 = 'Mango';
$num4 = '24';
$bool1 = true;
$bool2 = false;
$null = null;
//implicit type conversion
$result = $num1 + $num2;  // int
// $result = $num2 + $num3; //error
$result = $num2 + $num4; //int [string to int]
$result = $num2 + $bool1; //int [bool to int]
$result = $num2 + $null; //int [null to int]

//explicit type conversion


$result = (string)$num1;
$result = (int)$num4;
$result = (bool)$num1; // if num=0 then it will be false
var_dump($result);
