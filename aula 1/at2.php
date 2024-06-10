<?php
$produtos = ["maça" => 2.99, "uva" => 9.99,  "laranja" => 8.99];
    echo "lista produtos: ";
foreach ($produtos as $produto => $precos) {
    echo $produto. " custa R$",  $precos, "<br>";
}
    $total = 0;
foreach ($produtos as $preco)
{
    $total += $preco;
}
echo "Total: R$". $total;
?>