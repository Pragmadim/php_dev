<?php

function homoCredit($monthPay, $creditSum) {
    $monthPercent = 0.03;
    $comission = 500;
    $result = 0;
    $month = 1;
    for($creditSum; $result<$creditSum; $month++ ) {
        $result = $creditSum + ($creditSum * $monthPercent + $comission);
        $creditSum = $result;
        echo "$result, $month\n";
    }
    /** БЛЯЯЯЯЯЯЯЯЯЯЯ */
}

homoCredit(5000, 40000);

/**
 * Created by PhpStorm.
 * User: Pragmadim
 * Date: 09.02.2019
 * Time: 16:10
 */