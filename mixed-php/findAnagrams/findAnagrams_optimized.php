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

function findAnagrams(array $words): array
{
    $groups = [];

    foreach ($words as $word) {
        $key = order($word);
        $groups[$key][] = $word;
    }

    return array_values($groups);
}

function order(string $line): string
{
    $chars = str_split($line);
    sort($chars);
    return implode('', $chars);
}
