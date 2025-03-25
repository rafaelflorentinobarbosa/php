<?php 
    // Importar as classes 
    include 'Pessoa.class.php';
    include 'PessoaFisica.class.php';

    // se pessoa fisica
    if ($_POST['pessoa'] == 'fisica'){
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

    // se pessoa juridica
    }elseif($_POST['pessoa'] == 'juridica'){
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