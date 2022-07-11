<?php
include("Produto.php");
include("Venda.php");

$venda = new Venda();
$venda-›gerarP();
$venda-›calcularV();

echo "</br>"; 
echo $venda-›imprimir(); 
echo $venda-›valor;
echo "Valor Venda: " . $venda-›valor;

?>