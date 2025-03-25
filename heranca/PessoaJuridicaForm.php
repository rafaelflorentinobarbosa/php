<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pessoa Jurídica</title>
</head>
<body>

    <h1>Cadastro Pessoa Jurídica</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">

        <label for="razaoSocial">Razão Social:</label><br/>
        <input type="text" id="razaoSocial" name="razaoSocial"><br/><br/>

        <label for="nomeFantasia">Nome Fantasia:</label><br/>
        <input type="text" id="nomeFantasia" name="nomeFantasia"><br/><br/>

        <label for="cnpj">CNPJ:</label><br/>
        <input type="text" id="cnpj" name="cnpj"><br/><br/>

        <label for="inscricaoEstadual">Inscrição Estadual:</label><br/>
        <input type="text" id="inscricaoEstadual" name="inscricaoEstadual"><br/><br/>

        <label for="email">Email:</label><br/>
        <input type="email" id="email" name="email"><br/><br/>

        <label for="telefone">Telefone:</label><br/>
        <input type="text" id="telefone" name="telefone"><br/><br/>

        <label for="endereco">Endereço:</label><br/>
        <input type="text" id="endereco" name="endereco"><br/><br/>

        <button type="submit">Enviar</button>
        <a href="index.php">Voltar </a> <br/><br/>
    </form>

    <?php 

        if($_SERVER['REQUEST_METHOD'] == "POST"){

            // Importar as classes 
            include 'Pessoa.class.php';
            include 'PessoaJuridica.class.php';

            // Instanciar um objeto da classe PessoaFisica
            $usuario = new PessoaJuridica();

            // atribuir valores vindo do formulario
            $usuario->setRazaoSocial($_POST ['razaoSocial']);
            $usuario->setNomeFantasia($_POST ['nomeFantasia']);
            $usuario->setCnpj($_POST ['cnpj']);
            $usuario->setInscricaoEstadual($_POST ['inscricaoEstadual']);
            $usuario->setEmail($_POST ['email']);   
            $usuario->setTelefone($_POST ['telefone']);
            $usuario->setEndereco($_POST ['endereco']);
            
            // Exibir os valores dos atributos
            echo "<b>Razão Social:</b> ".$usuario->getRazaoSocial()."<br>";
            echo "<b>Nome Fantasia:</b> ".$usuario->getNomeFantasia()."<br>";
            echo "<b>CNPJ:</b> ".$usuario->getCnpj()."<br>";
            echo "<b>Inscrição Estadual:</b> ".$usuario->getInscricaoEstadual()."<br>";    
            echo "<b>Email:</b> ".$usuario->getEmail()."<br>";
            echo "<b>Telefone:</b> ".$usuario->getTelefone()."<br>";
            echo "<b>Endereço:</b> ".$usuario->getEndereco()."<br>";    
        }
    ?>
</body>
</html>