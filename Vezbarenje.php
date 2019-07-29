<html>
<body>
    <table border="2">
        <tr>
            <?php celija("","tralala"); ?>
            <?php celija("i","tralala"); ?>
            <?php celija("","tralala"); ?>
        </tr>
        <tr>
            <?php celija("i","tralala"); ?>
            <?php celija("","tralala"); ?>
            <?php celija("i","tralala"); ?>
        </tr>
    </table> 
        <form>
            <label> Primer upotrebe color polja: </label>
            <input type = "color" value="#ff0000">   
        </form>
</body>
</html>

<?php

// Napraviti funkciju koja pet puta ispisuje istu rečenicu, a veličina fonta rečenice treba da bude jednaka vrednosti iteratora. 



function ispis ($text){
    for($i=45; $i<=70; $i=$i+5){
        echo "<p style='font-size:$i;'>$text</p>";
    }
}
ispis("trasfsadasd");

// 1. Zadatak
// Napisati funkciju digitron koja prima tri parametra: Prva dva su brojevi, a treći je karakter koji predstavlja aritmetičku operaciju (‘+’, ‘-’, ‘*’ ili ‘/’). Potrebno je da funkcija izvrši odgovarajuću aritmetičku operaciju nad zadatim brojevima.
// Na primer, digitron(5, 8, ‘*’) kao rezultat daje 5 * 8 = 40

function digitron ($a,$b,$op){
    $c = eval("return $a $op $b;");
    echo $c;
}
digitron(2,3,"*");

// 2. Zadatak
// Napisati funkciju koja ispisuje ćeliju tabele <td>. Kao prvi parametar prima logičku promenljivu da li je tekst u ćeliji iskošen ili ne, a kao drugi parametar tekst koji se prikazuje unutar te ćelije. U telu HTML dokumenta kreirati tabelu dimenzija 2 x 3, a unutar nje pozvati šest puta funkciju sa proizvoljnim tekstom.Potrebno je da tekst u ćelijama naizmenično bude iskošen. Na primer:

function celija($italic, $text){
    if($italic=="i"){
        echo "<td><i>$text</i></td>";
    }else{
        echo "<td>$text</td>";
    }
}
echo "<hr>";

// Odrediti indeks i vrednost prvog člana niza realnih brojeva koji je najbliži srednjoj vrednosti.
$niz = array (1,2,3,4,5);
$sum=0;
foreach($niz as $value){
    $sum+=$value;
}
$sr=$sum/count($niz);
echo $sr;

$naj = abs($niz[0]-$sr);

for($i=0; $i<count($niz); $i++){
    if ( abs($niz[$i]-$sr) < $naj ) {
        $naj = abs($niz[$i]-$sr);
        $najblizi = $niz[$i];
        $index = $i;
    }
}
echo "Najblizi srednjoj vrednosti je $najblizi ,  a njegov index je $index";



?>