<?php

function homoCredit($monthPay, $creditSum)
{
    $monthPercentSum = 1.03;
    $comission = 500;
    $month = 1;
    $debtSum = $creditSum * $monthPercentSum + $comission;
    $result = 1;

    for ($debtSum; $result > 0; $month++) {
        echo "Месяц $month. Долг на начало месяца: $debtSum. ";
        $result = $debtSum - $monthPay; /** Долг с процентом в этом месяце */
        $debtSum = $result * $monthPercentSum + $comission;
        if ($debtSum <= 0) {
            $moneyLeft = $monthPay + $result;
            echo "Долг будет выплачен к концу месяца! Денег осталось: $moneyLeft";
            break;
        }
        echo "Сумма долга с процентом $result. Плотим 5 тыщ. \n";

    }

    echo "Итого выплачено: $monthPay * $month - $moneyLeft";

}

homoCredit(5000, 40000);

/**
 * Created by PhpStorm.
 * User: Pragmadim
 * Date: 09.02.2019
 * Time: 16:10
 */