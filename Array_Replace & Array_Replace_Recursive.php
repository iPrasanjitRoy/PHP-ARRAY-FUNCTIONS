<?php
$fruit = ['Orange', 'Banana', 'Apple', 'Grapes'];
$veggie = ['Carrot', 'Pea'];

$newArray = array_replace($fruit, $veggie);

echo "<pre>";
print_r($newArray);
echo "</pre>";


/*----- Index Array --------  */
$color = ['Red', 'Green', 'Blue'];

$newArray = array_replace($fruit, $veggie, $color);

echo "<pre>";
print_r($newArray);
echo "</pre>";



/* ----------------Associative Array------------------- */
$veggiex = ['A' => 'Carrot', 'B' => 'Pea'];
$veggiexx = ['A' => 'Carrot_Replace', 1 => 'Pea'];
$newArray = array_replace($veggiex, $veggiexx);

echo "<pre>";
print_r($newArray);
echo "</pre>";

/* --------------Array Replace Function----------------- */

$veggiex = ['A' => 'Carrot', 'B' => 'Pea'];
$veggiexx = ['A' => 'Carrot_Replace', 1 => 'Pea'];
$fruitx = ['Orange', 'B' => 'Banana', 'Apple', 'Grapes'];

$newArray = array_replace($veggiex, $veggiexx, $fruitx);

echo "<pre>";
print_r($newArray);
echo "</pre>";

/* ---- Array_Replace_Recursive----------- */
$array1 = array("A" => array("Red"), "B" => array("Green", "Pink"));
$array2 = array("A" => array("Yellow"), "B" => array("Black"));

$newArray = array_replace_recursive($array1, $array2);

echo "<pre>";
print_r($newArray);
echo "</pre>";


?>