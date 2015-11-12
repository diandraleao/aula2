<?php
    class Usuario{  // responsável tabela usuario, cada tabela tem uma classe
        public $nome;
        
        public function __construct($nome){
            $this->nome = $nome;
        }
    }
    
?>