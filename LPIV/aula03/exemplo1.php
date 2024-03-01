<?php
 class Carro {
    private $chassi;
    private $cor;
    private $marca;
    private $modelo;
    private $anoFabricacao;
    private $velocidade;
    
    public function getChassi(){
        return $this->chassi;
    }
    
    public function setChassi($chassi){
        $this->chassi =$chassi;

    }

    public function getCor(){
        return $this->cor;
    }
    
    public function setCor($cor){
        $this->cor =$cor;

    }

    public function getMarca(){
        return $this->marca;
    }
    
    public function setMarca($marca){
        $this->marca =$marca;

    }

    public function getModelo(){
        return $this->modelo;
    }
    
    public function setModelo($modelo){
        $this->modelo =$modelo;

    }

    public function getAnoFabricacao(){
        return $this->anoFabricacao;
    }
    
    public function setAnoFabricacao($anoFabricacao){
        $this->anoFabricacao =$anoFabricacao;

    }

    public function acelera(){
        echo "vrauu";
        $this->Velocidade="90km/h";
        echo "<br>";
    }

    public function freia(){
        echo "eita";
        $this->velocidade = "0km/h";
        echo "<br>";

    }

    public function darSeta($lado){
        echo "dar seta pro lado". $lado;
        echo "<br>";

    }

//     public function __construct($chassi, $cor,$marca, $modelo, $anoFabricacao)
//     {
// this->setChassi($chassi);
// this->setChassi($cor);
// this->setChassi($marca);
// this->setChassi($modelo);
// this->setChassi($anoFabricacao);
//     }

    public function Carro($chassi, $cor,$marca, $modelo, $anoFabricacao)
    {
this->setChassi($chassi);
this->setChassi($cor);
this->setChassi($marca);
this->setChassi($modelo);
this->setChassi($anoFabricacao);
    }
 }

// $uno = new Carro();
// $uno->setChassi("1234BTS");
// $uno->setCor("preto");
// $uno->setMarca("fiat");
// $uno->setModelo("uno mille");
// $uno->setAnoFabricacao(1998);

var_dump($uno);
echo "<br>";
$uno->acelera();
echo "<br>";
$uno->freia();
echo "<br>";
$uno->darSeta("direita");
?>