<?php

class Data{

    private $dia;
    private $mes;
    private $ano;

    public function getDia(){
return $this->dia;
    }

    public function setDia($dia){
        $this->dia = $dia;
    }

    public function getMes(){
        return $this->mes;
            }
        
            public function setMes($mes){
                $this->mes= $mes;
            }

            public function getAno(){
                return $this->ano;
                    }
                
                    public function setAno($ano){
                        $this->ano = $ano;
                    }

        public function date(){
            echo $this->dia . "/" . $this->mes . "/" . $this->ano . "<br>";
        }

            public function nextDate(){
               
               
               
                ;
            }

        public function __construct($dia, $mes, $ano){
            if ($mes > 0 && $mes <= 12){
                $this->setMes($mes);
            } else {
                echo "mês inválido <br>";
                return; //retorna o método e não faz as outras validações
            }

            if($this->mes ==2){
                if($dia > 0 && $dia<=28){
                    $this->setDia($dia);
                }else{
                    echo "dia invalido <br>";
                    return;
                //}elseif($this->mes==4 || $this->mes==6 || $this->mes==9 || $this->mes=11){
                    if($dia >0 && $dia <=31){
                        $this->setDia($dia);
                    }else{
                        echo "dia invalido <br>";
                        return;
                    }
                }
            }
if($ano>0 && $ano <=2024){

}
            $this->setAno($ano);
        }


        
}
?>