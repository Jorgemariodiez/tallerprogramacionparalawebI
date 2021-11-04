<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller 3 Ejercicio 3</title>
</head>
<body>
    <form>
        Ingrese el numero del item: <input type="text" name="item" method="get"><br>
        Ingrese la descripcion: <input type="text" name="nombre" method="get"><br>
        Ingrese el precio de venta: <input type="text" name="venta" method="get"><br>
        Ingrese el precio de compra: <input type="text" name="compra" method="get"><br>
        Ingrese el inventario: <input type="text" name="cantidad" method="get"><br>
        <input type="submit" value="Hacer operacion"><br>

    </form>
    <?php 
    $item = $_GET["item"];
    $nombre = $_GET["nombre"];
    $venta = $_GET["venta"];
    $compra = $_GET["compra"];
    $cantidad = $_GET["cantidad"];

    require_once("taller3Eje3Clase.php");
    $articulouno = new Producto($item, $nombre, $venta, $compra, $cantidad);
    $articulouno->setclavenum($item);
    $articulouno->setdescripcion($nombre);
    $articulouno->setprecio($venta);
    $articulouno->setcosto($compra);
    $articulouno->setinventario($cantidad);
    $articulouno->margenGanacia();
    
    ?>
    
</body>
</html>