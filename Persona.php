<?php

class persona {
    private $nombre;
    private $apellido;
    private $tipoDocumento;
    private $nroDocumento;

    public function  __construct($name, $lastName, $tipoDocu, $nroDocu) {
        $this->nombre = $name;
        $this->apellido = $lastName;
        $this->tipoDocumento = $tipoDocu;
        $this->nroDocumento = $nroDocu;  
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getTipoDocumento() {
        return $this->tipoDocumento;
    }

    public function getNroDocumento() {
        return $this->nroDocumento;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function setTipoDocumento($tipoDocumento) {
        $this->tipoDocumento = $tipoDocumento;
    }

    public function setNroDocumento($nroDocumento) {
        $this->nroDocumento = $nroDocumento;
    }
 
    public function __toString() {
        return $this->getNombre() . " " . $this->getApellido() . "\nTipo de documento: " . $this->getTipoDocumento() . ".\nNro documento: " . $this->getNroDocumento();
    }
}
?>