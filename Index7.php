<?php

/* 19. */

$a = array(-5, -4, -3, -2, -1, 0, 1, 2, 3, 4, 5);
$b = array();

for($i = 0; $i < count($a); $i++)
{
    if($a[$i] > 0)
    {
        $b[] = $a[$i];
    }
}

echo "Pozitivne vrednosti niza a u nizu b:"; print_r($b);
echo "<hr>";

/* 21. */

$a = array(5, 8, 9, -2);
$b = array(7, 0, -1, 2);
$c = array();

for($i = 0; $i < count($a); $i++)
{
    $c[] = $a[$i] * $b[$i];
}

print_r($c);

?>