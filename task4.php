<?php

echo "Задание 4 <br>";

//Реализовано только для строчных букв
$dict = [
    'а' => 'a',
    'б' => 'b',
    'в' => 'v',
    'г' => 'g',
    'д' => 'd',
    'е' => 'e',
    'ё' => 'yo',
    'ж' => 'zh',
    'з' => 'z',
    'и' => 'i',
    'й' => 'j',
    'к' => 'k',
    'л' => 'l',
    'м' => 'm',
    'н' => 'n',
    'о' => 'o',
    'п' => 'p',
    'р' => 'r',
    'с' => 's',
    'т' => 't',
    'у' => 'u',
    'ф' => 'f',
    'х' => 'kh',
    'ц' => 'ts',
    'ч' => 'ch',
    'ш' => 'sh',
    'щ' => 'sch',
    'ъ' => '',
    'ы' => 'y',
    'ь' => '\'',
    'э' => 'e',
    'ю' => 'yu',
    'я' => 'ya',
    ' ' => ' '
];

//Можно сделать через передачу переменной
//$testWord = $_GET['rusWord'];

function transLit($rusWord,$dict) {
    $rusLetters = preg_split('//u', $rusWord, -1, PREG_SPLIT_NO_EMPTY);
    $latLetters = [];

    foreach ($rusLetters as $rusLetter) {
        array_push($latLetters,$dict[$rusLetter]);
    }

    $latWord = implode('',$latLetters);
    echo $latWord;
}

$testWord = "проверочная фраза";
transLit($testWord,$dict);