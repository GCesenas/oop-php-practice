<?php

class Auto {
  public $marca;
  public $modelo;

  public function __construct($marca, $modelo) {
    $this->marca = $marca;
    $this->modelo = $modelo; 
  }
  public function mensaje2() {
    echo "El auto es un {$this->marca} del año {$this->modelo}."; 
  }
}

?>