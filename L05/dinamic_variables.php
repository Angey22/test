<?php

// An example of using a dynamic variable (Пример использования динамической переменной)
$var1 = 'qwerty'; // (Задали переменной $var1 значение "qwerty")

$$var1 = 11155; // (Создали динамическую переменную имя которой будет соответствовать заданому в переменной $var1 значению)

var_dump($qwerty); // (Вывели на экран значение динамической переменной)

// (Количество динамически вложенных одну в другую переменных может быть бесконечное количество)