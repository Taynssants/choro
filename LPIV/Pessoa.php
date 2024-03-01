<?php
 class Pessoa{
    private $nome;
    private $idade;
    private $cpf;

    public function getNome(){
        return $this->nome;
    }
    public function setNome(){
        $this->nome = $nome;
    }

    public function getIdade(){
        return $this->idade;
    }
    public function setIdade(){
        $this->idade = $idade;
    }

    public function getCpf(){
        return $this->cpf;
    }
    public function setCpf(){
        $this->cpf = $cpf;
    }

    public function seApresentar(){
        echo "Meu nome é:" . $this->nome . ".<br>";
        echo "Tenho " . $this->idade . " anos. <br>";
    }
    
 }
?>