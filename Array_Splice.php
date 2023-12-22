<?php
/*---------Example 1: Basic Usage---------*/
$fruits = ['Apple', 'Banana', 'Orange', 'Grapes', 'Kiwi'];
$removed = array_splice($fruits, 1, 2);

echo "<pre>";
print_r($removed);
print_r($fruits);
echo "</pre>";



/*------------Example 2: Replace Removed Elements------------*/
$numbers = [1, 2, 3, 4, 5];
$removed = array_splice($numbers, 1, 2, ['A', 'B', 'C']);

echo "<pre>";
print_r($removed);
print_r($numbers);
echo "</pre>";



/*------------Example 3: Remove Everything After Offset-----------*/
$colors = ['Red', 'Green', 'Blue', 'Yellow'];
$removed = array_splice($colors, 2);

echo "<pre>";
print_r($removed);
print_r($colors);
echo "</pre>";


?>