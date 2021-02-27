<?php
include_once __DIR__ . "/../config/main.php";
include ENGINE_DIR . 'footer.php';
include ENGINE_DIR . 'menu.php';
include ENGINE_DIR . 'images.php';

$menu = getMenu();
$images = getImages();
$products = getProducts();
$footer = getFooter();
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lesson-4</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="wrapper">
    <header class="header">
        <div class="container">
            <nav class="header-menu">
                <ul>
                <?php foreach ($menu as $link) : ?>
                    <li><a class="menu-link" href="<?= $link['link'] ?>"> <?= $link['name'] ?> </a></li>
                <?php endforeach; ?>
                </ul>
            </nav>
        </div>
    </header>

    <main class="main">
        <div class="container">
            <form class="main-form" action="" method="post" enctype="multipart/form-data">
                <input type="file" name="gallery_image">
                <input type="submit" value="Добавить">
            </form>

            <div class="images-wrapper">
                <?php foreach ($images as $image) : ?>
                    <div class="image-block">
                        <a href="<?= "/photo.php?id={$image['id']}" ?>">
                            <img class="image" src="img/<?=$image['name_img']?>" alt="<?=$image['title']?>">
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>

            <form action="" method="post">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="submit">
            </form>

            <div class="products">
                <?php foreach ($products as $product) : ?>
                    <div class="product-block">
                        <div class="product-image">
                            <img src="http://placehold.it/300x150" />
                        </div>
                        <p class="product-title"><?= $product['title'] ?></p>
                        <p class="product-desc"><?= $product['description'] ?></p>
                        <p class="product-price"><?= $product['price'] ?> рублей</p>
                        <a class="product-link" href="<?= "products.php?id={$product['id']}" ?>">
                            Посмотреть
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="container">
            <?php foreach ($footer as $text) : ?>
                <div style="text-align: center"> <?= $text[0] ?> </div>
            <?php endforeach; ?>
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
</body>
</html>
