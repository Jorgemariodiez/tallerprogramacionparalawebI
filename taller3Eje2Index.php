<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller 3 ejercicio 2</title>
</head>
<body>
    <h2>Taller 3 Ejercicio 2</h2>
    <form>
        Ingrese el largo del rectangulo  <input type="text" name="largo" method="get" ><br>
        Ingrese el ancho del rectangulo <input type="text" name="ancho" method="get"><br>
        <input type="submit" value="CALCULAR"><br><br> 
    </form>
    <<?php 
    $elLargo=$_GET["largo"];
    $elAncho=$_GET["ancho"];

    require_once("taller3Eje2Clase.php");
     $rectangulouno = new Rectangulo($elLargo, $elAncho);
     $rectangulouno ->setlargo($elLargo);
     $rectangulouno ->setancho($elAncho);
     $rectangulouno ->calAreaRec();
     $rectangulouno ->calPeriRec();
         
    ?>

    
</body>
</html>