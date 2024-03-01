<?php

class Empregado {
    public $primeiroNome;
    public $sobrenome;
    public $salario;

    public function __construct($primeiroNome, $sobrenome, $salario) {
        $this->setPrimeiroNome($primeiroNome);
        $this->setSobrenome($sobrenome);
        $this->setSalario($salario);
    }

    public function getPrimeiroNome() {
        return $this->primeiroNome;
    }

    public function setPrimeiroNome($primeiroNome) {
        $this->primeiroNome = $primeiroNome;
    }

    public function getSobrenome() {
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setSalario($salario) {
        if ($salario < 0) {
            $this->salario = 0.0;
        } else {
            $this->salario = $salario;
        }
    }

    public function getSalarioAnual() {
        return $this->salario * 12;
    }

    public function aumentarSalario() {
        $porcentagem = $this->salario / 100 * 10;
        $this->salario += $porcentagem;
        return $this->salario;
    }
}


?>