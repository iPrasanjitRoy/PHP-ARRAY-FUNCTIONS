<?php
/*-------Array Range Function------- */
$newArray = range(0, 10);

echo "<pre>";
print_r($newArray);
echo "</pre>";

/*-------Using Step------- */

$newArray1 = range(0, 100, 10);

echo "<pre>";
print_r($newArray1);
echo "</pre>";


/*-------Using Alphabet------- */

$newArray2 = range('A', 'Z');

echo "<pre>";
print_r($newArray2);
echo "</pre>";


/*-------Foreach Array Range Function------- */

foreach (range('A', 'Z') as $letter) {
    echo $letter . "<br>";
}

?>