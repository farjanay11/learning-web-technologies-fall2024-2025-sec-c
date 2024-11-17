<?php
$amount = 47018;  

$vat = 0.15 * $amount;

$totalAmount = $amount + $vat;

echo "Actual Amount : $$amount<br>";
echo "VAT : $$vat<br>";
echo "Total Amount : $$totalAmount<br>";
?>
