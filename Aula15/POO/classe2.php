<?php 
  class Carro {
    private $modelo;
    private $cor;
    private $ano;
    private $motor;

    //Getters & Setters
    public function getModelo() {
      return $this->modelo;
    }

    public function setModelo($modelo) {
      $this->modelo = $modelo;
    }

    public function getCor() {
      return $this->cor;
    }

    public function setCor($cor) {
      $this->cor = $cor;
    }

    public function getAno() {
      return $this->ano;
    }

    public function setAno($ano) {
      $this->ano = $ano;
    }

    public function getMotor() {
      return $this->motor;
    }

    public function setMotor($motor) {
      $this->motor = $motor;
    }

    public function exibir() {
      return array(
        "modelo" => $this->getModelo(),
        "cor" => $this->getCor(), 
        "ano" => $this->getAno(),
        "motor" => $this->getMotor()
      ); 
    }
  }

  //Instância
  $ferrari = new Carro();

  $ferrari->setModelo("California");
  $ferrari->setCor("Vermelha");
  $ferrari->setAno("2010");
  $ferrari->setMotor("V8");

  //Exibir
  foreach($ferrari->exibir() as $value) {
    echo $value . "<br>";
  }
  
?>