<?php
/* En la clase Venta:
 1. Se registra la siguiente información: número, fecha, referencia al cliente, referencia a una colección de
 motos y el precio final.
 2. Método constructor que recibe como parámetros cada uno de los valores a ser asignados a cada
 atributo de la clase.
 3. Los métodos de acceso de cada uno de los atributos de la clase.
 4. Redefinir el método _toString para que retorne la información de los atributos de la clase.
 5. Implementar el método incorporarMoto($objMoto) que recibe por parámetro un objeto moto y lo
 incorpora a la colección de motos de la venta, siempre y cuando sea posible la venta. El método cada
 vez que incorpora una moto a la venta, debe actualizar la variable instancia precio final de la venta.
 Utilizar el método que calcula el precio de venta de la moto donde crea necesario*/
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
}
?>