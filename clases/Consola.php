<?php 

class Consola {
    public $nombre;
    public $capacidad;

    function set_nombre($nombre) {
        $this->nombre = $nombre;
    }
    function get_nombre() {
        return $this->nombre;
    }

    function set_capacidad($capacidad) {
        $this->capacidad = $capacidad;
    }
    function get_capacidad() {
        return $this->capacidad;
    }
}

$playstation = new Consola();
$xbox = new Consola();

$playstation->set_nombre('PlayStation 5');
$xbox->set_nombre('Xbox Series X');

$playstation->set_capacidad('10 TB');
$xbox->set_capacidad('5 TB');

?>