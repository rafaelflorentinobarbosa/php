<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci</title>
</head>
<body>
    <h1>Fibonacci</h1>
    <hr />
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <label for="numero">Informe um número inteiro positivo: </label><br />
        <input type="number" name="numero" > <br /><br />
        <button type="submit">Calcular</button>
    </form>

    <?php
        // Função para calcular o Fibonacci
        function calcularFibonnaci($numero){
            return $numero <= 1 ? $numero : calcularFibonnaci($numero - 1) + calcularFibonnaci($numero - 2);
        }

        // Gerar a sequência de Fibonacci até o número informado
        function gerarFibonnaci($numero){         
            for($i = 0; $i <= $numero; $i++){
                echo calcularFibonnaci($i). " ";
            }           
        }

        if($_SERVER["REQUEST_METHOD"]== 'POST'){
            // Declarando variáveis
            $numero = $_POST['numero'];

            // Executando a função
            echo "<h2> O fibonnaci de $numero é: " . calcularFibonnaci($numero)."! </h2>";

            // Executando a função sequência
            gerarFibonnaci($numero);
            
        }
    ?>
</body>
</html>