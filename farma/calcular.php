<?php
$valor_compra = $_POST['text'];
$desconto = 0;
$cartao = isset($_POST['checkbox']);

if(($_POST['radio'])=="mais")
{
    $desconto += 7;
}
else if (($_POST["radio"]) == "entre") {
 
    $desconto += 5;
}

if ($cartao == true) {
   
    $desconto += 5;
}

$valor_total = $valor_compra - ($valor_compra *  $desconto / 100);
echo " o valor original é R$".number_format($valor_compra, 2 ,",",".")."<br>";
echo "o valor do desconto: $desconto"."%"."<br>";
echo "o valor total com desconto R$:".number_format($valor_total, 2 ,",",".")."<br>";
?>