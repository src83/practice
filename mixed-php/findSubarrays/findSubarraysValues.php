<?php
// Нужно найти количество подмассивов (непрерывных), сумма которых равна k.

$nums = [1, 2, 1, 3];
$k = 3;

$res = findSubarraysValues($nums, $k);
print_r($res . PHP_EOL);


function findSubarraysValues(array $nums, int $k): int
{
    $res = [];

    $n = count($nums);  // 4

    for ($i = 0; $i < $n; $i++) {
        $sum = 0;
        for ($j = $i; $j < $n; $j++) {
            $sum += $nums[$j];
            if ($sum === $k) {
                $res[] = array_slice($nums, $i, $j - $i + 1);
            }
        }
    }

    return count($res);
}
