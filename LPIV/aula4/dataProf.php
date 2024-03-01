<?php

    class Data2 {

        private $dia;

        private $mes;

        private $ano;

        public function getDia() {
            return $this->dia;
        }

        public function setDia($dia) {
            $this->dia = $dia;

            if (is_null($this->mes)) {
                echo "Mês inválido setDia! <br>";
            } elseif ($this->mes == 2) {
                if ($dia > 0 && $dia <= 28) {
                    $this->dia = $dia;
                } else {
                    echo "Dia inválido <br>";
                    return;
                }
            } elseif ($this->mes == 4 || $this->mes == 6 || $this->mes == 9 || $this->mes == 11) {
                if ($dia > 0 && $dia <= 30) {
                    $this->dia = $dia;
                } else {
                    echo "Dia inválido <br>";
                    return;
                }
            } else {
                if ($dia > 0 && $dia <= 31) {
                    $this->dia = $dia;
                } else {
                    echo "Dia inválido <br>";
                    return;
                }
            }
        }

        public function getMes() {
            return $this->mes;
        }

        public function setMes($mes) {
            if ($mes > 0 && $mes <= 12) {
                $this->mes = $mes;
            } else {
                echo "Mês inválido <br>";
            }
        }

        public function getAno() {
            return $this->ano;
        }

        public function setAno($ano) {
            if ($ano > 0 && $ano <= 2024) {
                $this->ano = $ano;
            } else {
                echo "Ano inválido <br>";
            }
        }

        public function date() {
            echo $this->dia . "/" . $this->mes . "/" . $this->ano . "<br>";
        }

        public function nextDate() {
            if ($this->mes == 2) {
                if ($this->dia == 28) {
                    $this->dia = 1;
                    $this->mes++;
                } else {
                    $this->dia++;
                }
            } elseif ($this->mes == 4 || $this->mes == 6 || $this->mes == 9 || $this->mes == 11) {
                if ($this->dia == 30) {
                    $this->dia = 1;
                    $this->mes++;
                } else {
                    $this->dia++;
                }
            } else {
                if ($this->dia == 31) {
                    $this->dia = 1;
                    if ($this->mes == 12) {
                        $this->mes = 1;
                        $this->ano++;
                    } else {
                        $this->mes++; 
                    }
                } else {
                    $this->dia++;
                }
            }
        }

        public function __construct($dia, $mes, $ano) {
            $this->setMes($mes);
            $this->setDia($dia);
            $this->setAno($ano);
        }
    }
?>