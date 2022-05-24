<?php

require_once("auto.php");

class ford extends auto {
    public function intro() {
      echo "Información del auto: "; 
    }
  }
  
  $ford = new Ford("Ford Focus", "2020");
  
?>

