<?php
/*------------Array Rand------------ */
$fruits = array("Apple", "Banana", "Orange", "Grape", "Kiwi");
$randomKey = array_rand($fruits);

$randomFruit = $fruits[$randomKey];

echo "Random fruit: $randomFruit";



$colors = array("Red", "Green", "Blue", "Yellow", "Orange");

$randomKeys = array_rand($colors, 2);

$randomColor1 = $colors[$randomKeys[0]];
$randomColor2 = $colors[$randomKeys[1]];

echo "Random color 1: $randomColor1<br>";
echo "Random color 2: $randomColor2";

$color1 = array("A" => "Red", "B" => "Green", "C" => "Blue", "D" => "Yellow");
$randomKeys = array_rand($color1, 2);

echo "<pre>";
print_r($randomKeys);
echo "</pre>";


$randomColor1 = $color1[$randomKeys[0]];
$randomColor2 = $color1[$randomKeys[1]];

echo "Random color 1: $randomColor1<br>";
echo "Random color 2: $randomColor2<br>";


/*------------Shuffle Array------------ */
$cards = array("Ace", 2, 3, 4, 5, 6, 7, 8, 9, 10, "Jack", "Queen", "King");

shuffle($cards);

echo "<pre>";
print_r($cards);
echo "</pre>";

?>