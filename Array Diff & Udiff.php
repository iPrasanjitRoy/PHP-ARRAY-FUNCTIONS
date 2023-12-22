<?php

$array1 = array("Red", "Green", "Blue");
$array2 = array("Green", "Blue", "Yellow");
$array3 = array("Blue", "Yellow", "Orange");

$result = array_diff($array1, $array2, $array3);

echo '<pre>';
print_r($result);
echo '</pre>';

$a1 = array("A" => "Red", "B" => "Green", "C" => "Blue", "D" => "Yellow");
$a2 = array("A" => "Red", "F" => "Green", "D" => "Purple");

$newArray = array_diff($a1, $a2);

echo '<pre>';
print_r($newArray);
echo '</pre>';

/* ----------- Compare  Only Key------------- */
$a1 = array("A" => "Red", "B" => "Green", "C" => "Blue", "D" => "Yellow");
$a2 = array("A" => "Red", "F" => "Green", "D" => "Purple");

$newArray1 = array_diff_key($a1, $a2);

echo '<pre>';
print_r($newArray1);
echo '</pre>';

/* ---------Compare Key And Value Both-----Only Compare Associative Array----- */
$a1 = array("A" => "Red", "B" => "Green", "C" => "Blue", "D" => "Yellow");
$a2 = array("A" => "Red", "F" => "Green", "D" => "Purple");

$newArray2 = array_diff_assoc($a1, $a2);

echo "<pre>";
print_r($newArray2);
echo "</pre>";

/* ---------Compare Key And Value Both With Callback Function----------- */
function compare($a, $b)
{
    if ($a === $b) {
        return 0;
    }
    return ($a > $b) ? 1 : -1;
}

$a1 = array("A" => "Red", "B" => "Green", "C" => "Blue", "D" => "Yellow");
$a2 = array("A" => "Red", "F" => "Green", "D" => "Purple");

$newArray3 = array_diff_uassoc($a1, $a2, "compare");
$newArrays = array_diff_uassoc($a1, $a2, "strcasecmp");

echo "<pre>";
print_r($newArray3);
echo "</pre>";

echo "<pre>";
print_r($newArrays);
echo "</pre>";


$newArray4 = array_udiff_assoc($a1, $a2, "compare");

echo "<pre>";
print_r($newArray4);
echo "</pre>";

/* ----------Compare  Only Key With Function------------ */
$a1 = array("A" => "Red", "B" => "Green", "C" => "Blue", "D" => "Yellow");
$a2 = array("A" => "Red", "F" => "Green", "D" => "Purple");
$newArray5 = array_diff_ukey($a1, $a2, "compare");

echo "<pre>";
print_r($newArray5);
echo "</pre>";

/* --------Compare  Only Value With Function----------- */
$newArray6 = array_udiff($a1, $a2, "compare");

echo "<pre>";
print_r($newArray6);
echo "</pre>";

/* --------Compare  Both Value And Key With Two Different Functions----------- */
function compareValue($a, $b)
{
    if ($a === $b) {
        return 0;
    }
    return ($a > $b) ? 1 : -1;
}

$newArray7 = array_udiff_uassoc($a1, $a2, "compare", "compareValue");

echo "<pre>";
print_r($newArray7);
echo "</pre>";
?>