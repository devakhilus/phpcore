<?php
$num1 = 50;
$num2 = 6;
//basic

$output = "$num1 + $num2 = " . $num1 + $num2;
$output = "$num1 * $num2 = " . $num1 * $num2;
$output = "$num1 - $num2 = " . $num1 - $num2;
$output = "$num1 / $num2 = " . $num1 / $num2;
$output = "$num1 % $num2 = " . $num1 % $num2;
$output = 7;
$output *= 2;
$output /= 3;

//built in functions

//rand
$output = rand(); //random number
$output = getrandmax(); //
$output = rand(6, 27);


//round
$output = round(5.78);

//ceil
$output = ceil(2.2); //round up
//floor

$output = floor(2.9); //round down
//sqrt
$output = sqrt(36);

//pi
$output = pi();

//abs
$output = abs(-4.2);
//max

$output = max(23, 3, 2, 7, 1);
$output = max([22, 13, 5, 6]);

//min
$output = min(23, 3, 2, 7, 1);
$output = min([22, 13, 5, 6]);
//numberformater

$output = number_format(1234567.123456, 2, '.', ',');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p><?= $output ?></p>
</body>

</html>