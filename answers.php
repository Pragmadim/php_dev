<?php

$answers = array("Может быть", "Определенно да", "Никогда", "Маловероятно", "Скорее всего");

$random = array_rand($answers,1);

echo "Ответ: {$answers[$random]}";
/**
 * Created by PhpStorm.
 * User: Pragmadim
 * Date: 06.02.2019
 * Time: 22:43
 */