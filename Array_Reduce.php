<?php
function sum($carry, $item)
{
    $carry += $item;
    return $carry;
}
function multiply($carry, $item)
{
    $carry *= $item;
    return $carry;
}

$numbers = array(1, 2, 3, 4, 5);
$total = array_reduce($numbers, 'sum');

echo "Total: $total";

$product = array_reduce($numbers, 'multiply', 1);

echo "Product: $product";



function myFunction($n, $m)
{
    return $n . $m;
}

$a = ['Orange', 'Banana', 'Apple'];

$newArray = array_reduce($a, 'myFunction');

echo "<pre>";
print_r($newArray);
echo "</pre>";

$newArray2 = array_reduce($a, 'myFunction', 20);
echo "<pre>";
print_r($newArray2);
echo "</pre>";

?>