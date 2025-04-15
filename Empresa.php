<?php
include_once 'Moto.php';
include_once 'Venta.php';
/* En la clase Empresa:
 6. Implementar el método registrarVenta($colCodigosMoto, $objCliente) método que recibe por
 parámetro una colección de códigos de motos, la cual es recorrida, y por cada elemento de la colección
 se busca el objeto moto correspondiente al código y se incorpora a la colección de motos de la instancia
 Venta que debe ser creada. Recordar que no todos los clientes ni todas las motos, están disponibles
 para registrar una venta en un momento determinado.
 El método debe setear los variables instancias de venta que corresponda y retornar el importe final de la
 venta.
 7. Implementar el método retornarVentasXCliente($tipo,$numDoc) que recibe por parámetro el tipo y
 número de documento de un Cliente y retorna una colección con las ventas realizadas al cliente.*/
class Empresa {
    private $denominacion;
    private $direccion;
    private $coleccionClientes;
    private $coleccionMotos;
    private $coleccionVentas;

    public function __construct($denomin, $direc, $colecClientes, $colecMotos, $colecVentas) {
        $this->denominacion = $denomin;
        $this->direccion = $direc;
        $this->coleccionClientes = $colecClientes;
        $this->coleccionMotos = $colecMotos;
        $this->coleccionVentas = $colecVentas;
    }

    public function getDenominacion() {
        return $this->denominacion;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function getColeccionClientes() {
        return $this->coleccionClientes;
    }

    public function getColeccionMotos() {
        return $this->coleccionMotos;
    }

    public function getColeccionVentas() {
        return $this->coleccionVentas;
    }

    public function setDenominacion($denomin) {
        $this->denominacion = $denominacion;
    }

    public function setDireccion($direc) {
        $this->direccion = $direccion;
    }

    public function setColeccionClientes($colecClientes) {
        $this->coleccionClientes = $coleccionClientes;
    }

    public function setColeccionMotos($colecMotos) {
        $this->coleccionMotos = $coleccionMotos;
    }

    public function setColeccionVentas($colecVentas) {
        $this->coleccionVentas = $coleccionVentas;
    }

    public function __toString() {
        return "Denominacion: " . $this->getDenominacion() . 
                "\nDireccion: " . $this->getDireccion() . 
                "\nClientes: " . $this->getColeccionClientes() . 
                "\nMotos " . $this->getColeccionMotos() . 
                "\nVentas " . $this->getColeccionVentas();
    }

    public function retornarMoto($codigoMoto) {
        $motoEncontrada = false;

        foreach ($this->getColeccionMotos() as $moto) {
            if ($this->getCodigo() == $codigoMoto) {
                $motoEncontrada = true;
            }
        }
        return $motoEncontrada;
    }
  
}
?>