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

//Уровень 2.2
//№1
//Дан массив с числами. Подсчитайте количество отрицательных чисел в этом массиве.
$massIn = [-21, 23, 7, 233, -123, -56, -78, 23, 8, 0];
$lvlOneDotOne = function () use ($massIn){
    $resss = 0;
    foreach ($massIn as $mass)
    {
        if ($mass < 0) {
            $resss += 1;
        }
    }
    return $resss;
};

//print($lvlOneDotOne());
//№2
//Дан массив с числами. Оставьте в нем только положительные числа.
$lvlOneDotOneAnother = function () use ($massIn){
    $resss = 0;
    foreach ($massIn as $mass)
    {
        if ($mass > 0) {
            $resss += 1;
        }
    }
    return $resss;
};

//print($lvlOneDotOneAnother());

//№3
//Дана строка. Удалите предпоследний символ из этой строки.
$delPerLast = function ($str)
{
    return substr_replace($str, '', -2, 1);
};
//print_r($delPerLast($stringSearchZero));
//№4
//Дана некоторая строка. Найдите позицию первого нуля в строке.

//print($searchZero($stringSearchZero));

//№5
//Дан некоторый массив, например, вот такой:
//[1, 2, 3, 4, 5, 6]
//Поделите сумму первой половины элементов этого массива на сумму второй половины элементов.
$array = [1, 2, 3, 4, 5, 6];
$chunks = array_chunk($array, count($array) / 2);
$sumFirst = array_sum($chunks[0]);
$sumSecond = array_sum($chunks[1]);
$result = $sumFirst / $sumSecond;

//echo $result;


//Уровень 2.3 задачника PHP
//№1
//Даны два слова. Проверьте, что последняя буква первого слова совпадает с первой буквой второго слова.

function twoWordsСompare($frst, $scnd)
{
    $charFrst = strtolower(mb_substr($frst, -1, 1));
    $charScnd = strtolower(mb_substr($scnd, 0, 1));

    $charScnd;
    if ($charFrst == $charScnd) {
        return "true";
    } else {
        return "false";
    }

}
//print_r(twoWordsСompare("FIrst", "Second"));

//№2
//Дана некоторая строка. Найдите позицию третьего нуля в строке.
$stringSearchZeroThree = '0hfdi490ghg599305j8ggh0d';

$searchZeroAnother = function ($str)
{
    $ind = 0;
    for ($i = 0; $i < strlen($str); $i++)
    {

        if ($str[$i] == '0') {
             $ind ++;
             if ($ind == 3) {
                 return ($i + 1);
             }
        }
    }
};
//print($searchZeroAnother($stringSearchZeroThree));

//№3
//Даны числа, разделенные запятыми:
$innNumbersString = '12,34,56';
//Найдите сумму этих чисел.

$massNumbersNoSrting = explode(",", $innNumbersString);
$resss = 0;
foreach ($massNumbersNoSrting as $mass) {
    $resss += $mass;
}
//print_r($resss);


//№4
//Дана дата в следующем формате:
$dataString = '2025-12-31';
$namesMass = ['year', 'month', 'day'];
//Преобразуйте эту дату в следующий массив:
//[
//    'year'  => '2025',
//    'month' => '12',
//    'day'   => '31',
//]
$dataNoSrting = explode("-", $dataString);
$dataNoSrtingKeys = [];
for ($i = 0; $i < count($namesMass); $i++)
{
    $dataNoSrtingKeys[$namesMass[$i]] = $dataNoSrting[$i];
}
//print_r($dataNoSrtingKeys);