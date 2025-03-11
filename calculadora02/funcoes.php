<?php

    function quadrilatero($ladoA, $ladoB){
        return $ladoA * $ladoB;
    }

    function triangulo($base, $altura){
        return ($base * $altura) /2;
    }

    function equacao($a, $b){
        if ($a == 0) {
            if ($b == 0) {
                return "A equação tem infinitas soluções.";
            } else {
                return "A equação não tem solução.";
            }
        }  
        return -$b / $a;  //$x = -$b / $a;
    }
    
?>