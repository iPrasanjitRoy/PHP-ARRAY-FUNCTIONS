<?php
$fruits = ['Apple', 'Banana', 'Orange', 'Grapes', 'Kiwi'];
$slice = array_slice($fruits, 1, 3);

echo "<pre>";
print_r($slice);
echo "</pre>";


/*-----Negative Offset------*/
$numbers = [1, 2, 3, 4, 5];
$slice = array_slice($numbers, -5, 4);

echo "<pre>";
print_r($slice);
echo "</pre>";

/*------------Preserve Keys------------*/
$fruits = ['Apple', 'Banana', 'Orange', 'Grapes', 'Kiwi'];
$slice = array_slice($fruits, 2, 2, true);

echo "<pre>";
print_r($slice);
echo "</pre>";


?>