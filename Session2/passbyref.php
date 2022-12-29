<?php
$value = 1000;
function doubleValue(&$v)
{
    $v = $v * 2;
}

echo "Old Value: $value<br />";
doubleValue($value);
echo "New Value: $value<br />";