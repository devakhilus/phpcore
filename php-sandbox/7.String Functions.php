<?php
$output = null;
$string = 'hai this is akhil';
//strlen stringlength

$output = strlen($string);
//str_word_count

$output = str_word_count($string);

//strpos
$output = strpos($string, 'is');

//specific char by index

$output = $string[4];

//substr

$output = substr($string, 6, 4);

//str_replace

$output = str_replace('akhil', 'Amal', $string);
//strlower
$output = strtolower($string);
//strupper

$output = strtoupper($string);
//ucword

$output = ucwords($string);

//trim
//$output = '   hai working   ';
$output = trim('   hai working   ');
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