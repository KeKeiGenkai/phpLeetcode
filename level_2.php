<?php
//Уровень 2.1
//№1
//Дана некоторая строка. Найдите позицию первого нуля в строке.
$stringSearchZero = 'hfdi49ghg599305j8gghd';

$searchZero = function ($str)
{
    for ($i = 0; $i < strlen($str); $i++)
    {
        if ($str[$i] == '0') {
            return ($i + 1);
        }
    }
};
//print($searchZero($stringSearchZero));
//№2
//Выведите в консоль все числа в промежутке от 1 до 1000, сумма первой и второй цифры которых равна пяти.
$sumInNumber = function () {
    $res = [0];
    for ($i = 1; $i < 1000; $i++)
    {
        if ($i === 5)
        {
            $res[] = $i;
        } elseif (($i > 10) && ($i < 100))
        {
            if ((int)($i / 10) + ($i % 10) == 5) {
                $res[] = $i;
            }
        } elseif (($i > 100) && ($i < 1000))
        {
            if ((int)($i / 100) + (($i / 10) % 10) == 5) {
                $res[] = $i;
            }
        }
    }
    return $res;
};
//print_r($sumInNumber());
//№3
//Дан массив. Удалите из него элементы с заданным значением. 456
$massForDel = [26, 36, 657, 456, 9, 456, 456, 22, 456, 23, 456, 76];
$massForDelRes = [];
foreach ($massForDel as $mass) {

    if ($mass != 456) {
        $massForDelRes[] = $mass;
    }
}
//print_r($massForDelRes);

//№4
//Дан некоторый массив, например, вот такой:
$searchFirstHalfSum = [1, 2, 3, 4, 5, 6];
//Найдите сумму первой половины элементов этого массива.
$searchFirstHalfSumRes = function ($x)
{
    $sum = 0;
    $y = (count($x) / 2);
    for ($i = 0; $i < ($y); $i++)
    {
        $sum += $x[$i];
    }
    return $sum;
};
//print_r($searchFirstHalfSumRes($searchFirstHalfSum));