<?php

//откуда будем парсить информацию
 $content = file_get_contents('https://exmo.me/ru/trade#?pair=BTC_USD');

// Определяем позицию строки, до которой нужно все отрезать
 $pos = strpos($content, '<ul class="graph_indexes_top">
            <li pair="BTC_USD">');

//Отрезаем все, что идет до нужной нам позиции
 $content = substr($content, $pos);

// Точно таким же образом находим позицию конечной строки
 $pos = strpos($content, ' </li>');

// Отрезаем нужное количество символов от нулевого
 $content = substr($content, 0, $pos);

//если в тексте встречается текст, который нам не нужен, вырезаем его
 $content = str_replace('текст который нужно вырезать','', $content);

// выводим спарсенный текст.
 echo $content;

echo "вставляем сюда завершающий код";
 ?>

 <?php

//откуда будем парсить информацию
 $content = file_get_contents('полный урл страницы с http:// с которого будем вырезать информацию');

// Определяем позицию строки, до которой нужно все отрезать
 $pos = strpos($content, 'здесь кусок кода/текста который размещен перед нужным текстом');

//Отрезаем все, что идет до нужной нам позиции
 $content = substr($content, $pos);

// Точно таким же образом находим позицию конечной строки
 $pos = strpos($content, 'здесь кусок кода/текста который стоит в конце нужного нам текста');

// Отрезаем нужное количество символов от нулевого
 $content = substr($content, 0, $pos);

//если в тексте встречается текст, который нам не нужен, вырезаем его
 $content = str_replace('текст который нужно вырезать','', $content);

// выводим спарсенный текст.
 echo $content;

echo "вставляем сюда завершающий код";
 ?>