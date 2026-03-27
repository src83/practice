<?php

declare(strict_types=1);

# Encrypt this

// Source: https://www.codewars.com/kata/5848565e273af816fb000449

#$text = 'A';
#$text = '  Abcd   qwe 123';
#$text = 'A12345 B1234';
$text = 'hello world';
$res = encryptThis($text);
print_r($res . PHP_EOL);


function encryptThis(string $text): string
{
    $line = trim($text);

    if (str_contains($line, ' ')) {
        $arr = explode(' ', $line);
        $arr = array_filter($arr);
        $arr = array_values($arr);
        $line = implode(' ', $arr);
    }

    $arr = explode(' ', $line);

    foreach ($arr as $k => $row) {
        $length = strlen($row);
        $last = $length - 1;

        $letters = str_split($row);
        $letters[0] = ord($letters[0]);

        if ($length >= 3) {
            $tmp = $letters[1];
            $letters[1] = $letters[$last];
            $letters[$last] = $tmp;
        }

        $arr[$k] = implode('', $letters);
    }

    return implode(' ', $arr);
}
