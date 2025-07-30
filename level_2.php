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
//Уровень 2.4
//№1
//Дана некоторая строка с буквами и цифрами. Получите позицию первой цифры в этой строке.
$StringNumAndTxt = 'jklondefvu2345890ghiptu45';
$searchFirstNum = function ($str)
{
    for ($i = 0; $i < strlen($str); $i++)
    {
        if (is_numeric($str[$i])) {
            return ($i + 1);
        }
    }
};
//print($searchFirstNum($StringNumAndTxt));
//№2
//Дан объект с ключами и значениями. Запишите в первый массив ключи объекта, а во второй - значения.
$massKeyValue = [
    'firstKey' => 'firstValue',
    'secondKey' => 'secondValue'
];
$onlyKeys = [];
$onlyValuess = [];
foreach ($massKeyValue as $key => $value) {
    $onlyKeys[] = $key;
    $onlyValuess[] = $value;
};
//print_r($onlyKeys);
//print_r($onlyValuess);

//№3
//Дано число. Выведите в консоль количество четных цифр в этом числе.
$evenCount = function ($inter) {
    $int = strval($inter);
    $count = 0;
    for ($i = 0; $i < strlen($int); $i++)
    {
        if ($int[$i] % 2 == 0) {
            $count ++;
        }
    }
    return $count;
};

//print_r($evenCount(34678945));
//№4
//Дана некоторая строка:
$notUpperStr = 'abcde';
//Переведите в верхний регистр все нечетные буквы этой строки. В нашем случае должно получится следующее:
//'AbCdE'
$res = '';
for ($i = 0; $i < strlen($notUpperStr); $i++) {
    if ($i % 2 == 0) {
        $res = $res . strtoupper($notUpperStr[$i]);
    } else {
        $res = $res . $notUpperStr[$i];
    }
}
//print_r($res);
//№5
//Дана некоторая строка со словами:
$stringa = 'aaa bbb ccc';
//Сделайте заглавным первый символ каждого слова в этой строке. В нашем случае должно получится следующее:
//'Aaa Bbb Ccc'
$anotherResult = '';
$srtingNewFrstUp = explode(" ", $stringa);
foreach ($srtingNewFrstUp as $index) {
    for ($i = 0; $i < strlen($index); $i++) {
        if ($i == 0) {
            $anotherResult = $anotherResult . strtoupper($index[$i]);
        } else {
            $anotherResult = $anotherResult . $index[$i];
        }
    }
}
//print_r($anotherResult);


//Уровень 2.5
//№1
//Дана некоторая строка, например, вот такая:
$stringHaveZeros = '023m0df0dfg0';
//Получите массив позиций всех нулей в этой в строке.
$massresults = [];
for ($i = 0; $i < strlen($stringHaveZeros); $i++) {
    if ($stringHaveZeros[$i] == 0) {
        $massresults[] = $i + 1;
    }
}
//print_r($massresults);

//№2
//Дана некоторая строка:
$anotherLine = 'abcdefg';
//Удалите из этой строки каждый третий символ. В нашем случае должно получится следующее:
//'abdeg'
$andAnotherRes = '';
for ($i = 0; $i < strlen($anotherLine); $i++) {
    if (($i + 1) % 3 != 0) {
        $andAnotherRes = $andAnotherRes . $anotherLine[$i];
    }
}
//print_r($andAnotherRes);

//№3
//Дан некоторый массив, например, вот такой:
$massForTask = [1, 2, 3, 4, 5, 6];
//Поделите сумму элементов, стоящих на четных позициях, на сумму элементов, стоящих на нечетных позициях.
$evenNum = 0;
$oddNum = 0;
for ($i = 0; $i < count($massForTask); $i++) {
    if (($i + 1)  % 2 == 0) {
        $evenNum = $evenNum + $massForTask[$i];
    } else {
        $oddNum = $oddNum + $massForTask[$i];
    }
}
//print_r($evenNum / $oddNum);

//Уровень 2.6
//№1
//Дана некоторая строка с буквами и цифрами. Получите массив позиций всех цифр из этой строки.

$stringForAnotherTask = 't25y80g2';
$newResult = [];
for ($i = 0; $i < strlen($stringForAnotherTask); $i++) {
    if (is_numeric($stringForAnotherTask[$i])) {
        $newResult[] = $i + 1;
    }
}
//print_r($newResult);

//№2
//Дан массив с некоторыми числами, например, вот такой:
$emaeAnotherMass = [123, 456, 789];
//Напишите код, который перевернет числа в этом массиве по следующему принципу:
//[321, 654, 987]
$aaaBlatResult = [];
foreach ($emaeAnotherMass as $indexoid) {
    $indexoid = strval($indexoid);
    $times = '';
    for ($i = 0; $i < strlen($indexoid); $i++) {
        $times = $indexoid[$i] . $times;
    }
    $aaaBlatResult[] = $times;
}
//print_r($aaaBlatResult);
//№3
//Дана некоторая строка с числом:
$taKakZaebali = '1234567';
//Отделите тройки цифр пробелами, начиная с конца числа. В нашем случае должно получится следующее:
//'1 234 567'
//$resString = $taKakZaebali;
$x = 1;
//for ($i = (strlen($taKakZaebali) - 1); $i >= 0; $i--) {
//    if ($x % 3 == 0) {
//        $resString = $resString[$i] . ' ';
//    } else {
//        $x ++;
//    }
//}
$resString = '';
for ($i = (strlen($taKakZaebali) - 1); $i >= 0; $i--) {
    if ($i % 3 == 0) {
        $x ++;
        $resString = $taKakZaebali[$i] . " " . $resString;
    } else {
        $x ++;
        $resString = $taKakZaebali[$i] . $resString;
    }
}
//print_r($resString);

//№4
//Дана некоторая строка:
$anotherBladskayaString = 'AbCdE';
//Смените регистр букв этой строки на противоположный. В нашем случае должно получится следующее:
//'aBcDe'
$anotherBlatRes = '';
for ($i = 0; $i < strlen($anotherBladskayaString); $i++) {
    if (ctype_upper($anotherBladskayaString[$i])) {
        $anotherBlatRes = $anotherBlatRes . strtolower($anotherBladskayaString[$i]);
    } else {
        $anotherBlatRes = $anotherBlatRes . strtoupper($anotherBladskayaString[$i]);
    }
}
//print_r($anotherBlatRes);
//№5
//Дан некоторый массив с числами, например, вот такой:
$zaebaloYze = [1, 2, 3, 4, 5, 6];
//Слейте пары элементов вместе:
//[12, 34, 56]

$chunks = array_chunk($zaebaloYze, 2);
$result = array_map(function($pair) {
    return (int)($pair[0] . $pair[1]);
}, $chunks);

//print_r($result);

//№6
//Дана некоторая строка со словами:
$plusOneMass = 'aaa bbb ccc eee fff';
//Сделайте заглавным первый символ каждого второго слова в этой строке. В нашем случае должно получится следующее:
//'aaa Bbb ccc Eee fff'
$anotherResultPlusOne = '';
$plusOneMassUnclimed = explode(" ", $plusOneMass);
$i = 1;
foreach ($plusOneMassUnclimed as $index) {
    if ($i % 2 == 1) {
        $anotherResultPlusOne = $anotherResultPlusOne . ucfirst($index) . ' ';
        $i ++;
    } else {
        $anotherResultPlusOne = $anotherResultPlusOne . $index . ' ';
        $i ++;
    }
}
//print_r($anotherResultPlusOne);

//Уровень 2.7
//№1
//Дана некоторая строка:
$danaNekotorayaStroka = 'a bc def ghij';
//Переведите в верхний регистр все подстроки, в которых количество букв меньше или равно трем. В нашем случае должно получится следующее:
//'A BC DEF ghij'
$futureResult = '';
$changeNekotorayaStroka = explode(" ", $danaNekotorayaStroka);
foreach ($changeNekotorayaStroka as $index) {
    if (strlen($index) > 3) {
        $futureResult = $futureResult . $index . ' ';
    } else {
        $futureResult = $futureResult . mb_strtoupper($index) . ' ';
    }
}
//print $futureResult;

//№2
//Дан символ. Узнайте, в каком регистре этот символ - в верхнем или нижнем.
$searcCase = function($char) {
    if (ctype_upper($char) == true) {
        return "Верхний регистр";
    } else {
        return "Нижний регистр";
    }
};
//print_r($searcCase('I'));
//№3
//Дано некоторое число, например, такое:
$numbersSnova = 123789;
//Удалите из этого числа все нечетные цифры. В нашем случае получится такой результат:
//28
$evenOnly = '';
$indexishe = (string) $numbersSnova;
for ($i = 0; $i < strlen( $indexishe); $i++) {
    if ($indexishe[$i] % 2 == 0) {
    $evenOnly = $evenOnly . $indexishe[$i];
    }
}
//print_r($evenOnly);
//Уровень 2.8
//№1
//Дана строка с буквами. Проверьте, что в этой строке не более двух заглавных букв.
$stringSbukvami = 'dhRG4f50FG';
$varble = 0;
for ($i = 0; $i < strlen($stringSbukvami); $i++) {
    if (ctype_upper($stringSbukvami[$i])) {
        $varble ++;
    }
}
//print_r("Заглавных букв: " . $varble);
//if ($varble < 2) {
//    print_r(" это хорошо");
//} else {
//    print_r(" эт плохо");
//}

//№2
//Дана некоторая строка:
$andThisString = '1 22 333 4444 22 5555 1';
//Удалите из этой строки все подстроки, в которых количество символов больше трех. В нашем случае должно получится следующее:
//'1 22 333 22 1'
$resSnova = '';
$promMassStr = explode(" ", $andThisString);
foreach ($promMassStr as $index) {
    if (strlen($index) <= 3) {
        $resSnova = $resSnova . $index . ' ';
    }
}
//print_r($resSnova);

//№3
//Даны два массива:
//$arr1 = [1, 2, 3];
//$arr2 = ['a', 'b', 'c'];
//Слейте эти массивы в новый массив следующим образом:
//[1, 2, 'a', 'b', 'c', 3]

$arr1 = [1, 2, 3];
$arr2 = ['a', 'b', 'c'];

// Вставляем в массив $arr1, начиная со 2-й позиции (сразу перед '3'),
// удаляя 0 элементов, массив $arr2.
array_splice($arr1, 2, 0, $arr2);

//print_r($arr1);


//Уровень 2.9
//№1
//Дано некоторое число:
$sumTwoNumb = "123456";
//Найдите сумму пар цифр этого числа. В нашем случае имеется ввиду следующее:
//12 + 34 + 56
$massresultsSum = [];
for ($i = 0; $i < strlen($sumTwoNumb); $i++) {
    if (($i+1) % 2 == 0) {
        $massresultsSum[] = $sumTwoNumb[$i-1] . $sumTwoNumb[$i];
    }
}
$resopyat = 0;
foreach ($massresultsSum as $index) {
    $resopyat = $resopyat + $index;
}

//print_r($resopyat);

//№2
//Дан массив с числами:
$recurceShowMass = [1, 2, 3, 4, 5];
//Выведите в консоль элементы этого массива в обратном порядке.
for ($i = count($recurceShowMass) - 1; $i >= 0 ; $i--) {
    //print_r($recurceShowMass[$i]);
}

//Уровень 2.10

//№1
//Дана строка с буквами и цифрами. Проверьте, что в этой строке не более трех букв.
$lastToDo = 'g32ykjk5';
$toDoCount = 0;
for ($i = 0; $i < strlen($lastToDo); $i++) {
    // Проверяем, является ли символ буквой
    if (ctype_alpha($lastToDo[$i])) {
        $toDoCount++;
    }
}
//if ($toDoCount >= 3) {
//    print "Больше 3";
//} else {
//    print "Меньше или равно 3";
//}

//№2
//Дано число. Получите первую четную цифру с конца этого числа.
$LastIntToDoin = 2345134333;
$LastIntToDo = (string)$LastIntToDoin;
for ($i = strlen($LastIntToDo) - 1; $i >= 0; $i--) {
    if (($LastIntToDo[$i]) % 2 == 0) {
        //print_r($LastIntToDo[$i]);
        //exit();
    }
}



//№3
//Дана некоторая строка:
//'abcde abcde abcde'
//Замените в ней первый символ каждого слова на '!':
//'!bcde !bcde !bcde'

$LastStringa = 'abcde abcde abcde';
$anotherResultLast = '';
$srtingNewFrstUpLast = explode(" ", $LastStringa);
foreach ($srtingNewFrstUpLast as $index) {
    for ($i = 0; $i < strlen($index); $i++) {
        if ($i == 0) {
            $anotherResultLast = $anotherResultLast . str_replace($index[$i], "!", $index) . " ";
        }
    }
}
//print_r($anotherResultLast);

//№4
//Дан массив с числами:
$ultraLastMassive = [1, 2, 3, 3, 4, 5];
//Проверьте, что в этом массиве есть два одинаковых элемента подряд.
$lastIndex = 0;
foreach ($ultraLastMassive as $index) {
    if ($index == $lastIndex) {
        //print_r($index . " встречается более одного раза подряд");
    }
    $lastIndex = $index;
}
?>