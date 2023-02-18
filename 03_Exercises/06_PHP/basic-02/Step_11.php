<?php
function prime($number)
{
    if ($number == 1) {
        return 0;
    }
    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            return 0;
        }
    }
    return 1;
}

$n = rand(1,10000);
$result = prime($n);
if ($result == 1) {
    echo "$n is a Prime";
} else {
    echo "$n is Not a Prime";
}

?>