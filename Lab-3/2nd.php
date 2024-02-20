<?php
function vat($amount,$vatRate) {
    $amountofvat = $amount * ($vatRate / 100);
    return $amountofvat;
}
$amount = 1000;
$vatRate = 15;

$vat = vat($amount, $vatRate);

echo "Amount: $" . $amount . "\n";
echo "<br>";
echo "VAT Rate: " . $vatRate . "\n";
echo"<br>";
echo "VAT Amount: $" . $vat . "\n";
echo "<br>";
echo "Total Amount (including VAT): $" . ($amount + $vat) . "\n";
echo "<br>";
?>
