<?php
    // Incluir a classe Pessoa
    include 'Pessoa.class.php';

    // Criar um objeto da classe Pessoa
    $usuario = new Pessoa();

    // Pegar valores do formulário e atribuir ao objeto
    $usuario->nome = $_POST['nome'];
    $usuario->idade = $_POST['idade'];
    $usuario->cpf = $_POST['cpf'];
    $usuario->email = $_POST['email'];

    // Exibir os valores do objeto
    echo "<h2>Informações do Usuário</h2>"; 
    echo "<p>Nome: $usuario->nome</p>";
    echo "<p>Idade: $usuario->idade</p>";       
    echo "<p>CPF: $usuario->cpf</p>";
    echo "<p>Email: $usuario->email</p>";

    echo "<h1>".$usuario->saudar()."</h1>";

    // Criando nova pessoa
    $usuario2 = new Pessoa();
    $usuario2->nome = "Maria";
    $usuario2->idade = 29;
    $usuario2->cpf = "123.456.789-00";
    $usuario2->email = "marai@gmail.com.br";
    
    // Exibir cartão de visitas
    $usuario2->exibirCartaoVisitas();

    echo "<h2>Quantidade de usuários cadastrados: ".Pessoa::getContador()."</h2>";
?>