<?php
/*
  Создать рекурсивную функцию, которая принимает два целых числа, начальное и
  конечное значения, диапазон. Функция должна вывести список нечётных чисел в
  заданном диапазоне.
  Например: В функцию передали: 10 и 35. Функция должна вывести список
  нечётных чисел в диапазоне от 10 до 35.
  Дополнительно (не обязательно): Доработать функцию так, чтобы она
  принимала анонимную callback-функцию, которая бы проверяла по придуманному
  Вами алгоритму текущее число и выдавала true/false. И выводила число удовлетворяющее условию.
*/
echo '<h2>dz2-6</h2>';
# ------------------------------------1------------------------------------------
function getIntegerList($int1,$int2,$checkFunction) {
    if ($int1>$int2) return ;
    //if (($int1 % 2) !==0) echo ' '.$int1;  //первый вариант - нечётные числа
    if ($checkFunction($int1)) echo ' '.$int1; //второй вариант - переданная функция
    getIntegerList($int1+1,$int2,$checkFunction);
}

$checkNotEvens = function($k) {
    return ($k % 2 > 0);
};
$checkEvens = function($k) {
    return ($k % 2 == 0);
};
$checkDividedBy5 = function($k) {
    return ($k % 5 == 0);
};

echo 'Нечётные числа';
getIntegerList(10,35,$checkNotEvens);
echo '<br>';
echo 'Чётные числа';
getIntegerList(10,35,$checkEvens);
echo '<br>';
echo 'Числа, делящиеся на 5 без остатка';
getIntegerList(10,100,$checkDividedBy5);
echo '<br>';