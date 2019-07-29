<html>
<head>
<style>

</style>
</head>
</html>

<?php

//  Za učitani broj ispitati da li je ceo.

//Preuzeti redni broj meseca sa računara i ispisati koliko taj mesec ima dana. Ukoliko je u pitanju mesec februar, preuzeti i godinu sa računara, ispitati da li je godina prestupna i na osnovu toga ispisati broj dana meseca februara.

//Preuzeti sa interneta tri slike i imenovati ih 1, 2 i 3. For petljom u HTML-u ispisati svaku od sličica uz pomoć brojača (iteratora).

//Zatim napisati funkciju maks4 koja vraća najveći od četiri prosleđena realna broja.

//Napraviti funkciju koja prikazuje sliku za prosledjenu adresu slike.

function img($a) {
    echo "<img src='$a'>";
}

img("https://www.srbijadanas.com/sites/default/files/styles/full_article_image/public/a/t/2019/01/14/jaje.jpg");


//Napraviti funkciju koja za unetu boju na engleskom jeziku boji tekst paragrafa u tu boju.

function color($a) {
    echo "<p style='color:$a';>Ja</p>";
}

color("red");

//Napraviti funkciju kojoj se prosleđuje ceo broj a ona ispisuje tekst koji ima prosleđenu veličinu fonta.

$text = "Tito i ja";

function font($a) {
    echo "<p style='font size:$a';>$text</p>";
}

font(18); //Ne radi mi ovaj zadatak.


 ?>