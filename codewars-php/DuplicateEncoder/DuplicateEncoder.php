<?php

declare(strict_types=1);

# Duplicate Encoder

// Source: https://www.codewars.com/kata/54b42f9314d9229fd6000d9c

$word = 'Success';
print_r(duplicate_encode($word) . PHP_EOL);

function duplicate_encode(string $word): string
{
    $word = strtolower($word);  // 'success'
    $letters = str_split($word);
    $map = [];
    $result = '';

    foreach ($letters as $letter) {
        $map[$letter] = ($map[$letter] ?? 0) + 1;
    }

    foreach ($letters as $letter) {
        $result .= ($map[$letter] < 2) ? '(' : ')';
    }

    return $result;
}
