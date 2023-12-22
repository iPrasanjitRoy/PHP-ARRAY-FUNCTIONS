<?php
/* --------- Delete From End------- */
$fruits = ['Apple', 'Banana', 'Orange'];
$lastFruit = array_pop($fruits);

echo "Removed Element: $lastFruit <br>";
echo "<pre>";
print_r($fruits);
echo "</pre>";



/* --------- Add On Ending On The Array---------- */
$fruits = ['Apple', 'Banana', 'Orange'];
$numAdded = array_push($fruits, 'Grapes', 'Kiwi');

echo "Number Of Elements Added: $numAdded <br>";
echo "<pre>";
print_r($fruits);
echo "</pre>";

?>