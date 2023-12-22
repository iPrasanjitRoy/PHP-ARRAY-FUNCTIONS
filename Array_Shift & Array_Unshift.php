<?php
/*------- Add On Starting On The Array------ */
$fruits = ['Apple', 'Banana', 'Orange'];
$firstFruit = array_shift($fruits);

echo "Removed Element: $firstFruit <br>";
echo "<pre>";
print_r($fruits);
echo "</pre>";

/*------ Delete From Start------ */
$fruits = ['Banana', 'Orange'];
$numAdded = array_unshift($fruits, 'Apple', 'Grapes');

echo "Number Of Elements Added: $numAdded <br>";
echo "<pre>";
print_r($fruits);
echo "</pre>";

?>