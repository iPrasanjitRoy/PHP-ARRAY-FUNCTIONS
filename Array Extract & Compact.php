<?php
/*-------Array Extract Function------- */
$a = "Orange";
$color = array('a' => 'Red', 'b' => 'Green', 'c' => 'Blue');
extract($color);

echo "Value Of A: $a <br>";
echo "Value Of B: $b <br>";
echo "Value Of C: $c <br>";


/*-------Extract Rules------- */
extract($color, EXTR_SKIP);
echo "Value Of A: $a <br>";
echo "Value Of B: $b <br>";
echo "Value Of C: $c <br>";

// EXTR_PREFIX_SAME
extract($color, EXTR_PREFIX_SAME, "Test");
echo "Value Of A: $a <br>";
echo "Value Of A1: $Test_a <br>";
echo "Value Of B: $b <br>";
echo "Value Of C: $c <br>";

// EXTR_PREFIX_ALL
extract($color, EXTR_PREFIX_ALL, "Test");
echo "Value Of A: $a <br>";
echo "Value Of A1: $Test_a <br>";
echo "Value Of B: $$Test_b <br>";
echo "Value Of C: $$Test_c <br>";


/*-------Compact Function------- */
$firstname = "Prasanjit";
$lastname = "Roy";
$age = "20";
$gender = "Male";
$country = "India";

$newArray = compact("firstname", "lastname", "age");

echo '<pre>';
print_r($newArray);
echo '</pre>';

$extra = ["gender", "country"];
$newArray1 = compact("firstname", "lastname", "age", $extra);

echo '<pre>';
print_r($newArray1);
echo '</pre>';

?>