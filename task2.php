<?php

//Задание 2
$j = 0;
$k = 1;

echo "Задание 2 <br>";
do {
    echo $j." - ноль <br>";
    do {
        ($k % 2 != 0) ? $str = "нечетное" : $str = "четное";
        echo $k." - ".$str." число <br>";
        $k++;
    } while ($k <= 10);
} while($j = 0);