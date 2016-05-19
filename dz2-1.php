<?php
/*
  Функция должна принимать массив строк и выводить каждую строку в отдельном параграфе.
  Примечание: Теги параграфа <p></p>.
  Дополнительно (не обязательно): При выводе каждую строку выводить внутри
  параграфа случайное число раз.
*/
echo '<h2>dz2-1</h2>';
# ------------------------------------1------------------------------------------
$varStr = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, doloremque dolores fuga magnam molestiae nam provident';

function printStr($str) {
    $strArr = explode(' ',$str);
    foreach($strArr as $strElement) {

        echo '<p>';
        for ($i=1 , $r=mt_rand(1,50) ; $i <= $r; $i++){
            echo $strElement.' ';
        }
        echo '</p>';
    }

}

printStr($varStr);
