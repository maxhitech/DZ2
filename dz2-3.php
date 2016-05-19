<?php
/*
  Функция должна принимать переменное число аргументов, но первым
  аргументом обязательно должна быть строка, обозначающая арифметическое
  действие, которое необходимо выполнить со всеми передаваемыми аргументами.
  Остальные аргументы целые и/или вещественные.
  Например: имя функции someFunction(‘+’, 1, 2, 3, 5.2);
  Результат: 1 + 2 + 3 + 5.2 = 11.2
  Дополнительно (не обязательно): Задание взять из Задачи №2.
*/
echo '<h2>dz2-3</h2>';
# ------------------------------------1------------------------------------------
//функция - действие - взята из предыдущей задачи
function makeAction($arr,$act) {
    if (!function_exists(checkNumber)) {
        function checkNumber($num)
        {
            if (is_int($num) || is_float($num))
                return $num;
            else return 1;
        }
    }
    switch ($act) {
        case '+': $func = function($a,$b) {
            return $a+$b;
        };
            break;
        case '-': $func = function($a,$b) {
            return $a-$b;
        };
            break;
        case '*': $func = function($a,$b) {
            return $a*$b;
        };
            break;
        case '/': $func = function($a,$b) {
            return $a/$b;
        };
            break;
        default: $func = function($a,$b) {
            return $a;
        };
    }
    for($i=1,$resNum = checkNumber($arr[0]),$res = (string)$arr[0]; $i<count($arr); $i++) {
        $res .= ' '.$act.' '.$arr[$i];
        $resNum = $func($resNum,checkNumber($arr[$i]));
    }
    return $res.' = '.$resNum;

}

# ------------------------------------2------------------------------------------

function makeActions() {
    if (func_num_args()<2) return;
    $args = func_get_args();
    $actions = $args[0]; //первый аргумент - действия
    array_shift($args);  //с остальными агрументами выполняем операции

    for ($i = 0 ; $i < strlen($actions); $i++ )  { //проходим по всем действиям
        echo makeAction($args,$actions[$i]).'<br>';
    }
}

makeActions('+-*/1=!#♥',1,2,3,4.5,5,6);