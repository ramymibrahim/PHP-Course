<?php
$test = 'Out of scope var';
function calculateTax($val, $tax = 0.14)
{
    return $val * $tax;
}

$calculateTax2 = function ($val, $tax) use (&$test) {
    $test = 'Changed';
    echo $test;
    return $val * $tax;
};

$doubleValue = fn($v) => $v * 2;

echo $calculateTax2(1000, 0.1);
echo "<br />";
echo $doubleValue(15);
echo $test;
echo "<br />";

echo date('Y-m-d',strtotime("now"));

?>