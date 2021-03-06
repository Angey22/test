<?php

$fruit = 'Orange';

echo $fruit, PHP_EOL;

$fruit = 'Apple';

echo $fruit, PHP_EOL;

$fruit = 123;

echo $fruit, PHP_EOL;

// Incorrect variable entry (Неправильная запись переменной)
// test = 123; "$" is required (Символ "$" является обязательным в имени переменной)
// $1test = 123; no numbers at the beginning of a variable name (В начале имени переменной не должно быть цыфр)
// $te^st = 123; no special characters (Нельзя использовать какие-либо спецсимволы в имени переменной, допускается только использование "_")
// $te st = 123; no spaces (Нельзя использовать символ пробела в имени переменной)

// An example of a valid use case for digits in a variable name (Пример допустимого варианта использования цифр в имени переменной)
$t1wer = 213;
echo $t1wer, PHP_EOL;

// An example of using the underscore character in a variable name (Пример использования символа нижнего подчеркивания в имени переменной)
$_te_st = 347;
echo $_te_st, PHP_EOL;

// Variable names notation rules (Правила записи имен переменных)

// Hungarian Notation (Венгерская нотация)
$aAllStudentsList = []; // (Начальный(е) символ имени указывает на тип данных, в данном случае символ "а" - на то, что в переменной находится масив)

// Snake Case (Змеиная нотация или Змеиный стиль написания составных имен переменных)
$all_students_list = []; // (Когда между словами составного имени переменной используется в качестве разделителя знак нижнего подчеркивания)

// Camel Case (Верблюжья нотация или Верблюжий стиль написания составных имен переменных)
$allStudentsList = []; // (Когда имя переменной начинается с маленькой буквы, а каждое последующее слово в ее имени с большой буквы)


// Variable by reference (Переменная по ссылке)
$test = 'TEST'; // (Задали в переменную $test строку)
$link = $test;  // (Присвоили переменной $link значение находящееся в переменной $test)

var_dump($test, $link); // (Выводим на экран тип и значение двух переменных)

//Overriding the value of a variable by reference (Переопределение значения переменной по ссылке)
$test = 'TEST'; // (Задали в переменную $test строку)
$link = &$test; // (Связали ссылкой переменную $link со значением находящимся в переменной $test)

$test = 638; // (Задали переменной $test новое значение)

var_dump($test, $link); // (Выводим на экран тип и значение двух переменных)

