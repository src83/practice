<?php

declare(strict_types=1);

# Duplicate Encoder

// Source: https://www.codewars.com/kata/54b42f9314d9229fd6000d9c

$word = 'Success';
print_r(duplicate_encode($word) . PHP_EOL);

function duplicate_encode(string $word): string
{
    $word = strtolower($word);  // 'success'
    $lim = strlen($word);
    $map = [];
    $result = '';

    for ($i = 0; $i < $lim; $i++) {
        $map[$word[$i]] = ($map[$word[$i]] ?? 0) + 1;
    }

    for ($i = 0; $i < $lim; $i++) {
        $result .= ($map[$word[$i]] === 1) ? '(' : ')';
    }

    return $result;
}
