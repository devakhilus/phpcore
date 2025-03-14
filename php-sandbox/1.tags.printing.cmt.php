<?php
echo 'Hello From PHP';
echo '<br>';
print 'hai akhil';
echo '<br>';
echo 'Value1', 'value2';
$title = 'Learn PHP From Scratch';
$welcome_Msg = 'Welcome To The Course';
$description = 'In this course, you will learn the fundamentals of the PHP language';
// print 'hai','hai2';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?= $title; ?></title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold"><?= $title; ?></h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-semibold mb-4"><?= $welcome_Msg; ?></h2>
            <p><?= $description; ?> </p>
        </div>
    </div>
</body>

</html>