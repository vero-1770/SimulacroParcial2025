<?php
include_once 'Moto.php';

class Venta {
    private $nroVenta;
    private $fechaVenta;
    private $refCliente;
    private $refColeccionMotos;
    private $precioFinal;

    public function __construct($numVenta, $dateVenta, $referenciaCliente, $motosColeccionRef, $precioF) {
        $this->nroVenta = $numVenta;
        $this->fechaVenta = $dateVenta;
        $this->refCliente = $referenciaCliente;
        $this->refColeccionMotos = $motosColeccionRef;
        $this->precioFinal = $precioF;
    }

    public function getNroVenta() {
        return $this->nroVenta;
    }

    public function getFechaVenta() {
        return $this->fechaVenta;
    }

    public function getRefCliente()  {
        return $this->refCliente;
    }

    public function getRefColeccionMotos() {
        return $this->refColeccionMotos;
    }

    public function getPrecioFinal() {
        return $this->precioFinal;
    }

    public function setNroVenta($numVenta) {
        $this->nroVenta = $numVenta;
    }

    public function setFechaVenta($dateVenta) {
        $this->fechaVenta = $dateVenta;
    }

    public function setRefCliente($referenciaCliente) {
        $this->refCliente = $referenciaCliente;
    }

    public function setRefColeccionMotos($motosColeccionRef) {
        $this->refColeccionMotos = $motosColeccionRef;
    }

    public function setPrecioFinal($precioF) {
        $this->precioFinal = $precioF;
    }

    public function incorporarMoto($objMoto) {
        $realizado = false;

        if ($this->getActiva()) {
            $coleccion = $this->getRefColeccionMotos(); 
            $coleccion[] = $objMoto; 
            $this->setRefColeccionMotos($coleccion); 
            $this->setPrecioFinal($objMoto->darPrecioVenta() + $this->getPrecioFinal); 
            $realizado = true;
        }
        return $realizado;
    }

    public function __toString() {

        $motos = [];  
        $coleccionMotos = $this->getRefColeccionMotos(); 
        foreach ($this->getRefColeccionMotos() as $moto) {
            $motos .= $moto . "\n";
        }
        
        return "Numero: " . $this->getNroVenta() . "\n" .
                "Fecha: " . $this->getFechaVenta() . "\n" .
                "Cliente: " . $this->getRefCliente() . "\n" .
                "Coleccion Motos: " . $motos . "\n" .
                "Precio Final: " . $this->getPrecioFinal() . "\n" ;
    
    }

}
?>