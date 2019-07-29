<?php

/* 1. Odrediti koliko elemenata u nizu celih brojeva ima maksimalnu vrednost.*/

$niz = array(1, 2, 3, 4, 5, 5);
$n = count($niz);
$max = $niz[0];
$br = 0;

foreach($niz as $i)
{   
    if($i > $max) 
    {
        $max = $i;
    }  
}

for ($i = 1; $i < $n; $i++) 
{
    if($niz[$i] == $max)
    {
        $br++;
    }
}

echo $br;
echo "<hr>";

/* 2. Odrediti indeks i vrednost prvog člana niza realnih brojeva koji je najbliži srednjoj vrednosti.*/

$niz = array(1, 2, 3, 4, 5, 5);
$n = count($niz);
$sum = 0;
$index = 0;

foreach($niz as $i)
{
    $sum += $i;
}

echo $sr = $sum / $n;
echo "<br>";

$min = $niz[0];

for ($i = 1; $i < $n; $i++) 
{   
    if(abs($niz[$i] - $sr) < $min)
    {
        $min = abs($niz[$i] - $sr);
        $vrednost = $niz[$i];
        $index = $i;
    }
}

echo $vrednost;
echo "<br>";
echo $index;

?>