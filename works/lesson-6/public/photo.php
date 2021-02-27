<?php
include_once __DIR__ . "/../config/main.php";
include ENGINE_DIR . 'connection.php';

// Получаем id при переходе на картинку, так как ссылка ведет на "photo.php"
$id = (int) $_GET['id'];
// Если запрос произошел, то обновляем в таблице счетчик просмотра фотографии
if ($image_id = queryDbGeekbrains("SELECT * FROM images WHERE id = {$id}")[0]) {
    // Запрос на обновление данных
    updateDb("UPDATE images SET count = count + 1 WHERE id = {$id}");
}

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

<div class="vision-images">
    <p class="views-count">Количество просмотров: <?= $image_id['count'] ?></p>
    <img src="img/<?=$image_id['name_img']?>">
</div>

</body>
</html>