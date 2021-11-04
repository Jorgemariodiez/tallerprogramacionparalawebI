<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller 3 Ejercicio 1</title>
</head>
<body>
    <h1>Taller 3 ejercicio 1</h1>
    <form>
        Ingrese el radio del circulo <input type="text" method="get" name="metros">
        <input type="submit" value="-CALCULAR-">
</br>
    </form>
 
<?php
    $metros=$_GET["metros"];

    require_once("taller3Eje1Clase.php");
    echo "<hr>";
    $circulouno = new Circulo($metros);
    $circulouno ->setRadio($metros);
    $circulouno ->calcularArea();
    $circulouno ->calcularperimetro();
    

?>
</body>
</html>