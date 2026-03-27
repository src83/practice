# Задача: для строки посчитать, сколько раз встречается каждый символ.

$str = 'hello';
#$count = countChars($str);
#print_r($count);

$count = array_count_values(str_split($str));
print_r($count);

function countChars(string $str): array
{
    $result = [];

    if ($str === '') {
        return $result;
    }

    for ($i = 0; $i < strlen($str); $i++) {

        $char = $str[$i];

        if (!isset($result[$char])) {
            $result[$char] = 0;
        }
        $result[$char]++;
    }

    return $result;
}
