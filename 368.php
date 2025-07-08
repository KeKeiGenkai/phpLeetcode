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

}


//№2
//Даны два целых числа. Проверьте, что первое число без остатка делится на второе.

