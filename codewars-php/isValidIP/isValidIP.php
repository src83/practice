<?php

declare(strict_types=1);

// Source: https://www.codewars.com/kata/515decfd9dcfc23bb6000006

#$ip = '127.25.1.2';
$ip = '123.45.67.9';

$isValid = isValidIP($ip);
$res = ($isValid) ? 'true' : 'false';
print_r($res . PHP_EOL);


function isValidIP(string $ip): bool
{
    $octets = explode('.', $ip);
    if (count($octets) !== 4) { return false; }

    $c = 1;
    foreach ($octets as $octet) {
        print_r($c . ' - ' . $octet . PHP_EOL);

        if (!ctype_digit($octet)) { return false; }  // только цифры

        if (
            (strlen($octet) === 2 && $octet[0] === '0')
            ||
            (strlen($octet) === 3 && $octet[0] === '0')
        )
            { return false; }

        $num = (int) $octet;
        if ($num < 0 || $num > 255) { return false; }

        $c++;
    }

    return true;
}


# if (validateOctet($octet) === false) {return false;}
//function validateOctet(string $octet): bool
//{
//    $isValid = true;
//    print_r($octet . PHP_EOL);
//    return $isValid;
//}

# if (is_int($octet)) { print_r('int' . PHP_EOL); } else { print_r('string' . PHP_EOL); }
# if ($octet === '1') { $isValid = false; }
# if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) { return false; }


//function isValidIP(string $str): bool
//{
//    // TODO
//    return false;
//}
