<?php
$color = ["Red", "Green", "Blue", "Yellow"];
$newArray = array_keys($color);

echo '<pre>';
print_r($newArray);
echo '</pre>';


$color1 = [
    "First" => "Red",
    "Second" => "Green",
    "Third" => "Blue",
    "Fourth" => "Yellow"
];

$newArray1 = array_keys($color1);
echo '<pre>';
print_r($newArray1);
echo '</pre>';


$newArray2 = array_key_first($color1);

echo '<pre>';
print_r($newArray2);
echo '</pre>';

$newArray3 = array_key_last($color1);
echo '<pre>';
print_r($newArray3);
echo '</pre>';


$newArray4 = array_key_exists("Third", $color1);
echo '<pre>';
print_r($newArray4);
echo '</pre>';

$newArray5 = key_exists("Second", $color1);
echo '<pre>';
print_r($newArray5);
echo '</pre>';

?>