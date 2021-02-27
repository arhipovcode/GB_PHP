<?php
$connect_db = mysqli_connect(
    'localhost',
    'mikhail',
    'mikhail',
    'geekbrains',
    '3306'
);
if(!$connect_db) {
    echo 'Ошибка подключения БД';
} else {
    echo 'Подключение прошло успешно' . '<br>';
}

$result_images = mysqli_query($connect_db, "SELECT * FROM images");

$db_shop = mysqli_connect(
    'localhost',
    'demo-shop',
    'shop-123&',
    'demo-magazine',
    '3306'
);
if(!$db_shop) {
    echo 'Ошибка подключения БД shop';
} else {
    echo 'Подключение БД shop прошло успешно' . '<br>';
}