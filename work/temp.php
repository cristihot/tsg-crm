<?php

$hamburger  = 4.95;
$milkshake  = 1.95;
$cocacola   = 0.85;
$taxrate    = 7.50;
$tip        = 16.0;

$totalBeforeTax = number_format((2*$hamburger) + $milkshake + $cocacola,2);
$totalTaxes = ($totalBeforeTax * $taxrate)/100;
$tips = ($totalBeforeTax * $tip)/100;

echo "2 hamburges: $" . number_format((2.0 * $hamburger),2) . "<br>";
echo "1 milkshake: $$milkshake <br>";
echo "1 cocacola:  $$cocacola <br>";
echo "---------------------------<br>";
echo "Total before tax: $$totalBeforeTax <br>";
echo "Total taxes: $" . number_format($totalTaxes,2) . "<br>";
echo "Tips to pay: $" . number_format($tips,2) . "<br>";
echo "---------------------------<br>";
echo "TOTAL TO PAY: $" . number_format($totalBeforeTax + $totalTaxes + $tips) . "<br>";
echo "---------------------------<br>";
?>