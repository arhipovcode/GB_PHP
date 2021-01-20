<?php
  $title = 'Lesson-1';
  $hello = 'Мое первое написание на PHP';
  $year = 2021;

  $a = 5;
  $b = '05';
  $num = '012345';
  
  $numFloat = (float) 123.0;
  $numInt = (int) 123.0;

  $numZero = (int) 0;

  $num1 = 1;
  $num2 = 2;
?>


<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?></title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<h1 class="title"><?= $hello ?></h1>
<div class="main-block">
  <div class="sample">
    <div class="sample-title">
      Пример 1.
    </div>
    <div class="sample-wrap">
      <div class="text">
        <p>Переменная $a: равна <?= $a?></p>
        <p>Переменная $b: равна <?= $b?></p>
      </div>
      <div class="answer">
        <p>Результат - <strong><?= var_dump($a == $b)?></strong> выведено с помощью PHP</p>
        <p>При обычном сравнении "==", если сравнивается число со строкой, то строка преобразовывается к числовому типу. Ноль равен false, он так сказать опускается и сравниваются два числа "5==5"</p>
      </div>
    </div>
  </div>

  <div class="sample">
    <div class="sample-title">
      Пример 2.
    </div>
    <div class="sample-wrap">
      <div class="text">
        <p>Переменная $num: равна <?= $num?></p>
      </div>
      <div class="answer">
        <p>Результат - <strong><?= var_dump((int)'012345')?></strong> выведено с помощью PHP</p>
        <p>Функция "int" преобразовывает строку к числовому типу. Ноль при этом также опускается и равен false. Поэтому мы получаем 12345</p>
      </div>
    </div>
  </div>

  <div class="sample">
    <div class="sample-title">
      Пример 3.
    </div>
    <div class="sample-wrap">
      <div class="text">
        <p>Переменная $numFloat: равна <?= $numFloat?></p>
        <p>Переменная &numInt: равна <?= $numInt?></p>
      </div>
      <div class="answer">
        <p>Результат - <strong><?= var_dump((float)123.0 === (int)123.0)?></strong> выведено с помощью PHP</p>
        <p>При сравнении мы используем "тождественное сравнение", которое также смотрит тип переменных, а они разные, поэтому результат false.</p>
      </div>
    </div>
  </div>

  <div class="sample">
    <div class="sample-title">
      Пример 4.
    </div>
    <div class="sample-wrap">
      <div class="text">
        <p>Переменная $numZero: равна <?= $numZero?></p>
        <p>Переменная (int) $hello: равна <?= (int) $hello?></p>
      </div>
      <div class="answer">
        <p>Результат - <strong><?= var_dump((int)0 === (int)'hello, world')?></strong> выведено с помощью PHP</p>
        <p>При преобразовании строки к числовому типу получаем "ноль", при сравнении получаем true. Так как они оба "integer" равные "0"</p>
      </div>
    </div>
  </div>

</div>

<div class="num-block">
  <p>Переменная $num1 равна <span><?= $num1?></span> <strong>выведено с помощью PHP</strong></p>
  <p>Переменная $num2 равна <span><?= $num2?></span> <strong>выведено с помощью PHP</strong></p>

  <?php
    list($num2, $num1) = [$num1, $num2];
  ?>
  
  <h3 style="margin-top:0;" class="title">Меняем местами</h3>
  <p>Переменная $num1 равна <span><?= $num1?></span> <strong>выведено с помощью PHP</strong></p>
  <p>Переменная $num2 равна <span><?= $num2?></span> <strong>выведено с помощью PHP</strong></p>
</div>

<h2 class="title"><?= $year?> год</h2>

</body>
</html>