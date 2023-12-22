<?php
/*-------Array Sorting Function------- */
$food = array('Orange', 'Banana', 'Grapes', 'Apple');

sort($food);

echo "<pre>";
print_r($food);
echo "</pre>";


rsort($food);

echo "<pre>";
print_r($food);
echo "</pre>";


/*-------Numerical Index array------- */

$food1 = [20, 15, 4, 64];

rsort($food1);

echo "<pre>";
print_r($food1);
echo "</pre>";

/*-------Use Associative Array ------- */

$food2 = array("D" => "Lemon",
    "A" => "Orange",
    "B" => "Banana",
    "C" => "Apple"
);
sort($food2);

echo "<pre>";
print_r($food2);
echo "</pre>";

/*-------Maintain Also Index----------*/

$food3 = array("D" => "Lemon",
    "A" => "Orange",
    "B" => "Banana",
    "C" => "Apple"
);
asort($food3);

echo "<pre>";
print_r($food3);
echo "</pre>";

/*-------- Associative Reverse Sort-----------*/

arsort($food3);

echo "<pre>";
print_r($food3);
echo "</pre>";


/*-------key Sort------- */

ksort($food3);

echo "<pre>";
print_r($food3);
echo "</pre>";

/*-------key Reverse Sort------- */
krsort($food3);

echo "<pre>";
print_r($food3);
echo "</pre>";

/*--------- Nat Sort --- Natural Order Sort --- Algorithm ------- */

$array1 = array("img12.png", "img10.png", "img2.png", "img1.png");

natsort($array1);

echo "<pre>";
print_r($array1);
echo "</pre>";

/*--------- Nat Sort - Case Incentive "Natural Order" Algorithm ------- */
$array2 = array("Img12.png", "Img10.png", "img2.png", "img1.png");

natcasesort($array2);

echo "<pre>";
print_r($array2);
echo "</pre>";

/*-------Array_Multi Sort  --- Not Create New Array------- */

$foods = array("Orange", "Banana");
$veggie = array("Lemon", "Carrot");

array_multisort($foods, $veggie);

echo "<pre>";
print_r($foods);
echo "</pre>";

echo "<pre>";
print_r($veggie);
echo "</pre>";

/*-------ARRAY_REVERSE------- */

$foods1 = array('Orange', 'Banana', 'Grapes', 'Apple');

$newArray = array_reverse($foods1);

echo "<pre>";
print_r($newArray);
echo "</pre>";

?>