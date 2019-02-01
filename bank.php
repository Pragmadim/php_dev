<?php
echo "Deposit is 10 000 rubles.\n";
$deposit = 10000;
$age = 16;
$year = 2019;
for ($deposit; $finalSum <= 1000000; $year++) {
    $percentSum = $deposit * 0.1;
    $finalSum = $deposit + $percentSum;
    $age++;
    echo "The year is $year. Deposit is $deposit. By the end of the year the final sum is $finalSum.\n Age is $age.\n";
    $deposit = $finalSum;

    /**
     * Created by PhpStorm.
     * User: Pragmadim
     * Date: 30.01.2019
     * Time: 13:09
     */
}

