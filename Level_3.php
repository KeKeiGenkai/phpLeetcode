<?php
//Уровень 3.1
//№1
//Дано некоторое число. Проверьте, что цифры этого числа расположены по возрастанию.
$ThreeDotOneExOne = new class {
    function method($in) {
        $result = "по возрастанию";
        $index = (string)$in;
        for ($x = 1; $x < strlen($index); $x++) {
            if ($index[$x - 1] > $index[$x] ) {
                print "не по возрастанию";
                break;
            }
        }
        return $result;
    }
};
//echo $ThreeDotOneExOne->method(12345567);

//№2
//Дан массив:
//[1, '', 2, 3, '', 5]
//Удалите из массива все пустые строки.
$ThreeDotOneExTwo = new class {
    function method($in) {
        $result = $in;
        foreach ($result as $k => $v) {  // получаем и ключ ($k), и значение ($v)
            if ($v === '') {            // строгое сравнение с пустой строкой
                unset($result[$k]);      // удаляем по ключу
            }
        }
        return $result;
    }
};
//print_r($ThreeDotOneExTwo->method([1, '', 2, 3, '', 5]));
//№3
//Дан массив:
//[
//    [2, 1, 4, 3, 5],
//    [3, 5, 2, 4, 1],
//    [4, 3, 1, 5, 2],
//]
//Отсортируйте элементы в каждом подмассиве.
$ThreeDotOneExThree = new class {
    function method($in) {

    }
};
echo $ThreeDotOneExThree->method(12345567);

//№4
//Даны два массива:
//$arr1 = [1, 2, 3];
//$arr2 = [1, 2, 3, 4, 5];
//Удалите из большего массива лишние элементы с конца так, чтобы длины массивов стали одинаковыми.
$ThreeDotOneExFour = new class {
    function method($in) {

    }
};
echo $ThreeDotOneExFour->method(12345567);
?>