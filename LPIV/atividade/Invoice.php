<?php
//Crie uma classe chamada Invoice que represente a fatura de 
//um item vendido na loja. deve ter um construtor com os 4 elementos
//
class Invoice{

  public $numero;
  public $descricao;
  public $quantidade;
  public $preco;

  public function __construct($numero, $descricao, $quantidade, $preco){
    $this->setNumero($numero);
    $this->setDescricao($descricao);
    $this->setQuantidade($quantidade);
    $this->setPreco($preco);
  
  if($quantidade < 0){
    echo "0";
  }
else if($preco < 0){
    echo "0.0";
}
  }

  public function getNumero(){
    return $this->numero;
  }

  public function setNumero($numero){
    return $this->numero = $numero;
  }

  public function getDescricao(){
    return $this->descricao;
  }
  public function setDescricao($descricao){
    return $this->descricao = $descricao;
  }

  public function getQuantidade(){
    return $this->quantidade;
  }

  public function setQuantidade($quantidade){
    return $this->quantidade = $quantidade;
  }
public function getPreco(){
  return $this->preco;
}
  public function setPreco($preco){
    return $this->preco = $preco;
  }

  
  public function getInvoiceAmount(){
    return $this->quantidade*$this->preco;
    //var_dump($fatura);
  }
}


?>