<?php
$output = null;
$user = [
    'name' => 'akhil us',
    'age' => '30',
    'email' => 'usakhil121@gmail.com',
    'hobbies' => ['reading', 'cycling', 'cricking']

];
$output = $user['name'];
$output = $user['age'];
$output = $user['hobbies'][0];
$user['address'] = '123 main street';
// Add a new hobby
$user['hobbies'][] = 'swimming';

$user['hobbies'] = array_merge($user['hobbies'], ['gaming', 'hiking']);
//removing addresss
unset($user['address']);
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
                    <?= print_r($user); ?>
            </pre>


        </div>
    </div>
</body>

</html>