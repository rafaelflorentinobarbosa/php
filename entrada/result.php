<?php
    // Declaração de varaiável
    $nome = $_POST["nome"];

    // Saída de dados
    echo "<h1>Seja bem vindo " . $nome . ".</h1>";

    // Retornar para pagina anterior
    echo'<br/><a href="index.html">Voltar</a>';
?>