<?php
$output = null;
$fruits = [
    ['apple', 'red'],
    ['bananna', 'yellow'],
    ['orange', 'orange']


];
// $output = $fruits[0][0];
$output = $fruits[0][1];
//adding new element

$fruits[] = ['Grape', 'Purple'];
$users = [
    ['name' => 'akhil', 'username' => 'akhil121', 'password' => 'ak121'],
    ['name' => 'achu', 'username' => 'achu121', 'password' => 'au121'],
    ['name' => 'yadu', 'username' => 'yadu121', 'password' => 'yu121']
];
$output = $users[1]['username'];
//ading new elemnts
$users[] = ['name' => 'manu', 'username' => 'manu121', 'password' => 'mu121'];

array_push($users, ['name' => 'ammu', 'username' => 'ammu121', 'password' => 'amm121']);
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
                    <!-- <?= print_r($fruits); ?> -->
                    <?= print_r($users); ?>
            </pre>


        </div>
    </div>
</body>

</html>