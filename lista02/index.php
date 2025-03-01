<?php
    // Declaração de array
    $cidades = array('DF' => "Brasília", 'PA' => "Belém", 'MA' => "São Luís", 'GO' => "Goiânia", 'PR' => "Curitiba");

    foreach($cidades as $uf => $cidade){
        echo $uf . ": " . $cidade . "<br />";
    }

?>