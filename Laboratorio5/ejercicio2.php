<?php

    $precio=$_POST['valor1'];
    $cantidad=$_POST['valor2'];

        $nuevopre= 0.05 * $precio;
        $icompra= $nuevopre * $cantidad;
        $idescuento= $icompra * 0.07;
        $ipagar= $icompra - $idescuento;
        $obsequio= $cantidad * 2;

        echo $_POST['name'];
        echo "<br>";
        echo "La rebaja de la gaseosa es de: ".$nuevopre;
        echo "<br>";
        echo "El importe de la compra es: ".$icompra;
        echo "<br>";
        echo "El importe del descuento es: ".$idescuento;
        echo "<br>";
        echo "El importe a pagar es de: ".$ipagar;
        echo "<br>";
        echo "Caramelos adquiridos: ".$obsequio;
?>