
<?php
    // importando as funções de outro arquivo
    include "funcoes.php";

    $raio = str_replace(",",".",$_POST['raio']);
    echo "A área do circulo é: ". round(calcularArea($raio),2)."<br />";
    echo "O tamanho da circunferência é: ". round(calcularCircunferencia($raio),2);
?>