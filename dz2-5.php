<?php
/*
  Функция должна принимать в качестве аргумента массив чисел и возвращать так
  же массив, но отсортированный по возрастанию. Системные функции сортировки не использовать.
  Пример: В функцию передали [1, 22, 5, 66, 3, 57]. Вернула: [1, 3, 5, 22, 57, 66]
  Дополнительно (не обязательно): Доработать функцию так, чтобы в качестве
  второго аргумента она принимала название функции сортировки. И сортировала
  массив с использованием этой функции. В идеале добавить 2 функции сортировки,
  одна из которых должна быть задана по умолчанию.
*/
echo '<h2>dz2-5</h2>';
# ------------------------------------1------------------------------------------
$intArr = [1, 22, 5, 66, 3, 57];
$intArr2 = [first, second, third, 'Max' ,'m1a2x3', M6];


//передаём массив и имя функции сортировки, по умолчанию по величине элемента
function sortArray($arr,$func = 'elemVal') {
    if (!function_exists(elemLength)) {  //сортировка по длине строки элемента массива
        function elemLength($val1, $val2)
        {
            if (strlen($val1) < strlen($val2)) return 1;
            else if (strlen($val1) > strlen($val2)) return -1;
            else return 0;
        };
    }

    if (!function_exists(elemVal)) {  //сортировка по величине значения
        function elemVal($val1, $val2)
        {
            if ($val1 < $val2) return 1;
            else if ($val1 > $val2) return -1;
            else return 0;
        };
    }

    if (!function_exists(sortElem)) {
        function sortElem(&$larr, $i,$funcName) //чтобы изменялся исходный массив, передаём их по ссылке
        {
            if ($i < 0) return; //выход из рекурсии
            if ($funcName($larr[$i - 1], $larr[$i]) < 0) { //сравниваем значение элемента с предыдущим
                //если условие сортировки выполняется, то
                $tmp = $larr[$i];                           //меняем значения,
                $larr[$i] = $larr [$i - 1];
                $larr[$i - 1] = $tmp;
                sortElem($larr, $i - 1,$funcName);       //затем вызываем саму функцию (рекурсия) для предыдущего элемента
            }
        };
    }
    //начало
    if (count($arr)<2) return($arr);
    for ($k=1; $k< count($arr); $k++) { //проходим по всем элементам массива, со второго
        sortElem($arr,$k,$func);
    }
    return $arr;
};

echo '<pre>'.print_r($intArr,true).'</pre>';
$intArr = sortArray($intArr);                   //числовой массив, сортируем по умолчанию
echo '<pre>'.print_r($intArr,true).'</pre>';
echo '<pre>'.print_r($intArr2,true).'</pre>';
$intArr2 = sortArray($intArr2,'elemLength');   //массив строк - сортируем по длине строк
echo '<pre>'.print_r($intArr2,true).'</pre>';