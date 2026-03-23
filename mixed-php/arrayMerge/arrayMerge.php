<?php

/* arrayMerge */
# Есть два отсортированных массива целых чисел. Необходимо составить третий массив, который будет
# включать все элементы этих двух массивов, сохраняя сортировку. Сделать алгоритм с минимальной сложностью.

$arr1 = [1,2,3];    // count: 3
$arr2 = [4,5,6,7];  // count: 4

#$arr1 = [1,3,5];    // count: 3
#$arr2 = [2,4,6,7];  // count: 4

$res = arrayMerge($arr1, $arr2);
print_r($res);


function arrayMerge(array $arr1, array $arr2): array
{
    $result = [];
    $i = 0;
    $j = 0;

    while ($i < count($arr1) && $j < count($arr2)) {

        if ($arr1[$i] < $arr2[$j]) {
            $result[] = $arr1[$i];
            $i++;
        } else {
            $result[] = $arr2[$j];
            $j++;
        }
    }

    while ($i < count($arr1)) {
        $result[] = $arr1[$i];
        $i++;
    }

    while ($j < count($arr2)) {
        $result[] = $arr2[$j];
        $j++;
    }

    return $result;
}
