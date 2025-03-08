<?php
    // função
    function darBoasVindas($nome){
        // retomar o valor da função                  
        return "Seja bem vindo, " . $nome . "!";
    }

    // Algoritmo principal
   echo  darBoasVindas($_POST['nome']);

?>