<?php

# правильный вариант подсчёта - через определение частот
# hashmap

$nums = [2, 3, 2, 5, 3, 2];
$res = countNums($nums);
print_r($res);

function countNums(array $nums): array
{
    $frequencies = [];

    foreach ($nums as $num) {
        $frequencies[$num] = ($frequencies[$num] ?? 0) + 1;
    }

    return $frequencies;
}