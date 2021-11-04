<?php
class Rectangulo{
//Atributos
private $largo;
private $ancho;

//constructor
function __construct($largo, $ancho){
    $this->largo = $largo;
    $this->ancho = $ancho;
}
//getters y setters
function setlargo($largo)
{
    $this->largo=$largo;
}
function getlargo()
{
    return $this->largo;
}
function setancho($ancho)
{
    $this->ancho=$ancho;
}
function getancho()
{
    return $this->ancho;
}
function calAreaRec()
{
    echo "El ancho es:".$this->ancho."<br>";
    echo "El largo es:".$this->largo."<br>";
    echo "El ancho es:".$this->ancho."<br>";
    echo "El area del rectangulos es: <br>";
    echo $this->largo*$this->ancho." metros cuadrados.<hr>";
}
function calPeriRec()
{
    echo "El perimetro del rectangulo es: <br>";
    echo $this->largo+$this->ancho+$this->largo+$this->ancho." metros";
}



}



?>