<?php

declare(strict_types=1);

# Range Extraction
# 4 kyu
# Source: https://www.codewars.com/kata/51ba717bb08c1cd60f00002f

$list = [-10, -9, -8, -6, -3, -2, -1, 0, 1, 3, 4, 5, 7, 8, 9, 10, 11, 14, 15, 17, 18, 19, 20];
$res = solution($list);
print_r($res . PHP_EOL);


function solution(array $list): string
{
    $result = [];
    $range = [];

    $count = count($list);

    foreach($list as $k => $item) {

        $range[] = $item;

        // если последний элемент или разрыв последовательности
        if ($k + 1 === $count || $list[$k + 1] !== $item + 1) {

            $len = count($range);

            if ($len >= 3) {
                $result[] = $range[0] . '-' . $range[$len - 1];
            } elseif ($len === 2) {
                $result[] = (string)$range[0];
                $result[] = (string)$range[1];
            } else {
                $result[] = (string)$range[0];
            }

            $range = [];
        }

    }

    return implode(',', $result);
}
