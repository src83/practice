<?php

# Проверить строку на полиндром

$res = isPalindrome('level1');
$res = ($res ? 'true' : 'false');
print_r($res."\n");

function isPalindrome(string $str): bool
{
    $left = 0;
    $right = strlen($str) -1;

    while ($left < $right) {
        if ($str[$left] !== $str[$right]) {
            return false;
        }
        $left++;
        $right--;
    }
    return true;
}
