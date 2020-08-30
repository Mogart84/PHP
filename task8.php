<?php

//Задание 8
$cities = [
    "Минская область" => ["Борисов","Молодечно","Слуцк"],
    "Брестская область" => ["Барановичи","Пинск","Кобрин"],
    "Витебская область" => ["Полоцк","Орша","Поставы"],
    "Гомельская область" => ["Добруш","Мозырь","Рогачев"],
    "Гродненская область" => ["Слоним","Лида","Сморгонь"],
    "Могилевская область" => ["Бобруйск","Быхов","Кричев"]
];

echo "Задание 8 <br>";

//Выводим только названия городов, начинающиеся на "К"
foreach ($cities as $regions => $towns) {
    echo $regions.":<br>";
    foreach ($towns as $town) {
        $letters = preg_split('//u', $town, -1, PREG_SPLIT_NO_EMPTY);
        if ($letters[0] == 'К') echo $town."<br>";
    }
}