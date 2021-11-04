<?php 
class Producto{
    //Atributos
    public $clavenum;
    public $descripcion;
    public $precio;
    public $costo;
    public $inventario;

    //Constructor
    function __construct($clavenum, $descripcion, $precio, $costo, $inventario)
    {
        $this->clavenum = $clavenum;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
        $this->costo = $costo;
        $this->inventario = $inventario;
     
    }
    //Getters and Setters
    function getclavenum()
    {
        return $this->clavenum;
    }
    function setclavenum($clavenum)
    {
        $this->clavenum = $clavenum;
    }
    function getdescripcion()
    {
        return $this->descripcion;
    }
    function setdescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }
    function getprecio()
    {
        return $this->precio;
    }
    function setprecio($precio)
    {
        $this->precio = $precio;
    }
    function getcosto()
    {
        return $this->costo;
    }
    function setcosto($costo)
    {
        $this->costo = $costo;
    }
    function getinventario()
    {
        return $this->inventario;
    }
    function setinventario($inventario)
    {
        $this->inventario = $inventario;
    }
    function margenGanacia()
    {
        echo "Item de producto: ".$this->clavenum."<br>";
        echo "Descripcion: ".$this->descripcion."<br>";
        echo "Precio de venta: ".$this->precio."<br>";
        echo "Precio de compra: ".$this->costo."<br>";
        echo "Unidades en inventario:".$this->inventario."<br><hr>";
        echo "Margen de ganacia en pesos por unidad: $".$this->precio-$this->costo."<br>";
        echo "Margen de ganacia en porcentaje por unidad: ".((($this->precio-$this->costo)/$this->precio)*100)." % "."<br>";
        echo "Margen de ganacia en pesos total inventario: $".($this->precio-$this->costo)*$this->inventario."<br>";        

    }



}
?>