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