<?php

# Проверить строку на полиндром
# Решение оптимальное, но на техе могут и не принять

$res = isPalindrome('level1');
$res = ($res ? 'true' : 'false');
print_r($res."\n");

function isPalindrome(string $str): bool
{
    return $str === strrev($str);
}
