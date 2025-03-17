<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatorial</title>
</head>
<body>
    <h1>Cálculo do fatorial</h1>
    <hr />
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <label for="numero">Informe um número inteiro positivo: </label><br />
        <input type="number" name="numero" > <br /><br />
        <button type="submit">Calcular</button>
    </form>
    <?php
        // Função para calcular o fatorial
        function calcularFatorial($numero){
            return $numero == 0 ? 1 : $numero * calcularFatorial($numero - 1);
        }

        if($_SERVER["REQUEST_METHOD"]== 'POST'){
            // Declarando variaveis
            $numero = $_POST['numero'];

            // Executando a função
            echo "<h2> O fatorial de $numero é: " . calcularFatorial($numero)."! </h2>";
        }
    ?>
</body>
</html>