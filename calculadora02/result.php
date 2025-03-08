<?php
/*
  Crie um programa que receba dois números do usuário a partir de um formulário HTML
  que o mesmo escolha um dos seguintes calculos:
    - Área do Quadrilatero
    - Área do Triangulo
    - Equação do 1° grau
  Após o usuário esolher o calculo, o programa retorna o resultado desejado.
*/
function quadrilatero($ladoA, $ladoB){
    return $ladoA * $ladoB;
}

function triangulo($base, $altura){
    return $base * $altura;
}
''
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
    // Declaração de vaiáveis
    $x = str_replace(",",".",$_POST['x']);
    $y = str_replace(",",".",$_POST['y']);
    $calculo = $_POST['calculo'];

    switch($calculo){
        case "quadrilátero":
            echo quadrilatero($x,$y);
            break;
        case "triângulo":
            echo triangulo($x,$y);
            break;
        case "equação":
            echo equacao($x,$y);
            break;
        }
?>