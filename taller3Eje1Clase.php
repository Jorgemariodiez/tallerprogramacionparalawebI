<?php
class Circulo{
    //Atributos
    private $intradio;
    const PI=3.1416;
    

    //constructor
    
    function __construct($radio)
    {
        $this->intradio=$radio;
        
    }
   function setRadio($intradio)
   {
        $this -> radio=$intradio;
    }
    function getRadio()
    {
        return $this-> intradio;
    }
    // metodos
    function calcularArea()
    {
        echo "LA CONSTANTE PI: ".Circulo::PI."</br>";
        echo "RADIO= ".$this->radio." metros.</br>";
        $this->areacirculo=Circulo::PI*($this->radio*$this->radio);
        echo "EL AREA ES= "."<h3>".$this->areacirculo." metros cuadrados.<hr></h3>";
    }
    function calcularperimetro()
    {
        $this->perimetro=2*Circulo::PI*$this->radio;
        echo "EL PERIMETRO ES= "."<h3>".$this-> perimetro." metros</h3>";

    }



}


?>