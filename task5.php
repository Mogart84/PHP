<?php

//Задание 5
function replaceSpaceWithUnderscore($sentence) {
    $modSentence = str_replace(' ','_',$sentence);
    return $modSentence;
}

echo replaceSpaceWithUnderscore("Просто одно предложение");
