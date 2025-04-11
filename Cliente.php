<?php
class Cliente {
    private $cliente;
    private $estado;

    public function __construct($persona, $estadoCliente) {
        $this->cliente = $persona;
        $this->estado = $estadoCliente;
    }

    public function getCliente() {
        return $this->cliente;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setCliente($persona) {
        $this->cliente = $persona;
    }

    public function setEstado($estadoCliente) {
        $this->estado = $estadoCliente;
    }

    public function __toString() {
        return $this->getCliente() . "\nEsta de baja: " . $this->getEstado();
    }
}
?>