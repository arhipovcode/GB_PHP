<?php
/*
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
  */
  ////////////////////////////// Lesson-2
  $title = 'Lesson-2';
  $task_1 = '1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:';
  $task_2 = '2. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.';
  $task_3 = "3. Реализовать функцию с тремя параметрами: function mathOperation(arg1, arg2, operation), где arg1, arg2 – значения аргументов, operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать 'switch').";
  $task_4 = '4. Посмотреть на встроенные функции PHP. Используя имеющийся HTML-шаблон, вывести текущий год в подвале при помощи встроенных функций PHP.';
  $task_5 = '5. *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.';
  $task_6 = '6. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:';

  $a = 15;
  $b = 7;
  $resultPositive = null;

  $c = -12;
  $d = -5;
  $resultNegative = null;

  $f = -9;
  $t = 23;
  $result = null;

  if($a >= 0 && $b >= 0) {
    $resultPositive = $a - $b;
  } 
  if ($c < 0 && $d < 0) {
    $resultNegative = $c * $d;
  } 
  if ($f < 0 && $t > 0 || $f > 0 && $t < 0) {
    $result = $f + $t;
  }

  // Функция для вычисления чисел
  function mathOp($a, $b) {
    if($a >= 0 && $b >= 0) {
      return $a - $b;
    } elseif ($a < 0 && $b < 0) {
      return $a * $b;
    } elseif ($a < 0 && $b > 0 || $a > 0 && $b < 0) {
      return $a + $b;
    } 
  }

  // Функция для вычисления чисел с тремя параметрами
  function mathOperation($a, $b, $oreration) {
    switch ($oreration) {
      case 'sum':
        return $a + $b;
      case 'sub':
        return $a - $b;
      case 'mult':
        return $a * $b;
      case 'div':
        return $a / $b;
    }
  }

  
  // Функция рекурсия
  function power($val, $pow) {
    if($pow) {
      return $val * power($val, $pow-1);
    }
    return 1;
  }

  // Функция получения склонения
  function getAnswerHour($hour) {
    if($hour > 4 && $hour < 21) {
      return ' часов';
    } elseif($hour % 10 > 1 && $hour % 10 < 5) {
      return ' часа';
    }
  }
  function getAnswerMin($min) {
    if($min % 10 === 1 && $min != 11) {
      return ' минута';
    } elseif($min % 10 > 1 && $min % 10 < 5 && $min < 5 || $min % 10 > 1 && $min % 10 < 5 && $min > 21) {
      return ' минуты';
    } elseif($min >= 5 && $min <= 20 || $min % 10 > 4 && $min % 10 <= 9 || $min % 10 === 0) {
      return ' минут';
    } 
  }
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

<!-- ////////////////// Lesson-1 ////////////////// -->
<!-- <h1 class="title"><?= $hello ?></h1>
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

<h2 class="title"><?= $year ?> год</h2> -->

<!-- ////////////////// Lesson-2 ////////////////// -->

<div class="container">
  <h1 class="title"><?= $task_1 ?></h1>

  <p class="subtitle">
    если $a и $b положительные, вывести их разность;<br>
    если $а и $b отрицательные, вывести их произведение;<br>
    если $а и $b разных знаков, вывести их сумму;
  </p>
  <div class="task-wrap">
    <div class="task">
      <div>Переданные числа: <?= $a ?> и <?= $b ?></div>
      <div class="result"><strong>Ответ: </strong> Когда положительные: <?= $resultPositive ?></div>
    </div>
    
    <div class="task">
      <div>Переданные числа: <?= $c ?> и <?= $d ?></div>
      <div class="result"><strong>Ответ: </strong> Когда отрицательные: <?= $resultNegative ?></div>
    </div>

    <div class="task">
      <div>Переданные числа: <?= $f ?> и <?= $t ?></div>
      <div class="result"><strong>Ответ: </strong> Когда разных знаков: <?= $result ?></div>
    </div>
  </div>

  <h2 class="title"><?= $task_2 ?></h2>
  <div class="task-wrap">
    <div class="task">
      <div>Переданные числа: 12 и 6</div>
      <div class="result"><strong>Ответ: </strong> Когда положительные (вычитание): <?= mathOp(12, 6) ?></div>
    </div>

    <div class="task">
      <div>Переданные числа: -12 и -6</div>
      <div class="result"><strong>Ответ: </strong> Когда отрицательные (умножение): <?= mathOp(-12, -6) ?></div>
    </div>

    <div class="task">
      <div>Переданные числа: -12 и 6</div>
      <div class="result"><strong>Ответ: </strong> Когда разных знаков (сложение): <?= mathOp(-12, 6) ?></div>
    </div>
  </div>

  <h2 class="title"><?= $task_3 ?></h2>
  <div class="task-wrap">
    <div class="task">
      <div>Переданные числа: 12 и 7</div>
      <div class="result"><strong>Вычитание: </strong> <?= mathOperation(12, 7, 'sub') ?></div>
    </div>

    <div class="task">
      <div>Переданные числа: 15 и 7</div>
      <div class="result"><strong>Сложение: </strong> <?= mathOperation(15, 7, 'sum') ?></div>
    </div>

    <div class="task">
      <div>Переданные числа: 21 и 2</div>
      <div class="result"><strong>Умножение: </strong> <?= mathOperation(21, 2, 'mult') ?></div>
    </div>

    <div class="task">
      <div>Переданные числа: 24 и 6</div>
      <div class="result"><strong>Деление: </strong> <?= mathOperation(24, 6, 'div') ?></div>
    </div>
  </div>

  <h2 class="title"><?= $task_4 ?></h2>
  <div class="task-wrap">
    <div class="task">
      <div class="result"><strong>Текущая дата: </strong> <?= date("d. m. Y")?></div>
    </div>
  </div>

  <h2 class="title"><?= $task_5 ?></h2>
  <div class="task-wrap">
    <div class="task">
      <div>Переданно число: 3</div>
      <div class="result"><strong>Результат: </strong> <?= power(3, 3) ?></div>
    </div>
  </div>

  <h2 class="title"><?= $task_6 ?></h2>
  <div class="task-wrap">
    <div class="task">
      <div class="result"><strong>Текущее время: </strong> 
        <?= date("H") . getAnswerHour(date("H")) ?>
        <?= date("i") . getAnswerMin(date("i")) ?>
      </div>
    </div>
  </div>


  <footer class="title"><?= date("d. m. Y")?> год <?= date("M") ?></footer>
</div>
</body>
</html>