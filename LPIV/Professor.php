<?php

include "Pessoa.php";

class Professor extends Pessoa{

    private $escola;

    public function getEscola(){
        return $this->escola;
    }
    public function setEscola($escola){
        $this->escola = $escola;
    }

    public function seApresentar(){
        echo "eu sou o professor :" . parent::getNome() . ".<br>";
        echo "Tenho " . $this->idade . " anos. <br>";
        echo "Trabalho na escola " . $this->escola . ". <br>";
    }

    public function __construct($nome, $idade, $cpf, $escola){
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setCpf($cpf);
        $this->setEscola($escola);
    }
}
?>