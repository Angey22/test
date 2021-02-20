<?php

// User data entry (Ввод пользовательских данных)
$name = readline('Enter your name: '); // (Запрос на ввод пользовательских данных с последующим их присвоение переменной $name)

var_dump($name); // (Вывод на экран типа и значения переменной $name)


//Collecting and displaying user data (Сбор и вывод пользовательских данных)
$name = readline('Enter your name: '); // (Запрос на ввод пользовательских данных с последующим их присвоение переменной $name)
$password = readline('Enter your password: '); // (Запрос на ввод пользовательских данных с последующим их присвоение переменной $password)
$age = readline('Enter your age: '); // (Запрос на ввод пользовательских данных с последующим их присвоение переменной $age)

echo "Hello {$name}, {$age} year old. Don't forgot your passeord: {$password}", PHP_EOL; // (Вывод на экран значений группы переменных с дополнительным текстовым сопровождением)
