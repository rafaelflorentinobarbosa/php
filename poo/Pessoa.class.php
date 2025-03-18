<?php
    // Classe Pessoa
    class Pessoa{
        // Atributos
        public $nome;
        public $idade; 
        public $cpf;
        public $email;

        // Atributo estático
        public static $contador = 0;

        // Construtor
        public function __construct() {
            self::$contador++;
        }

        // Método
        function saudar(){
            return "Olá, meu nome é: $this->nome, é um prazer estar aqui!";
        }

        function exibirCartaoVisitas(){
           echo "<h2>Cartão de Visitas</h2>";
           echo "<p>Nome: $this->nome</p>";
           echo "<p>Idade: $this->idade</p>";           
           echo "<p>CPF: $this->cpf</p>";
        }

        // Método estático
        public static function getContador() {
            return self::$contador;
        }
    }
?>