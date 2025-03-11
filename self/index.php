<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Self</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <label for="nome">Digite o seu nome: </label><br />
        <input type="text" name="nome"><br /><br />
        <button type="submit">Enviar</button>
    </form>
    <hr />
    <h1>
        <marquee>
            <?php 
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                $nome = $_POST['nome'];
                echo $nome;
            }
            ?>
        </marquee>
    </h1>
</body>
</html>