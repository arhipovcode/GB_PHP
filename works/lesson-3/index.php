<?php

  // Task - 1
  $num = 0;
  while($num <= 100) {
    if($num % 3 === 0) {
      echo $num . ' ';
    } elseif ($num === 100) {
      echo '<br>' . '<br>';
    }
    $num++;
  }

  // Task - 2
  $num = 0;
  do {
    if($num === 0) {
      echo $num . ' - ноль. <br>';
    } elseif ($num % 2 === 1) {
      echo $num . ' - нечетное число. <br>';
    } else {
      echo $num . ' - четное число. <br>';
      // если $num == 10 делаю отступ для лучшей читаемости
      if($num === 10) {
        echo '<br>';
      }
    }
    $num++;
  } while ($num <= 10);

  // Task - 3
  $regions = [
    'Московская область' => ['Москва','Зеленоград','Клин'],
    'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
    'Рязанская область' => ['Рязань', 'Касимов', 'Кораблино', 'Сасово',  'Михайлов', 'Скопин'],
    'Краснодарский край' => ['Сочи', 'Анапа', 'Геленджик', 'Адлер', 'Темрюк', 'Тихорецк'],
    'Республика Крым' => ['Ялта', 'Севастополь', 'Симферополь', 'Щелкино', 'Феодосия', 'Керчь'],
  ];

  foreach($regions as $key => $value) {
    echo $key . ': <br>'; // ставлю ':' после имени области и перевожу строку на следующую
    // Проверяю 'is_array("имя массива")' - является ли полученное значение массивом?
    if(is_array($value)) {
      // Запускаю цикл перебора
      foreach($value as $key => $val) {
        // Проверяю, если это последней ключ в массиве
        if($val == end($value)) {
          echo $val . '.' . '<br>' . '<br>';
        }
        // иначе ставлю запятую и продолжаю вывод значений 
        else {
          echo $val . ', ';
        }
      }
    }
  }

  // Task - 4
  function getWordTranslitor($letter, $endLetter = '') {
    // массив из букв
    $transliteration = [
      'а' => 'a',
      'б' => 'b',
      'в' => 'v',
      'г' => 'g',
      'д' => 'd',
      'е' => 'e',
      'ё' => 'yo',
      'ж' => 'zh',
      'з' => 'z',
      'и' => 'i',
      'й' => 'j',
      'к' => 'k',
      'л' => 'l',
      'м' => 'm',
      'н' => 'n',
      'о' => 'o',
      'п' => 'p',
      'р' => 'r',
      'с' => 's',
      'т' => 't',
      'у' => 'u',
      'ф' => 'f',
      'х' => 'h',
      'ц' => 'c',
      'ч' => 'ch',
      'ш' => 'sh',
      'щ' => 'shch',
      'э' => 'e',
      'ю' => 'yu',
      'я' => 'ya',
    ];
    // цикл, который пробегается по массиву с буквами и сравнивает значения
    foreach($transliteration as $key => $value) {
      if($key == $letter) {
        echo $value;
      } elseif ($letter == ' ') {
        echo ' ';
      }
    }
  }

  function translitor($str) {
    // переводим слово в маленькие буквы
    $str = mb_strtolower($str);
    // переводим полученное слово в массив из букв
    $letterArr = preg_split('//u', $str, 0, PREG_SPLIT_NO_EMPTY);
    // запускаем цикл и передаем каждую букву в функцую на сравнение значений
    foreach($letterArr as $val) {
      getWordTranslitor($val);
    }
  }
  // запускаем функцию и передаем слово на русском языке
  translitor('Мой РезуЛьтаТ');

  // Task - 5
  function replaceSpace($word) {
    $result = '';
    $word = mb_strtolower($word);

    $letterArr = preg_split('//u', $word, 0, PREG_SPLIT_NO_EMPTY);

    foreach($letterArr as $value) {
      if($value == ' ') {
        $result .= '_';
      } else {
        $result .= $value;
      }
    }
    echo '<br>' . '<br>' . $result . '<br>' . '<br>';
  }
  replaceSpace('Заменить пробелы на подчеркивания');

  // Task - 7
  for ($i = 0; $i < 10; print_r($i++)){}

  // Task - 8
  function getCitiesFilter(string $str, $regions) {
    echo '<br>';
    echo '<br>';
    
    foreach($regions as $value) {
      if(is_array($value)) {
        foreach($value as $val) {
          if(mb_substr($val, 0, 1) === $str) {
            echo $val . '<br>';
          }
        }
      }
    }
  }
  getCitiesFilter('К', $regions);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../../style.css">
</head>
<body>
  
</body>
</html>