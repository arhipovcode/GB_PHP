<?php
$host = '127.0.0.1';
$login = 'root';
$password = 'root';
$dbName = 'main_db';

$connection = mysqli_connect($host, $login, $password, $dbName);

$sql = "INSERT INTO products (title, description, price) 
        VALUE ('Ружье', 'Двухствольное', 1500),
        ('Автомат', 'Ручная работа', 3500),
        ('Револьвер', 'Эксклюзивный вариант', 2100),
        ('Кольт', 'Коллекционное издание', 3050),   
        ('Арбалет', 'Мощный арбалет', 1800),
";

$res = mysqli_query(
    $connection, $sql
);