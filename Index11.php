<?php

/* 1. */

function digitron($x, $y, $ao) {

    if($ao=="+"){
        $rez = $x + $y;
    
    }elseif($ao=="-"){
        $rez = $x - $y;

    }elseif($ao=="*"){
        $rez = $x * $y;

    }elseif($ao=="/"){

        if($y==0){
            $rez = 0;
         
        }else{
            $rez = $x / $y;
        }

    }else{
        echo "Pogresan unos.";
    }
    return $rez;
}

echo digitron(5, 6, "*");

?>