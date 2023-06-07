<?php
/*
 Una empresa está realizando un aumento del 15% al sueldo base de sus trabajadores, escriba un algoritmo que solicite el nombre de un trabajador y su sueldo base, a continuación, el algoritmo debe calcular el aumento y el valor final a pagar al trabajador
*/
// \n = salto de linea reemplaza el <br>
$nombre = readline("Ingrese nombre del empleado \n");
$sueldo = readline("Ingrese el salario base \n");

$aumento = $sueldo*0.15;
$salarioTotal = $aumento + $sueldo;

$SALUDO = "Hola ";
echo $SALUDO;

echo "Señor $nombre el aumento en su salario base es de $aumento por lo que su sueldo ahora sera de: $salarioTotal \n"

?>