<?php
include ENGINE_DIR . "filesystems.php";
include ENGINE_DIR . 'products.php';

// Загружаем файлы с компьютера
if($_SERVER['REQUEST_METHOD'] == "POST") {

    if($_FILES['gallery_image']['error'] === 4) {
        return false;
    }

    uploadFile('gallery_image', PUBLIC_DIR . "img");
    $name_file = $_FILES['gallery_image']['name'];
    createImage($name_file);
    header('Location: /');
}

function getImages() {
    return queryDbGeekbrains("SELECT * FROM images ORDER BY count DESC");
}