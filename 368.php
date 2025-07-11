<?php

    /**
     * @param Integer $n
     * @return Integer[]
     */
    function lexicalOrder($n) {

        $result = [];
        $curr = 1;
        for ($i = 0; $i < $n; $i++) {
            $result[] = $curr;

            if ($curr * 10 <= $n) {
                $curr *= 10;
            } elseif ($curr % 10 != 9 && $curr + 1 <=$n) {
                $curr += 1;
            } else {
                while (($curr % 10 == 9 || $curr + 1 >$n) && $curr > 0) {
                $curr = intdiv($curr, 10);
            }
                $curr += 1;
            }
        }
        return $result;
    }


//print_r(lexicalOrder(13));


    function negativeOrPositive($n) {
        if ($n > 0) {
            print($n . " это Положительное число");
        } elseif ($n < 0) {
            print($n . " это Отрицательное число");
        } else {
            print($n . " Равно 0 или не существует");
        }
    }
//(negativeOrPositive(0));

    function lengthStpring($str) {
        $fin = strlen($str);
        return $fin;
    }
//print(lengthStpring("pinisi"));

//№3
//Дана строка. Выведите в консоль последний символ строки.


function lastChar($str) {
    return mb_substr($str, -1);
}
//print (lastChar("pipiski"));


//№4
//Дано число. Проверьте, четное оно или нет.

function evenOddNumb($int){
    if ($int % 2 == 0) {
        return "even";
    } else {
        return "odd";
    }
}

//print (evenOddNumb("229"));


//№5
//Даны два слова. Проверьте, что первые буквы этих слов совпадают.

function syncOrNot($frts, $scnd){
        if ($frts[0] === $scnd[0]) {
            return "Совпадают";
        } else {
            return "не совпадают";
        }
}

//print syncOrNot("penisi", "piski");


//№6
//Дано слово. Получите его последнюю букву. Если слово заканчивается на мягкий знак, то получите предпоследнюю букву.


function lastCharSoft($str) {
    if (lastChar($str) !== "ь") {
        return lastChar($str);
    } else {
        return mb_substr($str, -2, 1);
    }
}

//echo lastCharSoft("беляшь");
//phpinfo();


//№1
//Дано число. Выведите в консоль первую цифру этого числа.

function firstCharInt($int)
{
    $string = (string)$int;

    return mb_substr($string, 0, 1);
}

//print firstCharInt("52");


//№2
//Дано число. Выведите в консоль последнюю цифру этого числа.

function lastCharInt($int)
{
    $string = (string)$int;
    return lastChar($string);

}
//print lastCharInt("52");


//№3
//Дано число. Выведите в консоль сумму первой и последней цифры этого числа.

function sumLastFirst($int)
{
    return lastCharInt($int) + firstCharInt($int);
}
//print sumLastFirst(55);

//№4
//Дано число. Выведите количество цифр в этом числе.

function legthFromInt($int)
{
    //$string = (string)$int;
    return strlen($int);

}
//print legthFromInt(238767678344);


//№5
//Даны два числа. Проверьте, что первые цифры этих чисел совпадают.

function equalFrstLstChar($int)
{
    if (lastCharInt($int) == firstCharInt($int)) {
        return "Ахуеть, они одинаковые";
    } else {
        return "Циферки то разные";
    }
}

//print equalFrstLstChar(46674);


//№1
//Дана строка. Если в этой строке более одного символа, выведите в консоль предпоследний символ этой строки.

function moreOneChar($string)
{
    if (legthFromInt($string) < 1) {
        return "nothing";
    } else {
        return mb_substr($string, -2, 1);
    }
}

//print moreOneChar("zaraza");


//№2
//Даны два целых числа. Проверьте, что первое число без остатка делится на второе.

function wholeNumber($int1, $int2)
{
    if (($int1 % $int2) == 0) {
        return "whole";
    } else {
        return "Not Whole";
    }
}

//print wholeNumber(10, 6);


//№1
//Выведите в консоль все целые числа от 1 до 100.
function oneHundred()
{
    for ($int = 1; $int <= 100; $int++) {
        print($int . PHP_EOL);
    }
}
//print oneHundred();

//№2
//Выведите в консоль все целые числа от -100 до 0.
function minHundred()
{
    for ($int = -100; $int <= 0; $int++) {
    print($int . PHP_EOL);
    }
}
//print (minHundred());

//№3
//Выведите в консоль все целые числа от 100 до 1.
function hundredOne()
{
    for ($int = 100; $int >= 1; $int--) {
        print($int . PHP_EOL);
    }
}
//print hundredOne();

//№4
//Выведите в консоль все четные числа из промежутка от 1 до 100.
function hundredWhole()
{
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 2 == 0) {
            print($i . PHP_EOL);
        }
    }
}
//print hundredWhole();


//№5
//Выведите в консоль все числа кратные трем в промежутке от 1 до 100.

function hundredWholeXthree()
{
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 3 == 0) {
            print($i . PHP_EOL);
        }
    }
}

//print hundredWholeXthree();

//№1
//Найдите сумму всех целых чисел от 1 до 100.
function sumHundred()
{
    $count = 0;
    for ($int = 1; $int <= 100; $int++) {

        $count = $count + $int;
    }
    return $count;
}
//print sumHundred();

//№2
//Найдите сумму всех целых четных чисел в промежутке от 1 до 100.
function sumHundredWhole()
{
    $count = 0;
    for ($int = 1; $int <= 100; $int++) {
        if ($int % 2 == 0) {
            $count = $count + $int;;
        }
    }
    return $count;
}
//print sumHundredWhole();

//№3
//Найдите сумму всех целых нечетных чисел в промежутке от 1 до 100.
function sumHundredNotWhole()
{
    $count = 0;
    for ($int = 1; $int <= 100; $int++) {
        if ($int % 2 != 0) {
            $count = $count + $int;;
        }
    }
    return $count;
}
//print sumHundredNotWhole();
//№4
//Даны два целых числа. Найдите остаток от деления первого числа на второе.
function remainder($int1, $int2)
{
    return ($int1 % $int2);
}
//print remainder(20, 6);

//№5
//Дана некоторая строка. Переберите и выведите в консоль по очереди все символы с конца строки.

function decrease($string)
{
    $fin = "";
    $len = strlen($string);
    for ($i = $len; $i >= 0; $i--) {
        $fin = $fin . mb_substr($string, $i, 1);
    }
    return $fin;
}
//print decrease("Улыбок тебе дед Мокар");

//Уровень 1.6 PHP
//№1
//Дан массив с числами. Найдите сумму квадратов элементов этого массива.
function sumXsum($numbers)
{
    $result = 0;
    $len = count($numbers);
    for ($int = 0; $int <= ($len - 1); $int++) {
        $result += ($numbers[$int] * $numbers[$int]);
    }
    return $result;
}
//print sumXsum([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);

//№2
//Дан массив с числами. Найдите сумму квадратных корней элементов этого массива.
function sumNotXsum($numbers)
{
    $result = 0;
    $len = count($numbers);
    for ($int = 0; $int <= ($len - 1); $int++) {
        $result += sqrt($numbers[$int]);
        print ($result . PHP_EOL);
    }
    return $result;
}
//print sumNotXsum([1, 4, 9, 16, 25, 36, 49, 64, 81, 100]);

//№3
//Дан массив с числами. Найдите сумму положительных элементов этого массива.
function sumPositiveNum($numbers)
{
    $result = 0;
    $len = count($numbers);
    foreach ($numbers as $i)
    {
        if ($i > 0) {
            $result += $i;
            print ($i . PHP_EOL);
        }
    }
    return $result;
}
//print sumPositiveNum([2, -3, 4, 5, 6, -7, -8, -9, 10]);

//№4
//Дан массив с числами. Найдите сумму тех элементов этого массива, которые больше нуля и меньше десяти.

function sumPositiveNumBut($numbers)
{
    $result = 0;
    $len = count($numbers);
    foreach ($numbers as $i)
    {
        if (($i > 0) && ($i < 10)) {
            $result += $i;
            print ($i . PHP_EOL);
        }
    }
    return $result;
}
//print sumPositiveNumBut([2, -3, 4, 5, 6, -7, -8, -9, 50, -50]);

//Уровень 1.7

//№1
//Дана строка:
//'abcde'
//Получите массив букв этой строки.

function stringToMass($string)
{
    $result = [];

    for ($i = 0; $i < strlen($string); $i++) {
        $result[] = mb_substr($string, $i, 1);
    }

    return $result;
}

//print_r( stringToMass("abcde"));

//№2
//Дано некоторое число:
//12345
//Получите массив цифр этого числа.

$string = 12345;
$array = str_split($string);

//print_r($array);
//print_r( stringToMass("12345"));


//№3
//Дано некоторое число:
//12345
//Переверните его:
//54321

//print decrease(12345);


//№4
//Дано некоторое число:
//12345
//Найдите сумму цифр этого числа.
function oneTwoThreeAndMore($int)
{
    $processed = stringToMass($int);
    return sumPositiveNum($processed);
}

//print_r (oneTwoThreeAndMore(12345));

//Уровень 1.8
//№1
//Заполните массив целыми числами от 1 до 10.

function massTen()
{
    $result = [];

    for ($i = 1; $i <= 10; $i++) {
        $result[] = ($i);
    }

    return $result;
}
//print_r(massTen());
//№2
//Заполните массив четными числами из промежутка от 1 до 100.

function massEven()
{
    $result = [];

    for ($i = 1; $i <= 100; $i++) {
        if ($i  % 2 == 0) {
            $result[] = ($i);

        }
    }

    return $result;
}
//print_r(massEven());

//№3
//Дан массив с дробями:
//[1.456, 2.125, 3.32, 4.1, 5.34]
//Округлите эти дроби до одного знака в дробной части.
$fractions = [1.456, 2.125, 3.32, 4.1, 5.34];
$result = array_map(function($number) {
    return round($number, 1);
}, $fractions);
//print_r($result);