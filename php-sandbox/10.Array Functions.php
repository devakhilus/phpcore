<?php
$output = null;

$ids = [20, 17, 30, 25, 40, 15, 29];
$users = ['akhil', 'amal', 'akshaya', 'appu', 'anamika'];
//$output = count($ids);  //count the elments in an array
//$output = sort($ids); //sortimg

//$output = sort($ids);
//array_push()
array_push($ids, 200); //pushing elements to an array
array_push($users, 'Mohan');
//pop out last elmeent of an array
array_pop($users);

//remove/shift of 1 st element of an array
array_shift($ids);

//adding element to the start

array_unshift($ids, 205);
array_unshift($users, 'manu');

//slice
$id2 = array_slice($ids, 2, 4);

var_dump($id2);


//array splice

array_splice($ids, 0, 1, 77);
array_splice($ids, 1, 1, 65);

//array_sum

$output = 'sum of id array :' . array_sum($ids);

//array element search

$output = 'amal is the index' . array_search('amal', $users);

//in an array ..element there or not
$state1 = in_array('manu', $users);
if ($state1 == 1) {
    $output = 'element is there';
} else {
    $output = 'element is not there';
}
//string in to an array (explode)
$str = 'man,cap,dog';
$arraystr = explode(',', $str);
var_dump($arraystr);
//array to string 
$output = implode(', ', $users);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6 mt-6">
            <!-- Output -->
            <p class="text-xl"><?= $output ?></p>
            <h2 classs="text-xl font-semibold my-4">IDs Array</h2>
            <p>
            <pre>
                    <?= print_r($ids); ?>
            </pre>
            </p>
            <h2 classs="text-xl font-semibold my-4">Users Array</h2>
            <p>
            <pre>
                    <?= print_r($users); ?>
            </pre>
            </p>

        </div>
    </div>
</body>

</html>