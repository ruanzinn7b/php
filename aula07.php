<?php


o cliente de uma loja realizou a compra de um produto de 1200 decidiu fazer o pagamento em 12 parcelas iguais. para este parcelamento é cobrado juros de 1% ao mês. escreva um codigo em php que calcule e exiba o valor total da compra e o valor das parcelas.

$valor = 1200;
$juros = $valor*0.12;
$total = $valor+$juros;
$parcelas = $total/12;
echo $total. "<br>";
echo $parcelas;

?>