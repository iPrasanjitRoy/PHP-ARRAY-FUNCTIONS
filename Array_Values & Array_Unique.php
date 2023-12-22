<?php
/* ------------Array Values------------ */
$a1 = array("A" => "Red", "B" => "Green", "C" => "Red", "D" => "Yellow");

$newArray = array_values($a1);

echo "<pre>";
print_r($newArray);
echo "</pre>";

/* ---------Array Unique---------*/

$newArray1 = array_unique($a1);

echo "<pre>";
print_r($newArray1);
echo "</pre>";

?>