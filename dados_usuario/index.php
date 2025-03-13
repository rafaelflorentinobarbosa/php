<!--Crie um novo projeto chamado "dados_usuario", e nele crie um arquivo chamado "index.php". onde voçê ira criar um formulario onde o usuário irá preencher os seguintes dados:
- Nome, Idade,  E-mail, Telefone, CPF, Profissão, CEP, UF,Cidade, Bairro, Logradouro, Complemento, número
os dados devem ser armazenados em uma array e apresentados na tela. */ -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Usuário</title>
    <style>
        body{
            background-color: gray;
        }
    </style>
</head>
<body>
    <h1>Cadastrar Usuário</h1>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <label for="nome">Informe o nome: </label><br />
        <input type="text" name="nome" required> <br /><br />

        <label for="idade">Informe a idade: </label><br />
        <input type="text" name="idade" required> <br /><br />

        <label for="email">Informe o e-mail: </label><br />
        <input type="email" name="email" required> <br /><br />

        <label for="telefone">Informe o telefone: </label><br />
        <input type="text" name="telefone" required> <br /><br />
        
        <label for="cpf">Informe o CPF: </label><br />
        <input type="text" name="cpf" required> <br /><br />

        <label for="profissao">Informe a profissão: </label><br />
        <input type="text" name="profissao" required> <br /><br />

        <label for="cep">Informe o CEP: </label><br />
        <input type="text" name="cep" required> <br /><br />

        <label for="uf">Informe o UF: </label><br />
        <input type="text" name="uf" required> <br /><br />

        <label for="cidade">Informe a cidade: </label><br />
        <input type="text" name="cidade" required> <br /><br />

        <label for="bairro">Informe o bairro: </label><br />
        <input type="text" name="bairro" required> <br /><br />

        <label for="logradouro">Informe o logradouro: </label><br />
        <input type="text" name="logradouro" required> <br /><br />

        <label for="complemento">Informe o complemento: </label><br />
        <input type="text" name="complemento" required> <br /><br />

        <label for="numero">Informe o número: </label><br />
        <input type="text" name="numero" required> <br /><br />

        <button type="submit">Enviar</button>
    </form>
    <hr />
    <?php 
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            // Sanitização dos dados de entrada
            $dados = array(
                'Nome' => htmlspecialchars($_POST['nome']), 
                'Idade' => htmlspecialchars($_POST['idade']), 
                'E-mail' => htmlspecialchars($_POST['email']), 
                'Telefone' => htmlspecialchars($_POST['telefone']), 
                'CPF' => htmlspecialchars($_POST['cpf']), 
                'Profissão' => htmlspecialchars($_POST['profissao']), 
                'CEP' => htmlspecialchars($_POST['cep']), 
                'UF' => htmlspecialchars($_POST['uf']), 
                'Cidade' => htmlspecialchars($_POST['cidade']), 
                'Bairro' => htmlspecialchars($_POST['bairro']), 
                'Logradouro' => htmlspecialchars($_POST['logradouro']), 
                'Complemento' => htmlspecialchars($_POST['complemento']), 
                'Número' => htmlspecialchars($_POST['numero'])
            );

            // Verificação se todos os campos foram preenchidos
            $todos_preenchidos = true;
            foreach($dados as $valor){
                if(empty($valor)){
                    $todos_preenchidos = false;
                    break;
                }
            }

            if($todos_preenchidos){
                foreach($dados as $dado => $valor){
                    echo $dado .": ". $valor ."<br />";
                }
            } else {
                echo "Por favor, preencha todos os campos.";
            }
        }
    ?>
</body>
</html>