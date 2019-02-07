<?php
$syllables = array(
    "ка",
    "жоп",
    "нат",
    "димо",
    "максо",
    "пут",
    "еб",
    "бол",
    "гей",
    "дор",
    "ух",
    "де",
    "ху",
    "ро",
    "ин",
    "жор"
);

$string = "";
for ($i=1; $i<=3; $i++) {
    $random = rand(0, count($syllables));
    $string .= $syllables[$random];
}

echo "Ты самый настоящий $string!";

/**
 * Created by PhpStorm.
 * User: Pragmadim
 * Date: 07.02.2019
 * Time: 18:54
 */