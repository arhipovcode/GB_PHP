<?php
include_once __DIR__ . "/../config/main.php";
include ENGINE_DIR . 'renderMenu.php';
include ENGINE_DIR . 'footerMenu.php';
include ENGINE_DIR . 'getImage.php';

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lesson-4</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="wrapper">
    <header class="header">
        <div class="container">
            <nav class="header-menu">
                <?= getRenderMenu() ?>
            </nav>
        </div>
    </header>

    <main class="main">
        <div class="container">
            <div class="images-wrapper">
                <?= getImages(); ?>
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="container">
            <?= getFooter() ?>
        </div>
    </footer>
</div>

<div class="modal">
    <div class="modal-image">
        <div class="modal-closed">
            <span></span>
            <span></span>
        </div>

        <img src="" alt="">
    </div>
</div>

<script src="js/popup-img.js"></script>
</body>
</html>
