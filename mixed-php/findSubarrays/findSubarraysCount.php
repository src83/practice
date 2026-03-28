<?php
// Нужно найти количество подмассивов (непрерывных), сумма которых равна k.

$nums = [1, 2, 1, 3];
$k = 3;

$res = findSubarraysCount($nums, $k);
print_r($res . PHP_EOL);


function findSubarraysCount(array $nums, int $k): int
{
    $count = 0;

    $sum = 0;
    $map = [0 => 1];

    foreach ($nums as $n) {

        $sum += $n;

        if (isset($map[$sum - $k])) {
            $count += $map[$sum - $k];
        }

        $map[$sum] = ($map[$sum] ?? 0) + 1;
    }

    return $count;
}
