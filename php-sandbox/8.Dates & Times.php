<?php
$output = null;
//year
$output = date('Y');
//month
$output = date('m');
$output = date('l');
$output = date('D');
//month -day- year
$output = date('Y-m-d');
$output = date('d-m-y');
//hour

$output = date('h');
//min
$output = date('i');
//sec

$output = date('s');

//am/pm
$output = date('a');

//date & time

$output = date('Y-m-d h:i:a');
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