<?php
/*
  Crie um programa que receba dois números do usuário a partir de um formulário HTML
  que o mesmo escolha um dos seguintes calculos:
    - Área do Quadrilatero
    - Área do Triangulo
    - Equação do 1° grau a*x+b=0
  Após o usuário esolher o calculo, o programa retorna o resultado desejado.
*/

    // importando as funções de outro arquivo
    include "funcoes.php";

    // Declaração de vaiáveis
    $a = str_replace(",",".",$_POST['a']);
    $b = str_replace(",",".",$_POST['b']);
    $calculo = $_POST['calculo'];

    switch($calculo){
        case "quadrilátero":
            echo "Área do quadrilatero é: " . quadrilatero($a,$b);
            break;
        case "triângulo":
            echo "Área do triângulo é: " . triangulo($a,$b);
            break;
        case "equação":
            echo "Equação do 1° Grau é: " . equacao($a,$b);
            break;
        }
?>