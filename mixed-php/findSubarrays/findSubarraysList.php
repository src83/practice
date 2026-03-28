<?php
// Нужно найти содержимое подмассивов (непрерывных), сумма которых равна k.

$nums = [1, 2, 1, 3];
$k = 3;

$res = findSubarraysList($nums, $k);
print_r($res);


function findSubarraysList(array $nums, int $k): array
{
    $result = [];
    $sum = 0;

    // сумма => список индексов
    $map = [0 => [-1]];

    foreach ($nums as $i => $num) {
        $sum += $num;

        if (isset($map[$sum - $k])) {
            foreach ($map[$sum - $k] as $startIndex) {
                $result[] = array_slice($nums, $startIndex + 1, $i - $startIndex);
            }
        }

        $map[$sum][] = $i;
    }

    return $result;
}
