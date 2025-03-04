<?php

$firstName = 'akhil';
$secondName = 'u s';
$fullName = $firstName . ' ' . $secondName;


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p><?= $fullName ?></p>
    <p><?= 'hello my name is ' . $fullName . '<br>' ?></p>
    <p><?= "hello my name is {$fullName}" ?></p>
    <p><?= 'hello my nam is \'akhil\'' ?></p>
    <p><?= "hello my nam is \"akhil\"" ?></p>
</body>

</html>