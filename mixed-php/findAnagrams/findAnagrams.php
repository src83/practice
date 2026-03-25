<?php

/*
На вход функции подаётся массив строк. Необходимо написать функцию, которая найдет все анаграммы среди этих строк и
сгруппирует их вместе. Анаграмма — это слово или фраза, образованная путем перестановки букв другого слова или фразы,
обычно используя все исходные буквы ровно один раз.

**Примеры:**

- Вход: `["cat", "dog", "tac", "god", "act"]`
- Выход: `[["cat", "tac", "act"], ["dog", "god"]]`
*/

$words = ["cat", "dog", "tac", "god", "act"];
$response = findAnagrams($words);
print_r($response);

// Bad solution
function findAnagrams(array $words): array
{
    $src = array_flip($words);

    foreach ($src as $key => $val) {

        $src[$key] = order($key);  // fingerPrint

        $buff = [];
        foreach ($src as $k => $v) {
            if ($k === $key) { continue; }

            if($src[$key] === order($k)) {
                $buff[] = $k;
            }
        }

        array_unshift($buff, $key) ;
        #$src[$key] = $buff;
        $src[$key] = implode(',', $buff); // если хотим строку
    }

    return $src;
}


function order(string $line): string
{
    $chars = str_split($line);
    sort($chars);
    return implode('', $chars);
}
