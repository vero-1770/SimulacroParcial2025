<?php
class moto {
    private $codigo;
    private $precio;
    private $anioFabricacion;
    private $descripcion;
    private $porcentajeIncrementoAnual;
    private $activa;

    public function _construct($nroUnico, $costo, $anioFabrica, $atributos, $incremento, $estado) {
        $this->codigo = $nroUnico;
        $this->precio = $costo;
        $this->anioFabricacion = $anioFabrica;
        $this->descripcion = $atributos;
        $this->porcentajeIncrementoAnual = $incremento;
        $this->activa = $estado;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function getAnioFabricacion() {
        return $this->anioFabricacion;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getPorcentajeIncrementoAnual() {
        return $this->porcentajeIncrementoAnual;
    }

    public function getActiva() {
        return $this->activa;
    }

    public function setCodigo($nroUnico) {
        $this->codigo = $nroUnico;
    }

    public function setPrecio($costo) {
        $this->precio = $costo;
    }

    public function setAnioFabricacion($anioFabrica) {
        $this->anioFabricacion = $anioFabrica;
    }

    public function setDescripcion($atributos) {
        $this->descripcion = $descripcion;
    }

    public function setPorcentajeIncrementoAnual($incremento) {
        $this->porcentajeIncrementoAnual = $incremento;
    }

    public function setActiva($estado) {
        $this->activa = $estado;
    }

    public function __toString() {
        return "Codigo: " . $this->getCodigo() . 
        "\nAño de fabricación: " . $this->getAnioFabricacion() . 
        "\nDescripción: " . $this->getDescripcion() . 
        "\nPorcentaje de incremento anual: " . $this->getPorcentajeIncrementoAnual() . "%" .
        "\n" . $this->darPrecioVenta() . "$ pesos" ;
    }

    public function darPrecioVenta() {
        $venta = -1;
        $aniosMoto = 2025 - $this->getAnioFabricacion;
    
        if ($this->getActiva() == true) {
          $venta = $this->getPrecio() + $this->getPrecio() * ($aniosMoto * $this->getPorcentajeIncrementoAnual());
        }
        return $venta;
    }
}
?>