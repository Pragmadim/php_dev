<?php

$anonHeight = 182;

$people = array(
    'Vanya' => 172,
    'Sasha' => 168,
    'Dima' => 185,
    'Vasily' => 204
);

$number = 0;

foreach($people as $name => $height) {
    echo "Рост $name составляет $height см.\n";
    if ($height>$anonHeight) {
        $number++;
    }
}

echo "Кол-во человек выше анона: $number";




/**
 * Created by PhpStorm.
 * User: Pragmadim
 * Date: 06.02.2019
 * Time: 21:55
 */