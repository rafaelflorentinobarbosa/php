<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pessoa Física</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <label for="nome">Nome:</label><br/>
        <input type="text" id="nome" name="nome"><br/><br/>

        <label for="cpf">CPF:</label><br/>
        <input type="text" id="cpf" name="cpf"><br/><br/>

        <label for="email">Email:</label><br/>
        <input type="email" id="email" name="email"><br/><br/>

        <label for="dataNascimento">Data de Nascimento:</label><br/>
        <input type="date" id="dataNascimento" name="dataNascimento"><br/><br/>

        <label for="telefone">Telefone:</label><br/>
        <input type="text" id="telefone" name="telefone"><br/><br/>

        <label for="endereco">Endereço:</label><br/>
        <input type="text" id="endereco" name="endereco"><br/><br/>

        <label for="profissao">Profissão:</label><br/>
        <input type="text" id="profissao" name="profissao"><br/><br/>

        <select name="genero">
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
            <option value="outros">Outros</option>
        </select><br/><br/>

        <button type="submit">Enviar</button>
        <a href="index.php">Voltar </a> <br/><br/>
    </form>

    <?php  

        if($_SERVER['REQUEST_METHOD'] == "POST"){
            // Importar as classes 
            include 'Pessoa.class.php';
            include 'PessoaFisica.class.php';

            // Intanciar um objeto da classe PessoaFisica
            $usuario = new PessoaFisica();

            // atribuir valores vindo do formulario
            $usuario->setNome($_POST ['nome']);
            $usuario->setCpf($_POST ['cpf']);
            $usuario->setEmail($_POST ['email']);   
            $usuario->setDataNascimento($_POST ['dataNascimento']);
            $usuario->setTelefone($_POST ['telefone']);
            $usuario->setEndereco($_POST ['endereco']);
            $usuario->setProfissao($_POST ['profissao']);
            $usuario->setGenero($_POST ['genero']);

            // Exibir os valores dos atributos
            echo "<b>Nome:</b> ".$usuario->getNome()."<br>";
            echo "<b>CPF:</b> ".$usuario->getCpf()."<br>";
            echo "<b>Email:</b> ".$usuario->getEmail()."<br>";
            echo "<b>Data de Nascimento:</b> ".$usuario->getDataNascimento()."<br>";    
            echo "<b>Telefone:</b> ".$usuario->getTelefone()."<br>";
            echo "<b>Endereço:</b> ".$usuario->getEndereco()."<br>";
            echo "<b>Profissão:</b> ".$usuario->getProfissao()."<br>";
            echo "<b>Gênero:</b> ".$usuario->getGenero()."<br>";
        }
        
    
    ?>
</body>
</html>