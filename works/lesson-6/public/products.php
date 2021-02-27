<?php
include_once __DIR__ . "/../config/main.php";
include ENGINE_DIR . "connection.php";

$id = (int) $_GET['id'];

$good = queryDbGeekbrains("SELECT * FROM products WHERE id = {$id}")[0];

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>photo.php</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
    <div class="good-block">
        <div class="good-image">
            <img src="http://placehold.it/300x150" />
        </div>
        <div class="good-title"><?= $good['title'] ?></div>
        <div class="good-desc"><?= $good['details'] ?></div>
        <div class="good-price"><?= $good['price'] ?></div>
    </div>
</div>

</body>
</html>