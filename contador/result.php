<?php
    // Declaração de variáveis
    $numero = $_POST['numero'];
    $numero2 = $numero;

    // laço de repetição while
    echo "Repetição com  while <br />";

    while($numero >=0){

        // Exibe o número na tela
        echo $numero . "<br />";

        // Diminuir o valor do número
        $numero--;
    }
    // laço de repetição do ... while
    echo "Repetição com do .... while<br />";

    do{
        echo $numero2 . "<br />";
        $numero2--;
    } while($numero2  >=0);

    // Laço de repetição for
    echo "Repetição com o For <br />";
    for($n = $_POST['numero']; $n >= 0; $n-- ){
        echo $n ."<br />";
    }
?>