<?php
function faktorial($n)
{
    if ($n == 0) {
        return 1;
    } else {
        return $n * faktorial($n - 1);
    }
}

$n = 0;
$faktorial = faktorial($n);
echo "faktorial dari $n adalah $faktorial";
