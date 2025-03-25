<?php
    // Classe pessoa juridica
    final class PessoaJuridica extends Pessoa{
        private $razaoSocial;
        private $nomeFantasia;
        private $cnpj;
        private $inscricaoEstadual;

        // Métodos de acesso
        public function setRazaoSocial($razaoSocial){
            $this->razaoSocial = $razaoSocial;
        }

        public function getRazaoSocial(){
            return $this->razaoSocial;
        }

        public function setNomeFantasia($nomeFantasia){
            $this->nomeFantasia = $nomeFantasia;
        }

        public function getNomeFantasia(){
            return $this->nomeFantasia;
        }

        public function setCnpj($cnpj){
            $this->cnpj = $cnpj;
        }

        public function getCnpj(){
            return $this->cnpj;
        }

        public function setInscricaoEstadual($inscricaoEstadual){
            $this->inscricaoEstadual = $inscricaoEstadual;
        }
        
        public function getInscricaoEstadual(){
            return $this->inscricaoEstadual;
        }

        
    }


?>