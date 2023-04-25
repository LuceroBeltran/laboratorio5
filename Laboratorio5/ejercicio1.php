<?php
    echo $_POST['username'];
    $sueldo1= 600;
    $numero1=$_POST['valor1'];
    $numero2=$_POST['valor2'];
    
        $comision1=$numero2 * 0.075 ;
        $bonificacion=$numero1 * 50;
        $sueldobruto=$sueldo1 + $bonificacion + $comision1;
        $descuento=$sueldobruto * 0.11;
        $sueldoneto=$sueldobruto - $descuento;
        
        echo ("<br>");
        echo "La comision es: S/.".$comision1;
        echo ("<br>");
        echo "La bonificacion es: S/.".$bonificacion;
        echo ("<br>");
        echo "El sueldo bruto es de: S/.".$sueldobruto;
        echo ("<br>");
        echo "El descuento es de: S/.".$descuento;
        echo ("<br>");
        echo "El sueldo neto es de: S/.".$sueldoneto;
?>
    

    