<?php

// Primitive console calculator (Примитивный консольный калькулятор)
echo 'Enter two numeric values for their "+", "-", "*" and "/"', PHP_EOL; // (Информационное оповещение об общем назначении программы)
$firstValue = readline('Enter first value: '); // (Запрос на ввод первого значения с последующим его присвоением переменной $firstValue)
$secondValue = readline('Enter second value: '); // (Запрос на ввод второго значения с последующим его присвоением переменной $secondValue)

$addition = $firstValue + $secondValue; // (Сложение полученых числовых значений с последующей записью соответствующего значения в переменную $addition)
echo "Addition {$firstValue} and {$secondValue} = {$addition}", PHP_EOL; // (Вывод результатов сложения полученных от пользователя числовых значений)

$subtraction = $firstValue - $secondValue; // (Вычетание второго числового значения из первого с последующей записью соответствующих данных в переменную $subtraction)
echo "Subtraction {$firstValue} from {$secondValue} = {$subtraction}", PHP_EOL; // (Вывод результатов вычетания полученных от пользователя числовых значений)

$multiplication = $firstValue * $secondValue; // (Умножение двух значений с последующей записью соответствующих данных в переменную $multiplication)
echo "Multiplication {$firstValue} by {$secondValue} = {$multiplication}", PHP_EOL; // (Вывод результатов умножения полученных от пользователя числовых значений)

$division = $firstValue / $secondValue; // (Деление двух значений с последующей записью соответствующих данных в переменную $division)
echo "Division {$firstValue} by {$secondValue} = {$division}", PHP_EOL; // (Вывод результатов деления полученных от пользователя числовых значений)

echo 'End of calculations', PHP_EOL; // (Оповищение о завершении выполнения вычислительных операций)