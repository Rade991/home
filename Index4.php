<?php

$niz = array(1, 2, 3, 4, 5);
$n = count($niz);
$sum = 0;
$max = $niz[0];
$min = $niz[0];

for($i =0; $i < $n; $i++)
{
    $sum = $sum + $niz[$i];

    if($niz[$i] > $max)
    {
        $max = $niz[$i];
    }

    elseif($niz[$i] < $min)
    {
        $min = $niz[$i];
    }
}

/* 1. */

$rez = $sum / $n;
echo $rez;
echo "<hr>";

/* 2. */

echo $max;
echo "<hr>";

/* 3. */

echo $min;

?>