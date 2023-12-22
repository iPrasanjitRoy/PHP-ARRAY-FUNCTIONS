<?php
/*-------Array List Function------- */

$color = array('Red', 'Green', 'Blue');
list($a, $b, $c) = $color;

echo "Value Of A: $a <br>";
echo "Value Of B: $b <br>";
echo "Value Of C: $c <br>";


/*-------Array Numberic Value------- */
$color1 = array(10, 20, 30);
list($one, $two, $three) = $color1;

echo "Value Of 1: $one <br>";
echo "Value Of 2: $two <br>";
echo "Value Of 3: $three <br>";

/*------- Remove Variable------- */
list($a, , $c) = $color1;

echo "Value Of A: $a <br>";
echo "Value Of C: $c <br>";

/*-------only Works With Numeric Index------- */
$color2 = array(0 => 'Red', 1 => 'Green', 2 => 'Blue');
list($a, $b, $c) = $color2;

echo "Value Of A: $a <br>";
echo "Value Of B: $b <br>";
echo "Value Of C: $c <br>";

/*-------ALL VALUES IN ONE ARRAY------- */
$color2 = array(0 => 'Red', 1 => 'Green', 2 => 'Blue');
list($a[0], $a[1], $a[2]) = $color2;

echo "Value Of A 1: $a[0] <br>";
echo "Value Of A 2: $a[1] <br>";
echo "Value Of A 3 : $a[2] <br>";


?>