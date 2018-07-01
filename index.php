<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 01.07.2018
 * Time: 12:29
 */

$x = rand(0, 100);
echo 'Входное число: ' . $x . PHP_EOL . "<br />";

$var1 = 1;
$var2 = 1;

while (true) // Основной цикл
{
    if ($var1 > $x) {
        echo 'задуманное число НЕ входит в числовой ряд';
        break;
    } elseif ($var1 === $x) {
        echo 'задуманное число входит в числовой ряд';
        break;
    } else { // Переменная var1 не равна числу пользователя
        $var3 = $var1;
        $var1 = $var1 + $var2; // Каждый последующий член равен сумме двух предыдущих
        echo $var1 . PHP_EOL . "<br />"; // Смотрим на члены ряда
        $var2 = $var3;
    }
}

echo PHP_EOL . "<br />" . 'КОНЕЦ';