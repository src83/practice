<?php

declare(strict_types=1);

# Split Strings

// Source: https://www.codewars.com/kata/515de9ae9dcfc28eb6000001

$line = 'abc';
print_r(solution($line));

function solution(string $line): array
{
    $result = [];
    $lim = strlen($line);

    for ($i = 0; $i < $lim; $i += 2) {
        $result[] = $line[$i] . ($line[$i + 1] ?? '_');
    }

// Альтернативный вариант обхода
//    $i = 0;
//    while ($i < strlen($line)) {
//        $result[] = $line[$i] . ($line[$i + 1] ?? '_');
//        $i += 2;
//    }

    return $result;
}
