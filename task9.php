<?php

//Задание 9

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

//Выполняет транслитерацию с русского на латиницу
function transLit($rusWord,$dict) {
    $rusLetters = preg_split('//u', $rusWord, -1, PREG_SPLIT_NO_EMPTY);
    $latLetters = [];

    foreach ($rusLetters as $rusLetter) {
        array_push($latLetters,$dict[$rusLetter]);
    }

    $latWord = implode('',$latLetters);
    return $latWord;
}

//Заменяет пробелы на подчеркивание
function replaceSpaceWithUnderscore($sentence) {
    $modSentence = str_replace(' ','_',$sentence);
    return $modSentence;
}

function transLitWithReplace($word,$dict){
    return replaceSpaceWithUnderscore(transLit($word,$dict));
}

$testWord = "проверочная фраза на русском";
echo transLitWithReplace($testWord,$dict);