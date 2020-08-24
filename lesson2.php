<?php


// Задание 1
$a = 10;
$b = 20;
echo "Задание 1: <br>";
echo "\$a = $a, \$b = $b <br>";
echo "Результат вычислений: <br>";

if ($a >= 0 && $b >= 0)
    echo ($a - $b) . "<br>";
elseif ($a < 0 && $b < 0)
    echo ($a * $b) . "<br>";
else
    echo ($a + $b) . "<br>";

//Задание 2
$a = 7;
echo "<br> Задание 2: <br>";
echo "\$a = $a <br>";
echo "Результат: <br>";

switch ($a) {
    case 1:
        echo 1 . "<br>";
    case 2:
        echo 2 . "<br>";
    case 3:
        echo 3 . "<br>";
    case 4:
        echo 4 . "<br>";
    case 5:
        echo 5 . "<br>";
    case 6:
        echo 6 . "<br>";
    case 7:
        echo 7 . "<br>";
    case 8:
        echo 8 . "<br>";
    case 9:
        echo 9 . "<br>";
    case 10:
        echo 10 . "<br>";
    case 11:
        echo 11 . "<br>";
    case 12:
        echo 12 . "<br>";
    case 13:
        echo 13 . "<br>";
    case 14:
        echo 14 . "<br>";
    case 15:
        echo 15 . "<br>";
 }

//Задание 3
function sum($a,$b){
    return $a + $b;
}
function sub($a,$b){
    return $a - $b;
}
function mult($a,$b){
    return $a * $b;
}
function div($a,$b){
    if($b != 0)
        return $a / $b;
    return;
}

//Задание 4
$arg1 = 10;
$arg2 = 20;
$operation = "div";
echo "<br> Задание 4: <br>";
echo "\$arg1 = $arg1, \$arg2 = $arg2, \$operation = $operation <br>";

function mathOperation($arg1, $arg2, $operation) {
    switch ($operation){
        case "sum":
            return sum($arg1, $arg2);
        case "sub":
            return sub($arg1, $arg2);
        case "mult":
            return mult($arg1, $arg2);
        case "div":
            return div($arg1, $arg2);
        default:
            return;
    }
}

echo "Результат вычислений: " . mathOperation($arg1,$arg2,$operation) . " <br>";

//Задание 5
$val = 2;
$pow = 9;

echo "<br> Задание 5: <br>";
echo "\$val = $val, \$pow = $pow <br>";

function power($val, $pow) {
    if($pow > 1)
        return $val * power($val, $pow - 1);
    return $val;
}

echo "Результат вычислений: " . power($val,$pow) . "<br>";

//Задание 6
echo "<br> Задание 6: <br>";

function currentTime() {
    $hour = date("H");
    $minute = date("i");

    switch($hour){
        case (1 || 21):
            $wordHour = " час ";
        case (2 || 3 || 4 || 22 || 23 || 24):
            $wordHour = " часа ";
        default:
            $wordHour = " часов ";
    }
    switch($minute){
        case (1 || 21 || 31 || 41 || 51):
            $wordMinute = " минута ";
        case (2 || 3 || 4 || 22 || 23 || 24 || 32 || 33 || 34 || 42 || 43 || 44 || 52 || 53 || 54):
            $wordMinute = " минуты ";
        default:
            $wordMinute = " минут ";
    }
    echo $hour . $wordHour . $minute . $wordMinute;
}

currentTime();
