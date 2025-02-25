<?php
    // Declaração de variáveis
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];

    // Ternário
    $result = $idade >= 18 ? " é maior de idade." : " é menor de idade.";
    echo $nome . $result; 

    // Retornar para página anterior
    echo'<br/><a href="index.html">Voltar</a>';
?>