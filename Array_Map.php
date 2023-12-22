<?php
$numbers = array(1, 2, 3, 4, 5);
$multiplier = 2;

function multiplyByConstant($value)
{
    global $multiplier;
    return $value * $multiplier;
}

$result = array_map('multiplyByConstant', $numbers);


echo "Original array: ";
print_r($numbers);

echo "Modified array: ";
print_r($result);

/* -------Simple  Array Map-------*/
function square($n)
{
    return $n * $n;
}

$a = [1, 2, 3, 4, 5];

$newArray = array_map('square', $a);

echo "<pre>";
print_r($newArray);
echo "</pre>";


/* -------Array Mapping with Two Arrays -------*/
function square1($n, $m)
{
    return "$n For $m";
}

$a = [1, 2, 3, 4, 5];
$b = ['Lemon', 'Orange', 'Banana', 'Apple', 'Guava'];

$newArray1 = array_map('square1', $a, $b);

echo "<pre>";
print_r($newArray1);
echo "</pre>";

/* -------Return Mutlidimensional Array-------*/

function square2($n, $m)
{
    return [$n => $m];
}

$a = [1, 2, 3, 4, 5];
$b = ['Lemon', 'Orange', 'Banana', 'Apple', 'Guava'];


$newArray2 = array_map('square2', $a, $b);

echo "<pre>";
print_r($newArray2);
echo "</pre>";


/* -------Passing No Function-------*/

$a = [1, 2, 3, 4, 5];
$b = ['Lemon', 'Orange', 'Banana', 'Apple', 'Guava'];


$newArray3 = array_map(null, $a, $b);

echo "<pre>";
print_r($newArray3);
echo "</pre>";

/* -------Using Associative Array-------*/
function square3($n)
{
    return strtoupper($n);
}

$a1 = array("One" => "Apple", "Two" => "Banana", "Three" => "Orange");

$newArray4 = array_map("square3", $a1);

echo "<pre>";
print_r($newArray4);
echo "</pre>";

?>